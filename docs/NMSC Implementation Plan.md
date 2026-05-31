# NMSC Implementation Plan

This plan translates the Business Requirement Specification into phased delivery for the Laravel 13, Inertia Vue 3, Fortify, Wayfinder, Tailwind, and Pest application already present in this repository.

The implementation should be treated as an AI-assisted, human-in-the-loop business platform. AI may extract, match, rank, summarize, and recommend; humans must validate, approve, override with justification, and own final commercial, compliance, financial, and operational decisions.

## Current application baseline

- Laravel 13 backend with Fortify authentication, passkeys, two-factor authentication, teams, Inertia Vue 3, Wayfinder, Tailwind CSS 4, and Pest 4.
- Domain modules from the BRS are not yet implemented; existing code is mostly platform/auth/team scaffolding.
- Existing team support should be evaluated before mapping it to Milaha legal entities, business units, departments, locations, and approval hierarchies.

## Delivery principles

- Build shared foundations before vertical modules: source-of-truth, identity, roles, DoA, documents, audit, queues, AI governance, and integration contracts.
- Use thin controllers, Form Requests, Actions/services, policies, Eloquent models, queued jobs, events, notifications, and Pest feature tests.
- Use Wayfinder-generated route/action helpers from Vue pages and avoid hardcoded URLs in frontend forms or navigation.
- Treat integrations as adapters behind interfaces so Oracle, WMS, email, OCR, and AI providers can be swapped without rewriting business workflows.
- Make every AI action traceable: input document, extracted fields, model/provider, prompt version, confidence score, suggested changes, human decision, and final output.
- Design for audit readiness: immutable or tamper-evident logs for approvals, quotation versions, supplier bids, invoice exports, overrides, and sensitive document access.

## Phase 0 - Discovery, governance, and technical spikes

### Goals

Resolve decisions that affect every downstream module before building irreversible data models.

### Scope

- Produce a source-of-truth matrix for every core entity:
  - Customers, vendors, products/items, services, vessels, locations, inventory balances, credit limits, FX rates, quotations, SOs, POs, GRNs, invoices, contracts, and documents.
  - For each entity, define owner system, sync direction, conflict policy, update frequency, and required identifiers.
- Default source-of-truth assumption:
  - NMSC is authoritative for most commercial and operational master data: customers, vendors, items/services, vessel/customer extensions, contacts, categories, product alternates, compliance documents, terms, contracts, pricing, workflows, and AI review records.
  - Approved NMSC master data changes should be pushed to Oracle through Oracle Integration Cloud or approved middleware.
  - Oracle/Finance should remain authoritative for posted ledger outcomes, payment status, financial controls, and any finance-only identifiers.
  - Oracle SCM/WMS should remain authoritative for physical stock balances and stock movement confirmations unless Phase 0 confirms NMSC will own a specific inventory subset.
- Confirm Oracle integration paths:
  - Oracle CX for customer data.
  - Oracle Fusion Finance for credit limits, AP, and AR.
  - Oracle Procurement for approved vendors, POs, and GRNs.
  - Oracle SCM and WMS for inventory availability, reservations, stock movement, batches, expiry, and UOM consistency.
- Build an early integration walking skeleton:
  - Read one customer/credit-limit record or inventory record from the selected Oracle/WMS interface.
  - Push or simulate one outbound vendor, PO, or AR/AP payload through the selected transport.
  - Use Oracle Integration Cloud or the approved middleware layer as the primary transport for Oracle and WMS connectivity.
  - Confirm whether each message is request/response, webhook/event-driven, or scheduled batch through that middleware.
- Define AI governance:
  - Approved AI provider and data residency constraints.
  - What data can be sent to AI/OCR services.
  - Human review thresholds.
  - Confidence scoring and fallback-to-manual rules.
  - Prompt/version approval process.
  - Cost, token, and failure monitoring.
- Define supplier portal strategy:
  - Use RFQ-specific signed links for the first pilot to reduce supplier onboarding friction.
  - Scope each link to a supplier, RFQ, deadline, and allowed actions.
  - Add rate limits, expiry, audit logs, optional one-time passcodes, and attachment validation.
  - Keep registered supplier accounts as a later option for strategic or high-volume suppliers.
  - Sealed bid requirements using application-level encryption, deadline-gated unlock jobs, and audit proof.
