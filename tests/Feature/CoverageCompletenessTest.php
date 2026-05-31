<?php

use App\Enums\TeamRole;
use App\Http\Middleware\EnsureTeamMembership;
use App\Http\Responses\LoginResponse;
use App\Http\Responses\RegisterResponse;
use App\Http\Responses\TwoFactorLoginResponse;
use App\Http\Responses\VerifyEmailResponse;
use App\Models\Membership;
use App\Models\Team;
use App\Models\TeamInvitation;
use App\Models\User;
use App\Notifications\Teams\TeamInvitation as TeamInvitationNotification;
use App\Policies\TeamPolicy;
use App\Providers\AppServiceProvider;
use App\Providers\FortifyServiceProvider;
use App\Rules\TeamName;
use App\Rules\ValidTeamInvitation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\HttpKernel\Exception\HttpException;

test('team helper edge cases are covered', function () {
    Team::factory()->create(['name' => 'Acme Odd', 'slug' => 'acme-legacy']);

    $team = Team::factory()->create(['name' => 'Acme', 'slug' => null]);

    expect($team->slug)->toBe('acme-1');

    $user = User::factory()->create();
    $ownedTeam = Team::factory()->create();
    $otherTeam = Team::factory()->create();

    $ownedTeam->members()->attach($user, ['role' => TeamRole::Owner->value]);

    expect($user->ownedTeams()->pluck('teams.id')->all())->toContain($ownedTeam->id)
        ->and($user->switchTeam($otherTeam))->toBeFalse()
        ->and($user->ownsTeam($ownedTeam))->toBeTrue()
        ->and($user->ownsTeam($otherTeam))->toBeFalse()
        ->and(TeamRole::Owner->level())->toBe(3)
        ->and(TeamRole::Admin->level())->toBe(2)
        ->and(TeamRole::Member->level())->toBe(1)
        ->and(TeamRole::Owner->isAtLeast(TeamRole::Admin))->toBeTrue()
        ->and(TeamRole::Member->isAtLeast(TeamRole::Admin))->toBeFalse();
});

test('team middleware role and switching branches are covered', function () {
    Route::get('coverage/current-team/{current_team}/dashboard', fn () => 'ok')
        ->middleware(['web', 'auth', EnsureTeamMembership::class])
        ->name('coverage.current-team.dashboard');

    Route::get('coverage/teams/{team}/admin', fn () => 'ok')
        ->middleware(['web', 'auth', EnsureTeamMembership::class.':admin'])
        ->name('coverage.teams.admin');

    Route::get('coverage/teams/{team}/invalid-role', fn () => 'ok')
        ->middleware(['web', 'auth', EnsureTeamMembership::class.':invalid-role'])
        ->name('coverage.teams.invalid-role');

    $user = User::factory()->create();
    $admin = User::factory()->create();
    $member = User::factory()->create();
    $team = Team::factory()->create();

    $team->members()->attach($user, ['role' => TeamRole::Member->value]);
    $team->members()->attach($admin, ['role' => TeamRole::Admin->value]);
    $team->members()->attach($member, ['role' => TeamRole::Member->value]);

    $this
        ->actingAs($user)
        ->get("/coverage/current-team/{$team->slug}/dashboard")
        ->assertOk();

    expect($user->fresh()->current_team_id)->toBe($team->id);

    $this
        ->actingAs($admin)
        ->get("/coverage/teams/{$team->slug}/admin")
        ->assertOk();

    $this
        ->actingAs($member)
        ->get("/coverage/teams/{$team->slug}/admin")
        ->assertForbidden();

    $this
        ->actingAs($admin)
        ->get("/coverage/teams/{$team->slug}/invalid-role")
        ->assertForbidden();
});