- Define localization and finance standards:
  - Keep the application UI English-only for the first pilot.
  - Include Arabic/RTL support for customer-facing PDFs and generated documents where required.
  - QAR base currency, multi-currency, FX source, rounding rules, tax/VAT handling, and date format requirements.
- Define initial reporting performance targets for large tenders and dashboards.

### Outputs

- Source-of-truth matrix.
- Integration contract notes and payload examples.
- AI/HITL governance policy.
- Supplier portal security decision.
- Phase-by-phase backlog approved by stakeholders.

### Package and infrastructure decisions

- Use Laravel AI SDK as the primary AI abstraction:
  - Install `laravel/ai`.
  - Publish AI SDK configuration and migrations with `php artisan vendor:publish --provider="Laravel\\Ai\\AiServiceProvider"`.
  - Run migrations for the SDK conversation tables.
  - Configure Google Gemini as the initial provider through `config/ai.php` and `GEMINI_API_KEY`.
  - Keep business code coupled to Laravel AI SDK agents and contracts, not provider-specific SDKs, so providers can be changed later.
  - Use SDK agents, structured output, attachments, embeddings, vector stores, failover, events, and testing fakes where appropriate.
- Use Google Document AI as the primary OCR/document extraction service for scanned RFQs, supplier PDFs, images, and tabular documents.
  - Keep the integration behind an application adapter so processors or providers can change later without affecting business workflows.
  - Confirm processor types for RFQs, invoices, purchase orders, packing lists, and free-form supplier documents.
- Use Microsoft Graph / Microsoft 365 as the primary RFQ mailbox ingestion path:
  - Install `microsoft/microsoft-graph`.
  - Use Graph subscriptions/webhooks where possible instead of polling.
  - Keep IMAP as a non-initial fallback only if Microsoft 365 access is unavailable.

## Phase 1 - Platform foundation

### Goals

Create the shared application foundation used by every BRS workflow.

### Scope

- Extend identity and organization modeling:
  - Legal entities, business units, departments, cost centres, operational locations, user profiles, roles, permissions, and access rights.
  - Decide whether existing teams represent business units, departments, or operational workspaces.
- Implement RBAC and policy-based authorization.
- Implement DoA foundation:
  - Configurable approval levels, thresholds, margin rules, delegation, leave coverage, escalation windows, and approval tasks.
  - Separate workflow state management from approval-routing rules.
- Implement centralized reference data:
  - Status values, currencies, UOMs, product categories, vendor categories, document types, reason codes, HSSE requirements, terms categories, and notification templates.
- Implement centralized sequence generation:
  - RFQ, quotation, tender, contract, vendor, item, service, SO, PO, GRN, DN, invoice, credit note, insurance request, and workflow task references.
  - Support BU/year prefixes and concurrency-safe number generation.
- Implement platform audit and activity logging:
  - User actions, model changes, approvals, sensitive access, document deletion, AI suggestions, overrides, and integration events.
  - Add checksum chaining or immutable storage for critical audit events.
- Implement queues, scheduling, notifications, and monitoring:
  - Redis-backed queues, Horizon dashboard, failed job handling, job uniqueness where needed, retry/backoff strategy, and scheduled reminders.
- Establish frontend shell:
  - Navigation groups for master data, commercial workflows, procurement, delivery, finance, documents, reports, settings, and AI review queues.
- Establish testing baseline:
  - Factories, feature tests, policy tests, job tests, and architecture tests for key conventions.

### Packages to install

| Package | Purpose |
| --- | --- |
| `spatie/laravel-permission` | Roles and permissions for staff access control. |
| `spatie/laravel-activitylog` | Activity/audit trail baseline. |
| `spatie/laravel-model-states` | Explicit state machines for RFQs, quotes, POs, invoices, deliveries, and workflows. |
| `laravel/horizon` | Queue monitoring and retry visibility. |
| `sentry/sentry-laravel` | Error monitoring for AI, integration, and workflow failures. |
| `laravel/pennant` | Feature flags for phased rollout and controlled AI automation. |