test('fortify response branches are covered', function () {
    $jsonRequest = Request::create('/login', 'POST', [], [], [], ['HTTP_ACCEPT' => 'application/json']);

    expect((new LoginResponse)->toResponse($jsonRequest)->getStatusCode())->toBe(200)
        ->and((new RegisterResponse)->toResponse($jsonRequest)->getStatusCode())->toBe(201)
        ->and((new VerifyEmailResponse)->toResponse($jsonRequest)->getStatusCode())->toBe(204)
        ->and((new TwoFactorLoginResponse)->toResponse($jsonRequest)->getStatusCode())->toBe(200);

    $user = User::factory()->create();
    $team = Team::factory()->create(['slug' => 'response-team']);
    $team->members()->attach($user, ['role' => TeamRole::Owner->value]);
    $user->switchTeam($team);

    $redirectRequest = Request::create('/two-factor-challenge', 'POST');
    $redirectRequest->setUserResolver(fn () => $user);

    expect((new TwoFactorLoginResponse)->toResponse($redirectRequest)->getTargetUrl())
        ->toContain('/response-team');

    expect(fn () => (new LoginResponse)->toResponse(Request::create('/login', 'POST')))
        ->toThrow(HttpException::class);

    $userWithoutTeam = User::factory()->create();
    $userWithoutTeam->teamMemberships()->delete();
    $userWithoutTeam->update(['current_team_id' => null]);
    $userWithoutTeam = $userWithoutTeam->fresh();

    $requestWithoutTeam = Request::create('/login', 'POST');
    $requestWithoutTeam->setUserResolver(fn () => $userWithoutTeam);

    expect(fn () => (new LoginResponse)->toResponse($requestWithoutTeam))
        ->toThrow(HttpException::class);
});

test('team relationships invitations notifications and policies are covered', function () {
    $inviter = User::factory()->create(['name' => 'Owner User']);
    $team = Team::factory()->create(['name' => 'Coverage Team']);
    $team->members()->attach($inviter, ['role' => TeamRole::Owner->value]);

    $membership = Membership::query()
        ->where('team_id', $team->id)
        ->where('user_id', $inviter->id)
        ->firstOrFail();

    expect($membership->team->is($team))->toBeTrue()
        ->and($membership->user->is($inviter))->toBeTrue();

    $invitation = TeamInvitation::factory()
        ->expiresIn(1)
        ->create([
            'team_id' => $team->id,
            'email' => 'new-member@example.com',
            'invited_by' => $inviter->id,
        ]);

    expect($invitation->inviter->is($inviter))->toBeTrue()
        ->and($invitation->isPending())->toBeTrue();

    $notification = new TeamInvitationNotification($invitation);
    $mail = $notification->toMail((object) []);

    expect($notification->via((object) []))->toBe(['mail'])
        ->and($mail->subject)->toContain('Coverage Team')
        ->and($notification->toArray((object) []))->toMatchArray([
            'invitation_id' => $invitation->id,
            'team_id' => $team->id,
            'team_name' => 'Coverage Team',
            'role' => TeamRole::Member->value,
        ]);

    $policy = new TeamPolicy;
    $outsider = User::factory()->create();

    expect($policy->viewAny($inviter))->toBeTrue()
        ->and($policy->view($outsider, $team))->toBeFalse()
        ->and($policy->create($inviter))->toBeTrue()
        ->and($policy->addMember($inviter, $team))->toBeTrue();
});

test('application provider and fortify limiter branches are covered', function () {
    app()->detectEnvironment(fn () => 'production');

    (new AppServiceProvider(app()))->boot();

    expect(Password::default())->toBeInstanceOf(Password::class);

    app()->detectEnvironment(fn () => 'testing');

    (new AppServiceProvider(app()))->boot();
    (new FortifyServiceProvider(app()))->boot();

    $twoFactorRequest = Request::create('/two-factor-challenge', 'POST');
    $twoFactorRequest->setLaravelSession(app('session')->driver());
    $twoFactorRequest->session()->put('login.id', 123);

    $passkeyRequest = Request::create('/passkeys/login', 'POST');
    $passkeyRequest->setLaravelSession(app('session')->driver());

    expect(RateLimiter::limiter('two-factor')($twoFactorRequest))->toBeInstanceOf(Limit::class)
        ->and(RateLimiter::limiter('passkeys')($passkeyRequest))->toBeInstanceOf(Limit::class);
});

test('validation rule failure branches are covered', function () {
    $teamNameMessages = [];

    (new TeamName)->validate('name', 'admin', function (string $message) use (&$teamNameMessages): void {
        $teamNameMessages[] = $message;
    });

    expect($teamNameMessages)->not->toBeEmpty();

    $invitationMessages = [];

    (new ValidTeamInvitation(null))->validate('invitation', 'not-an-invitation', function (string $message) use (&$invitationMessages): void {
        $invitationMessages[] = $message;
    });

    $acceptedInvitation = TeamInvitation::factory()->accepted()->create();

    (new ValidTeamInvitation(User::factory()->create(['email' => $acceptedInvitation->email])))->validate(
        'invitation',
        $acceptedInvitation,
        function (string $message) use (&$invitationMessages): void {
            $invitationMessages[] = $message;
        },
    );

    expect($invitationMessages)->toHaveCount(2);
});