### Infrastructure

- Redis for queues, cache, locks, Horizon, and rate limiting.
- Object storage decision for documents, exports, and immutable audit artifacts.

## Phase 2 - Master data and document management foundation

### Goals

Build reliable master data and document capabilities before RFQ, quotation, procurement, and finance workflows depend on them.

### Scope

- Master data modules:
  - Milaha legal entities and business units.
  - Locations and warehouses.
  - Customers, customer contacts, delivery sites, hierarchy, credit metadata, and Oracle identifiers.
  - Vendors, vendor contacts, bank data, categories, compliance documents, ports/regions, brands, and Oracle identifiers.
  - Products/items, services, categories, brands, alternates, IMPA codes, part numbers, packaging, UOM conversions, barcode/QR metadata, lifecycle status, obsolete/replacement links, and temporary item workflow.
  - Legal disclaimers and terms for quotations, contracts, tenders, and invoices.
- Document management:
  - Upload, preview, classification, metadata, linked records, sensitive access policies, expiry tracking, versioning, current-version tagging, bulk upload, and audit logs.
  - Required-document rules per vendor/product/contract/workflow type.
  - Virus scanning and file validation for customer/supplier uploads.
- Search foundation:
  - Keyword search for customers, vendors, products, services, contracts, documents, and operational records.
  - Prepare embedding/hybrid search for AI-assisted matching in Phase 3.
- Data migration preparation:
  - Seed only the minimum data needed for the first RFQ-to-quotation pilot: pilot customers, vendors, products/services, terms, users, roles, and approval rules.
  - Prepare templates and importers for broader legacy Excel lists and Oracle extracts, but defer large historical migration until after the pilot.

### Packages to install

| Package | Purpose |
| --- | --- |
| `spatie/laravel-medialibrary` | Document storage, conversions, metadata, and versionable attachments. |
| `laravel/scout` | Search abstraction for master data and documents. |
| `meilisearch/meilisearch-php` | Meilisearch driver for Scout keyword/hybrid search if selected. |
| `endroid/qr-code` | QR code generation for item/document references. |
| `picqer/php-barcode-generator` | Barcode generation for warehouse and document references. |

### Infrastructure

- Meilisearch or an approved search service.
- S3-compatible object storage with encryption and signed URLs.
- ClamAV or managed malware scanning for uploaded files.

## Phase 3 - AI intake, extraction, matching, and human review

### Goals

Create a reusable AI/HITL workbench that other modules can use safely.

### Scope

- Intake sources:
  - Manual RFQ upload.
  - Dedicated email inbox ingestion.
  - Customer web forms.
  - Future integrated B2B portal feeds.
- Document extraction pipeline:
  - Store original email, attachments, metadata, OCR output, parsed structured data, and parser confidence.
  - Handle Excel, PDF, scanned PDF/image, email body, and manually entered RFQs.
- AI extraction schemas:
  - Customer/contact, vessel, IMO, delivery port, ETA/ETD, urgency, item lines, IMPA, description, quantity, UOM, required date, notes, attachments.
- Master data matching:
  - Customer, vessel, location/port, item/service, IMPA, aliases, brand alternatives, vendors, and historical descriptions.
  - Use exact, fuzzy, search, and embedding-assisted matches with confidence scores.
- Human-in-the-loop review:
  - Queue records needing validation.
  - Highlight missing/ambiguous fields.
  - Let users accept, correct, reject, or create temporary records.
  - Require justification for overrides.
- AI observability:
  - Prompt registry, prompt versions, provider/model, token/cost telemetry, latency, result quality feedback, and regression evaluation samples.
  - Circuit breaker that routes work to manual validation when AI/OCR providers are unavailable.
- AI permissions:
  - Restrict who can approve AI-suggested master data creation, supplier ranking overrides, pricing suggestions, and auto-generated communications.

### Packages to install

| Package | Purpose |
| --- | --- |
| `laravel/ai` | Laravel-native AI SDK for agents, structured output, attachments, embeddings, vector stores, failover, and provider flexibility. |
| `google/cloud-document-ai` | Google Document AI client for OCR and structured document extraction. |
| `microsoft/microsoft-graph` | Microsoft 365 mailbox ingestion and webhook subscriptions. |
| `smalot/pdfparser` | Text-based PDF extraction only; not sufficient for scanned RFQs. |

### Infrastructure

- Google Document AI processors for scanned PDFs, images, and tabular RFQs.
- Google Cloud service account credentials and document-processing IAM permissions.
- Google Cloud Storage bucket if batch processing or asynchronous Document AI jobs require staged files.
- Embedding storage using Meilisearch hybrid search or PostgreSQL with `pgvector`, depending on database and hosting decisions.
- Google Gemini credentials, model configuration, and data retention controls.

## Phase 4 - Leads, opportunities, RFQs, and supplier sourcing

### Goals

Implement the commercial intake workflow from lead capture through supplier quote evaluation.

### Scope

- Lead management:
  - Manual leads, email-parsed leads, web inquiries, follow-up reminders, auto-close rules, dashboards, and conversion to opportunities.
- Opportunity management:
  - Opportunity lifecycle, expiry alerts, probability, estimated revenue, urgency, SPOC, vessel/port data, and conversion to RFQ.
- Customer RFQ management:
  - RFQ creation from validated AI intake or manual entry.
  - Assignment rules by customer, category, port, or SPOC.
  - Draft-needs-validation status for incomplete RFQs.
  - Inventory and historical pricing lookup hooks.
- Supplier RFQ automation:
  - Supplier selection by category, brand, vendor preference, port, region, performance, and compliance status.
  - Secure RFQ-specific signed supplier links for the pilot.
  - Submission deadlines, reminders, locked edits after submission, and manual-entry exception workflow.
- Sealed supplier bids:
  - Use application-level encryption for supplier submission payloads before the RFQ deadline.
  - Store receipt metadata and file hashes for audit, but keep commercial values unavailable to staff until unlock.
  - Run a deadline-gated unlock job that decrypts eligible submissions and populates the supplier comparison matrix.
  - Record unlock job status, actor/system identity, timestamps, and any failures.
  - Immutable submission log with timestamp, submitter, IP/device metadata, and file hashes.
- Supplier quote evaluation:
  - Comparison matrix, completeness flags, compliance flags, lowest price, best lead time, top supplier ranking, AI-assisted recommendations, attachments, internal notes, irregularity flags, and justified overrides.

### Packages to install

No additional package should be required beyond prior phases for pilot signed-link supplier access; use Laravel signed URLs, scoped tokens, rate limiting, and policies. Revisit packages only if registered supplier accounts or enterprise identity integration become required later.

## Phase 5 - Quotations, pricing, tenders, and contracts

### Goals

Generate compliant customer quotations and tenders from evaluated supplier offers, pricing rules, contracts, and approval workflows.

### Scope

- Pricing and margin engine:
  - Supplier cost, freight, customs, handling, storage, logistics, duties, FX, tax, discounts, markups, and margin calculations.
  - Margin deviations, justification, and approval triggers.
  - Expiry-sensitive inventory discount prompts.
- Customer quotation generation:
  - Auto-filled item details, availability, lead time, pricing, terms, validity, Milaha branding, comments, warranty/certification notes, and attachments.
  - Multi-currency support.
  - PDF and Excel export.
  - Email/smart-link delivery logs.
- Quotation versioning:
  - Version number, line changes, customer line-level rejection, reissue flow, approval re-triggering, and audit history.
- DoA approvals:
  - Auto-approval within configured thresholds.
  - Legal/management approvals for tenders and high-value submissions.
  - Locked approved quotes and reapproval on edits.
- Tender management:
  - 100+ line uploads, validation, grouped tender IDs, bulk pricing, consolidated proposal, and uniform terms.
- Contract management:
  - Customer and supplier contracts, rate cards, annexures, validity, renewal alerts, document requirements, versioning, deviation flags, and linkage to RFQs, quotations, POs, and orders.

### Packages to install

| Package | Purpose |
| --- | --- |
| `spatie/laravel-pdf` | Laravel PDF generation for branded documents, Arabic/RTL document output, and complex quotation/invoice layouts. |
| `openspout/openspout` | Streaming Excel import/export for large tenders and high-volume reports. |

### NPM packages

| Package | Purpose |
| --- | --- |
| `@tanstack/vue-table` | Large editable/comparison tables for tenders, supplier matrices, and reports. |

## Phase 6 - Sales orders, purchase orders, inventory, and delivery coordination

### Goals

Implement operational fulfilment from accepted quotation through delivery completion.

### Scope

- Sales orders:
  - Generate SOs from accepted quotations.
  - Versioning for quantity, price, or timeline changes.
  - Partial fulfilment and line-level statuses.
  - Stock availability checks across locations.
- Stock reservation:
  - Concurrency-safe reservation using cache/database locks.
  - ATP, reserved, on-hand, batch, expiry, and location visibility.
- Purchase orders:
  - Generate POs from selected supplier offers or manual vendor selection.
  - Multi-supplier sourcing from one SO.
  - PO approvals, status tracking, supplier confirmation, shipment updates, and exception handling.
- GRNs:
  - Receive against PO lines.
  - Record damaged, short, or substituted items.
  - Update inventory systems through integration adapters.
- Delivery planning:
  - Delivery queue/calendar, vessel ETA/ETD, port windows, handling requirements, driver/team assignment, and status updates.
- WMS dispatch:
  - Outbound request generation, pick/pack/dispatch status updates, packing lists, labels, loading checklists, and MSDS attachment handling.
- Delivery notes and POD:
  - DN generation, signed POD upload, photo upload, digital signature if approved, mobile-responsive access, completion status.
- Returns and exceptions:
  - Failed delivery, return-to-stock/write-off resolution, GRN reversal/adjustment, reason codes, substituted item approvals, and supplier performance impact.

### Packages to install

No new primary packages expected beyond queue, document, PDF, Excel, QR/barcode, and integration packages. If digital signature becomes legally significant, evaluate DocuSign or another approved e-signature integration separately.

## Phase 7 - Billing, supplier invoicing, Oracle AP/AR, and insurance

### Goals

Tie revenue and cost records to operational transactions and prepare finance-ready outputs.

### Scope

- Customer billing:
  - Proforma invoices and final customer bills from delivery/SO/quotation data.
  - Supporting-document validation before final approval.
  - Delivery method logs, acknowledgment smart links, payment status display, and overdue tracking.
- Supplier invoicing:
  - Supplier invoice capture after GRN.
  - PO/GRN/invoice three-way matching.
  - Variance validation, approval workflow, and Oracle AP export readiness.
- Additional expense allocation:
  - Freight, customs, clearance, handling, landed cost allocation by value, weight, volume, or manual method.
- Oracle AP/AR integration:
  - Approved billing and invoices exported with headers, lines, tax, references, source document links, status, timestamps, and retryable failure logs.
  - Payment status retrieved from Oracle.
  - Idempotency keys to avoid duplicate posting.
- Credit notes and reversals:
  - Approval workflows, audit trail, source invoice linkage, and Oracle export/reversal status.
- Insurance:
  - Insurance request PDFs generated from orders, POs, shipments, incoterms, cargo details, values, and cost centres.
  - Email submission to insurance department.
  - Defect logging on delivery/loading/offloading with optional photo attachments and traceability to shipment/delivery/insurance records.

### Packages to install

Use the document/PDF/Excel/integration packages selected in earlier phases. Oracle and WMS connectivity should go through Oracle Integration Cloud or the approved middleware layer unless a Phase 0 spike proves a direct adapter is required for a specific endpoint.

## Phase 8 - Reporting, dashboards, analytics, and AI insights

### Goals

Provide operational, commercial, inventory, finance, and management visibility from the transactional data built in prior phases.

### Scope

- Transaction dashboards:
  - RFQs, quotations, POs, SOs, invoices, deliveries, workflow approvals, overdue tasks, and bottlenecks.
  - Clickable status breakdowns with filters by customer, status, user, department, date range, product, category, sub-inventory, and salesperson.
- BRS report catalogue:
  - Daily purchase orders.
  - Quotation activities.
  - Lead and client activity.
  - Inventory status.
  - GRN.
  - Sales summary.
  - Delivery tracking.
  - Complete transaction report.
  - Outbound report.
  - Packing list.
  - Invoicing activities.
  - Data validation reference report.
  - Stock consumption.
  - Order-to-invoice.
  - Deals and tenders.
  - Order processing efficiency.
  - Product-specific, sales efficiency, customer-focused, sales performance, and stock/inventory reports.
- Export support:
  - Excel/PDF exports with role-based access and background generation for heavy reports.
- Reporting performance:
  - Indexed queries, eager loading, cached summaries, queued exports, and optional reporting tables/materialized aggregates.
- AI-assisted analytics:
  - Vendor scoring, lead-time forecasting, price estimation, smart supplier suggestions, report narratives, anomaly detection, and stock replenishment suggestions.
  - Keep predictive features behind feature flags until sufficient historical data exists.

### NPM packages

| Package | Purpose |
| --- | --- |
| `vue-echarts` | Rich dashboards and dense operational charts. |
| `echarts` | Charting engine for reports and analytics. |

## Phase 9 - Integration hardening, migration, security, and rollout

### Goals

Turn the modules into a production-ready enterprise system.

### Scope

- Complete Oracle integrations:
  - Customer sync with Oracle CX/Fusion Finance.
  - Vendor sync with Oracle Procurement.
  - PO/GRN sync with Oracle Procurement.
  - AP/AR export and payment status pull.
  - Credit limit and financial status refresh.
- Complete WMS/Oracle SCM integrations:
  - Inventory availability, reservations, batch/expiry, stock movements, delivery status, and outbound fulfilment.
- Complete email and portal integrations:
  - RFQ inboxes, supplier notifications, customer quotation/invoice delivery, acknowledgment tracking, and secure smart links.
- Data migration:
  - Broader post-pilot migration for legacy Excel trackers, Oracle extracts, full vendor/product/customer lists, contracts, open RFQs, active quotations, open POs, active deliveries, and finance/operational history selected for rollout.
- Security hardening:
  - Authorization review, rate limits, supplier portal penetration testing, file scanning, signed URLs, encryption, sensitive audit review, and role review.
- Observability:
  - Sentry, Horizon, integration dashboards, AI provider health, queue health, failed export alerts, and audit log retention.
- Performance:
  - Load testing for tender uploads, supplier matrices, dashboards, document previews, and report exports.
- UAT and rollout:
  - Pilot by module or business unit.
  - Feature flags for AI automation.
  - User training and SOPs.
  - Cutover checklist and rollback plan.

### Integration packages

| Package | Purpose |
| --- | --- |
| `spatie/laravel-webhook-client` | Receive signed webhooks from middleware, WMS, Graph, or other systems. |
| `spatie/laravel-webhook-server` | Send signed outbound webhooks to middleware or partner systems. |

## Cross-cutting AI/HITL design

### AI should assist with

- RFQ/email/document classification.
- Field extraction from email bodies, PDFs, Excel sheets, scans, and images.
- Customer, vessel, port, item, service, IMPA, and vendor matching.
- Duplicate detection for vendors, customers, and products.
- Supplier shortlist recommendations.
- Supplier quote comparison and ranking.
- Pricing hints from history, stock age, contract rates, and landed costs.
- Missing document detection and compliance reminders.
- Report narratives, anomaly detection, and predictive insights after enough data accumulates.

### Humans must approve

- Creation or activation of customers, vendors, products, and services.
- Any low-confidence AI extraction.
- Any unmatched master data match.
- Supplier selection overrides.
- Margin overrides, discounting, and DoA-triggered commercial decisions.
- Quotation/tender submissions.
- Purchase orders.
- Contract/rate card approvals.
- Final invoices, credit notes, reversals, and AP/AR exports.
- Insurance submissions.
- Any action that sends data externally to customers, suppliers, Oracle, WMS, or insurance.

### AI records to store

- Source record and source document.
- Extracted structured payload.
- Normalized payload.
- Matched records and alternatives.
- Confidence score per field and overall confidence score.
- Provider, model, prompt version, embedding version, and parser version.
- Cost/tokens/latency.
- Human reviewer, decision, corrections, comments, and timestamp.
- Final accepted payload used to create business records.

## Package installation summary

### Composer packages

| Package | Phase | Reason |
| --- | --- | --- |
| `spatie/laravel-permission` | 1 | RBAC and permission control. |
| `spatie/laravel-activitylog` | 1 | Audit/activity trail. |
| `spatie/laravel-model-states` | 1 | Explicit state machines. |
| `laravel/horizon` | 1 | Queue monitoring. |
| `sentry/sentry-laravel` | 1 | Production error monitoring. |
| `laravel/pennant` | 1 | Feature flags and phased AI rollout. |
| `spatie/laravel-medialibrary` | 2 | Document management. |
| `laravel/scout` | 2 | Search abstraction. |
| `meilisearch/meilisearch-php` | 2 | Search backend if Meilisearch is selected. |
| `endroid/qr-code` | 2 | QR generation. |
| `picqer/php-barcode-generator` | 2 | Barcode generation. |
| `laravel/ai` | 3 | Laravel-native AI SDK for agents, structured output, attachments, embeddings, vector stores, failover, and provider flexibility. |
| `google/cloud-document-ai` | 3 | Google Document AI OCR and structured document extraction. |
| `microsoft/microsoft-graph` | 3 | Microsoft 365 email ingestion and webhook subscriptions. |
| `smalot/pdfparser` | 3 | Text PDF extraction only. |
| `spatie/laravel-pdf` | 5 | High-fidelity Laravel PDF generation. |
| `openspout/openspout` | 5 | Streaming Excel import/export. |
| `spatie/laravel-webhook-client` | 0/1 | Signed inbound webhooks from Oracle Integration Cloud, middleware, WMS, Graph, or other systems. |
| `spatie/laravel-webhook-server` | 0/1 | Signed outbound webhooks to Oracle Integration Cloud, middleware, or partner systems. |

### NPM packages

| Package | Phase | Reason |
| --- | --- | --- |
| `@tanstack/vue-table` | 5 | Tender grids, supplier comparisons, and reporting tables. |
| `vue-echarts` | 8 | Dashboard chart components. |
| `echarts` | 8 | Charting engine. |
| `html5-qrcode` | 6 or 9 | Optional mobile QR/barcode scanning if browser-based scanning is required. |

### Infrastructure and external services

- Redis.
- Horizon workers.
- Meilisearch or approved search/vector service.
- S3-compatible encrypted object storage.
- ClamAV or managed malware scanning.
- Google Gemini configured through Laravel AI SDK.
- Google Document AI.
- Microsoft Graph / Microsoft 365 mailbox integration.
- Oracle Integration Cloud or approved middleware connectivity.
- WMS/SCM connectivity through Oracle Integration Cloud or approved middleware.
- Headless Chrome for Laravel PDF rendering.

## Major open decisions

1. Which Oracle/WMS records remain authoritative outside NMSC ownership: credit limits, FX rates, posted invoices, payment status, physical stock, or other finance/inventory controls?

## Suggested initial implementation slice

After Phase 0 decisions, the first pilot slice should prove the AI-assisted RFQ-to-quotation architecture without implementing SO, delivery, or finance workflows:

1. Create a small set of master data: one customer, one vendor, one product/service, one location, and one legal entity.
2. Upload or ingest one RFQ document.
3. Run OCR/AI extraction and route it to human validation.
4. Generate an RFQ and send supplier requests through RFQ-specific signed links.
5. Capture encrypted supplier responses and unlock them after the deadline.
6. Show the supplier comparison matrix with AI-assisted ranking and human override controls.
7. Generate a customer quotation with pricing, terms, approval workflow, Arabic/RTL-capable PDF output, and audit trail.
8. Show the pilot transaction on a dashboard with status, ownership, AI review history, supplier response history, and approval history.

This slice should become the reference path for all later module expansion.
