**Business Requirement Specification**

**Implementation of**

**Navigation Marine Service Center (NMSC) System**

**28<sup>th</sup> of May 2025**

**Contents**

[**A.** **BUSINESS DEMAND OBJECTIVE** 6](#_Toc199322892)

[**B.** **CURRENT PROCESS** 6](#_Toc199322893)

[**C.** **FUNCTIONALITY REQUIREMENTS** 7](#_Toc199322894)

[**1.** **Master Data Management** 7](#_Toc199322895)

[**1.1.** **Milaha Organizational Structure (Legal Entity)** 7](#_Toc199322896)

[**1.2.** **Location Master Data** 7](#_Toc199322897)

[**1.3.** **Customer Master Data** 7](#_Toc199322898)

[**1.4.** **Supplier / Vendor Master Data** 8](#_Toc199322899)

[**1.5.** **Product Master Data** 8](#_Toc199322900)

[**1.6.** **User Master Data** 9](#_Toc199322901)

[**1.7.** **Legal Disclaimers / Terms Texts** 10](#_Toc199322902)

[**2.** **Lead, Opportunity, and RFQ Management** 10](#_Toc199322903)

[**2.1.** **Lead Management** 10](#_Toc199322904)

[**2.1.1.** **Functional Features:** 11](#_Toc199322905)

[**2.2.** **Opportunity Management** 11](#_Toc199322906)

[**2.3.** **RFQ Management** 11](#_Toc199322907)

[**2.3.1.** **Automated Customer RFQ Capture and Registration** 11](#_Toc199322908)

[**2.3.2.** **AI-Based Parsing and Data Extraction:** 12](#_Toc199322909)

[**2.3.3.** **Master Data Matching** 12](#_Toc199322910)

[**2.3.4.** **RFQ Record Generation and Assignment** 12](#_Toc199322911)

[**2.3.5.** **Fallback and Exception Handling** 12](#_Toc199322912)

[**2.3.6.** **Inventory and Historical Pricing Integration** 12](#_Toc199322913)

[**2.3.7.** **Supplier RFQ Automation** 13](#_Toc199322914)

[**2.3.8.** **Supplier Quote Evaluation and Internal Decision Support** 13](#_Toc199322915)

[**2.3.9.** **AI-Driven Predictive Insights (Future Enhancement)** 14](#_Toc199322916)

[**3.** **Quotation, Pricing and Tender Management** 14](#_Toc199322917)

[**3.1.** **Quotation Generation** 14](#_Toc199322918)

[**3.2.** **Pricing and Margin Logic** 15](#_Toc199322919)

[**3.2.1.** **DoA-Based Approval Workflow** 15](#_Toc199322920)

[**3.2.2.** **Version Control and Audit Trail** 16](#_Toc199322921)

[**3.2.3.** **Validity and Status Tracking** 16](#_Toc199322922)

[**3.3.** **Tender Management** 16](#_Toc199322923)

[**4.** **Contract Management** 16](#_Toc199322924)

[**4.1.** **Contract Creation and Storage** 16](#_Toc199322925)

[**4.1.1.** **Contract Terms and Rate Cards** 16](#_Toc199322926)

[**4.1.2.** **Validity and Renewal Tracking** 16](#_Toc199322927)

[**4.1.3.** **Linkage to Operational Processes** 17](#_Toc199322928)

[**4.1.4.** **Version Control and Audit Trail** 17](#_Toc199322929)

[**4.1.5.** **Compliance and Document Management** 17](#_Toc199322930)

[**5.** **Vendor Management** 17](#_Toc199322931)

[**5.1.** **Vendor Onboarding and Master Data** 17](#_Toc199322932)

[**5.2.** **Vendor Registration and Approval Workflow** 18](#_Toc199322933)

[**5.2.1.** **Vendor Registration** 18](#_Toc199322934)

[**5.2.2.** **Duplicate Check** 18](#_Toc199322935)

[**5.2.3.** **Document Upload and Compliance Validation** 18](#_Toc199322936)

[**5.2.4.** **Approval Workflow** 19](#_Toc199322937)

[**5.2.5.** **Status Tracking and Activation** 19](#_Toc199322938)

[**5.3.** **Vendor Classification and Status** 19](#_Toc199322939)

[**5.4.** **Document Management and Validity Tracking** 19](#_Toc199322940)

[**5.5.** **Business Category and Item Mapping** 19](#_Toc199322941)

[**5.6.** **Vendor Approval Workflow** 19](#_Toc199322942)

[**5.7.** **Vendor Performance Tracking** 20](#_Toc199322943)

[**6.** **Product Management** 20](#_Toc199322944)

[**6.1.** **Product Master Creation** 20](#_Toc199322945)

[**6.2.** **Brand and Specification Management** 20](#_Toc199322946)

[**6.3.** **Product Classification and Searchability** 20](#_Toc199322947)

[**6.5.** **UOM and Conversion Control** 21](#_Toc199322948)

[**6.6.** **New Item Code Creation and Approval** 21](#_Toc199322949)

[**7.** **Order Placement, stock replenishment and Purchase Tracking** 22](#_Toc199322950)

[**7.1.** **Sales Order Creation** 22](#_Toc199322951)

[**7.2.** **Purchase Order (PO) Generation** 22](#_Toc199322952)

[**7.3.** **Stock Replenishment** 22](#_Toc199322953)

[**7.4.** **Procurement Tracking** 23](#_Toc199322954)

[**7.5.** **Exception Handling** 23](#_Toc199322955)

[**7.6.** **SO and PO Linkage and Visibility** 23](#_Toc199322956)

[**8.** **Inventory and Delivery Coordination** 23](#_Toc199322957)

[**8.1.** **Inventory Visibility and Stock Status** 24](#_Toc199322958)

[**8.2.** **Stock Reservation and Allocation** 24](#_Toc199322959)

[**8.3.** **Delivery Planning and Scheduling** 24](#_Toc199322960)

[**8.4.** **WMS Integration and Dispatch Execution** 24](#_Toc199322961)

[**8.5.** **Delivery Note and Confirmation** 25](#_Toc199322962)

[**8.6.** **Return Handling and Failed Delivery** 25](#_Toc199322963)

[**8.7.** **Exception Handling** 25](#_Toc199322964)

[**9.** **Document Management** 25](#_Toc199322965)

[**9.1.** **Document Upload and Attachment** 25](#_Toc199322966)

[**9.2.** **Expiry and Validity Tracking** 27](#_Toc199322967)

[**9.3.** **Access and Permission Control** 27](#_Toc199322968)

[**9.4.** **Document Search and Retrieval** 27](#_Toc199322969)

[**9.5.** **Version Control** 27](#_Toc199322970)

[**9.6.** **Barcode / QR Attachment** 27](#_Toc199322971)

[**10.** **Workflow Management** 27](#_Toc199322972)

[**10.2.** **Configurable Workflow Rules** 28](#_Toc199322973)

[**10.3.** **Delegation of Authority (DoA) Integration** 28](#_Toc199322974)

[**10.4.** **Role-Based Task Assignment** 28](#_Toc199322975)

[**10.5.** **Notifications and Alerts** 29](#_Toc199322976)

[**10.6.** **Workflow Status Tracking** 29](#_Toc199322977)

[**10.7.** **Workflow Exceptions** 29](#_Toc199322978)

[**11.** **Invoicing (Cost) and Billing (Revenue)** 29](#_Toc199322979)

[**11.1.** **Customer Billing (Revenue)** 29](#_Toc199322980)

[**11.2.** **Supplier Invoicing (Cost)** 30](#_Toc199322981)

[**11.2.1. Additional Expense Allocation (Freight, Customs, etc.)** 31](#_Toc199322982)

[**11.3.** **Integration with Oracle AP and AR** 31](#_Toc199322983)

[**12.** **Insurance Management** 31](#_Toc199322984)

[**12.1.** **Insurance Request Preparation and Submission** 31](#_Toc199322985)

[**12.2.** **Defect Reporting During Loading / Offloading** 32](#_Toc199322986)

[**13.** **Reporting & Analytics** 32](#_Toc199322987)

[**13.1.** **Reports Regarding NMSC Sales Activities** 33](#_Toc199322988)

[**13.2.** **Deals and Tenders Report for NMSC** 38](#_Toc199322989)

[**13.3.** **Future Reporting Requirements - Strategic and Operational Analytics** 38](#_Toc199322990)

[**14.** **Integrations** 39](#_Toc199322991)

[**14.1.** **Customer Master Data** 39](#_Toc199322992)

[**14.2.** **Supplier / Vendor Master Data** 40](#_Toc199322993)

[**14.3.** **Financial Finance Integration (Oracle AP and AR)** 40](#_Toc199322994)

[**14.4.** **Procurement System Integration (Oracle Procurement)** 40](#_Toc199322995)

[**14.5.** **Inventory Management System ((If Vendor System Lacks Inventory Functionality)** 41](#_Toc199322996)

# **BUSINESS DEMAND OBJECTIVE**

The objective of this Business Requirement Specification (BRS) is to implement an integrated digital solution tailored to the operational needs of the Navigation Marine Service Center (NMSC) under Milaha Technical & Services (MTS). This unit is responsible for supplying provisions, technical consumables, and lubricants to vessels, ports, offshore sites, and industrial clients.

The new system aims to:

- Digitize and automate workflows from Requisition to Delivery and Quotation to Invoice.
- Improve operational efficiency and service delivery timelines.
- Enforce compliance with Delegation of Authority (DoA) and documentation standards.
- Reduce errors and delays caused by manual coordination and fragmented systems (e.g., Excel, Email, Oracle ERP, WMS).
- Provide full traceability, data visibility, and audit readiness.
- Integrate with corporate platforms such as Oracle Supply Chain Execution, Oracle AP (Accounts Payable), Oracle AR (Account Receivable) Oracle Procurement, and WMS.

The functional requirements are organized into the following key areas:

- Master Data Management
- Lead, Opportunity, and Request for quotation (RFQ) Management
- Quotation & Tender Management
- Contract Management
- Vendor Management
- Product Management
- Order Placement, Stock Replenishment & Purchase Tracking
- Inventory & Delivery Coordination
- Document Management
- Workflow Management
- Invoicing & Billing
- Insurance
- Reporting & Analytics
- Integration & Compliance

# **CURRENT PROCESS**

Currently, NMSC does not operate a dedicated end-to-end software solution. Instead, the unit relies on a combination of:

- Manual coordination
- Email communication
- Excel-based tracking
- Oracle ERP modules (order management, procurement, supply chain execution, Accounts Payable (AP), and Accounts Receivable (AC).
- WMS (for warehouse stock checks)

This fragmented approach causes several operational challenges:

Key Gaps in the Current Process:

- RFQs & Quotation: Received through email; quotation preparation is manual and lacks standardization. Follow-ups are tracked manually.
- Stock Checks: Performed in Oracle and WMS. No unified visibility of inventory across locations.
- Non-Stock Items: Require offline approvals, item code creation, and manual vendor follow-up for quotations.
- Vendor Coordination: Lacks traceability. Supplier responses are often captured through email with no central audit trail.
- Order Placement: Purchase Orders (POs) are issued via Oracle, but updates on delivery tracking are not visible to the operations team in real time.
- Invoicing: Invoicing is completed in Oracle AP and AR; however, due to system limitations:
  - system cannot calculate margins or provide visibility into profitability at the order level.
  - Supporting documents (e.g., quotations, signed POs, delivery notes) are not linked to invoices in Oracle.
  - Managers are often approving via email or post-facto creating compliance risks.
  - No real-time visibility into invoices status

# **FUNCTIONALITY REQUIREMENTS**

## **Master Data Management**

To enable automation, compliance, and efficiency across the NMSC operations, the system must include robust Master Data Management modules. These data entities will be used across functional workflows such as quotation, procurement, inventory management, invoicing, reporting, and audit.

### **Milaha Organizational Structure (Legal Entity)**

- - - - Maintain an up-to-date legal and business unit hierarchy to support internal chargebacks, cost allocations, and entity-level reporting.
- Required Fields:
- Legal entity name
- CR number
- Tax registration number
- Registered address
- Contact details
- Associated Business Unit (e.g., NMSC)
- Cost centre code
- Internal charge code (if applicable)

### **Location Master Data**

- Define and manage all operational and storage locations used in NMSC.
- Examples:
- MLC Central Warehouse
- NMSC Showroom Wakra
- Direct Delivery
- Third-party stores (e.g., "Store 46")
- Fields:
- Location name and address
- Operational hours
- HSSE requirements (pre-defined list)
- Type (Owned / Leased / 3rd Party)

### **Customer Master Data**

- Used in RFQs, quotations, invoicing, and delivery coordination.
- Fields:
- Legal name, address, CR & Tax number
- Bank details & preferred invoice currency
- Customer type (Credit / Cash)
- Credit limit (from Oracle Fusion Finance)
- Contact persons
- Uploaded documents (e.g., credit request approval)
- Hierarchical grouping (parent/child entities)
- Operational site locations for delivery
- Type of business (e.g. Marine, industrial, construction… etc)

### **Supplier / Vendor Master Data**

- Used for procurement, PO processing, and supplier invoice management.
- Fields:
- Legal name and address
- CR & Tax registration numbers
- Bank details and preferred currency
- Contact info
- Vendor category (Lubricants, Provisions, Spares, etc.)
- Warehouse / Item Collection Address(es)
- Monitoring and management of compliance documents along with their respective expiry dates, such as licenses, certifications, and registration records.

### **Product Master Data**

The NMSC system shall distinctly manage Items and Services within the Product Master Data module to ensure clarity in categorization, sourcing, pricing, operational tracking, and billing. This eliminates the legacy issue of treating services as stock items.

- - 1. **Items**

Items refer to physical goods supplied to vessels, such as:

- Provisions
- Lubricants
- Technical Stores
- Spare Parts
- Accessories
- Each item shall be assigned a unique Item Code, generated either manually or automatically based on category, item type, or predefined code structures.
- Items shall be grouped under defined categories (e.g., Electrical, Food Supplies, Safety Equipment) for easier tracking, reporting, and vendor assignment.
- Required Fields for Items:
- Item Code _(unique identifier)_
- Item Name
- Description & Specification
- Unit of Measure (UOM)
- IMPA Code (if applicable)
- Part Number (if applicable)
- Item Category (e.g., Provisions, Lubricants, Technical)
- Product Image & Datasheet (optional)
- Standard Price & Cost

**1.5.2. Services**

- Services refer to non-stock operational or technical activities provided to vessels. These are typically executed by third-party vendors and include a wide range of specialized tasks that support vessel operations and maintenance. Services are tracked separately from items and must be classified accordingly in the system.
- Each service shall be assigned a unique Service Code to enable traceability, pricing, approval, and invoicing.
- Common service categories include, but are not limited to:
- Pest Control
- Logistics Support
- Welding and Fabrication
- AC and refrigeration service
- Testing and certification
- Technical Services (e.g., sending technicians to install/fix accessories or spare parts)
- Each service shall be assigned a unique Service Code to support classification, cost tracking, margin calculations, and integration with invoicing.
- Service Execution Flow:
- Assigned to a third-party vendor per service
- Materials may be provided by either the vendor or NMSC (based on service definition)
- Material requirements may be fulfilled by:
- The Vendor
- NMSC, using items from inventory
- Upon completion, vendors submit a Service Report
- NMSC then applies a margin and issues the invoice to the vessel
- Required Fields for Services:
- Service Code (unique identifier)
- Service Name and Description
- Service Category (e.g., Fabrication, Pest Control, Technician Support)
- Assigned Vendor
- Costing Method (e.g., Fixed / Variable)
- Mark-up or Margin %
- Material Source (Dropdown: "Provided by Vendor" / "Provided by NMSC")
- Supporting Documents (e.g., Service Report, Completion Notes)

### **User Master Data**

- The system shall maintain a structured User Master module to define and control access for all personnel involved in NMSC operations. This ensures proper user authentication, workflow accountability, and compliance with Milaha's Delegation of Authority (DoA) framework.
- Each user will have a dedicated profile that stores their identity, role, permissions, and approval authority within the system.
- Required Fields:
- User ID
- Full Name
- Contact Information (Email, Mobile Number)
- Business Unit / Department
- Designated Profile (e.g., Store Supervisor, Buyer, Finance Approver)
- Assigned Role(s) (e.g., RFQ Creator, Quotation Approver)
- Approval Limit (linked to DoA)
- System Access Rights (e.g., View Only, Edit, Approve)
- Status (Active / Inactive)
- The system shall support user activation, deactivation, and permission changes through an administrative interface. All modifications to user access shall be logged with a timestamp and admin user ID for audit tracking.
- Note: To ensure consistency, control, and easier user management, the system shall maintain predefined access structures that can be assigned to users instead of defining permissions manually for each record. These include:
- Profiles: Groupings of users with similar responsibilities (e.g., Sales Team, Procurement Team).
- Roles: Define what actions a user is allowed to perform (e.g., Create RFQ, Approve Quotation, View Invoice).
- Access Rights: Define the level of access within the system (e.g., View Only, Edit, Approve).
- These permission structures will be managed centrally and then linked to each user via the User Master Data. This approach ensures standardized access control and allows scalable administration across departments.

### **Legal Disclaimers / Terms Texts**

- Store legal and operational disclaimers to be appended to:
- Quotations
- Contracts
- Invoices
- Fields:
- Document Type (Quotation, Contract, Tender, etc.)
- Operational Terms (_Customizable text field; default limit 5,000 characters - configurable by admin_)
- Legal Terms (_Customizable text field; default limit 5,000 characters - configurable by admin_)

## **Lead, Opportunity, and RFQ Management**

### **Lead Management**

Captures early interest from customers or agents that hasn't matured into a formal request.

- Lead Capture Methods:
- Manual entry for:
- Walk-ins
- Verbal discussions during customer visits or meetings
- Phone calls / WhatsApp messages
- Email Parsing from shared mailboxes
- Web Portal Inquiries submitted by clients (if applicable)
- Automatic Conversion from expired RFQs or dropped opportunities
- Required Fields:
- Customer / agent name
- Contact information
- Product interest (Provisions, Lubricants, Technical Stores)
- Vessel name (if known)
- Expected requirement date
- Remarks or notes
- Source (Phone / Email / Visit / Event)
- Status: Prospect → Lead → Qualified → Opportunity → Customer / Inactive / Disqualified
- Assigned SPOC
- Next follow-up date

### **Functional Features:**

- Auto-close inactive leads after X days
- Convert qualified leads to Opportunities with one click
- Reminders for pending follow-ups
- Lead dashboard (by source, status, SPOC, date range)

### **Opportunity Management**

- Tracks verified interest expected to convert into an RFQ.
- Opportunities can be:
- Converted from Qualified Leads (with auto-filled data), or
- Created manually by the Sales Team (especially for urgent or repeat clients).
- Key Fields:
- Customer
- Vessel Name & IMO Number
- Delivery Port & ETA/ETD
- Product Interest
- Expected RFQ Date
- Validity Date (Mandatory - defines opportunity expiry and triggers alerts)
- Estimated Cost (Optional - supports early margin planning)
- Urgency Level (Routine / Urgent / Emergency)
- RFQ Source (Email, Walk-in, Agent, etc.)
- SPOC (Salesperson)
- Probability (Low / Medium / High)
- Notes / Special Instructions
- Estimated Revenue amount
- Status Flow:

- Draft Proposal - Opportunity identified; proposal not yet submitted
- Submitted to Client - Proposal formally shared with the client
- Under Negotiation - Active commercial/technical discussions ongoing
- Awarded - Confirmed by customer; proceed to RFQ or order
- Lost - Not awarded to Milaha; loss reason must be recorded
- Cancelled - Withdrawn by customer or internally marked inactive
- On Hold - Temporarily paused (e.g., pending decision, budget freeze)

### **RFQ Management**

The RFQ (Request for Quotation) process begins when a customer submits a formal request typically via email, attachment, or through an integrated channel. The system must automatically capture, interpret, and structure this data to generate a live RFQ record without manual input.

This section describes the AI-assisted and system-integrated flow from RFQ intake to quotation readiness.

### **Automated Customer RFQ Capture and Registration**

- Functional Requirements:
- The system shall allow automatic or manual ingestion of RFQs received via:
- Dedicated Email Inboxes (e.g., <lubricants@milaha.com>, <marinesales@milaha.com>)  
   Emails with or without attachments (Excel, PDF) will be monitored.
- Customer Web Forms: RFQs submitted through embedded forms on websites, customer portals, or inquiry platforms.
- Integrated Submission Portals: If customers are using integrated systems or B2B portals, RFQs can be pushed directly via structured feeds.
- Note: In cases where RFQs are received via email as attachments (e.g., Excel, PDF), the system shall allow manual upload or automated processing to initiate the RFQ record.

### **AI-Based Parsing and Data Extraction:**

- The system shall use AI-powered document parsing and natural language processing (NLP) to extract:
- Customer name and contact
- Vessel name and International Maritime Organization IMO (if available).
- Port of delivery
- ETA (Estimated Time of Arrival) / ETD (Estimated Time of Departure)
- Delivery window (urgency flag)
- Item List (IMPA code, description, quantity, UOM)

### **Master Data Matching**

- The system shall automatically match parsed RFQ data against existing master records to ensure accuracy and consistency across transactions.
- Customer Matching: Matches extracted customer name and contact details with the Customer Master Data using name, email, or ID references.
- Vessel and Port Identification: Validates vessel names and IMO numbers against the system's vessel registry and confirms delivery ports from Location Master Data.
- Item Matching: Matches items using IMPA codes, aliases, or historical descriptions. If no match is found, the system flags the line for manual review or allows temporary item creation.
- Unmatched or incomplete fields will be highlighted for user validation. All matches will be logged for traceability.

### **RFQ Record Generation and Assignment**

- Upon validation, the system shall auto-generate a structured RFQ record.
- Each RFQ shall be automatically assigned to a designated SPOC based on:
- Customer identity
- Product category
- Delivery port
- The RFQ record shall include all extracted fields and allow further editing if needed.

### **Fallback and Exception Handling**

- RFQs with incomplete or ambiguous data shall be:
  - Flagged and auto logged under "Draft: Needs Validation" status
  - Displayed with missing fields for user confirmation or correction
  - Supported with UI-based suggestions to fill or fix data gaps
- This ensures that all RFQs are captured in the system, regardless of format or completeness, while minimizing manual effort and improving speed and accuracy in the sales cycle.

### **Inventory and Historical Pricing Integration**

Functional Requirements:

- System performs real-time inventory checks by:
- Querying WMS and/or Oracle SCM (supply chain management)
- Returning available quantity, storage location, and batch/expiry if applicable
- System retrieves historical quotation and purchase data including:
- Last purchase price
- Past quotation prices for same or similar customers/items
- Supplier delivery timelines
- Availability and historical data must be visible in the RFQ phase for decision-making

### **Supplier RFQ Automation**

Functional Requirements:

- Upon initiating a supplier RFQ, the system shall:
- Identify and list qualified suppliers based on item category, brand, or vendor preference.
- Generate a secure, system-hosted link for each supplier to submit their quote.
- Set a submission deadline (RFQ due date) visible to the supplier.
- Each supplier shall receive:
- A link to a structured online form (RFQ Response Portal)
- RFQ details including item list (with IMPA code and description), quantity, UOM, and required delivery date
- The response form shall include dedicated fields for submitting:
  - - Unit price
      - Lead time
      - Brand or equivalent
      - Payment terms
      - Optional file uploads (e.g., datasheets, certifications)
      - Country of Origin (COO)
      - Freight charges or Incoterms (if applicable)
- Supplier responses shall be:
- For stock items only, Logged and timestamped upon submission
- Encrypted and hidden from internal users until the RFQ deadline is reached
- Locked from editing after submission (unless re-invited)
- After the RFQ due date:
- The system shall automatically unlock all supplier submissions.
- Responses will be flagged for completeness and compliance.
- In exceptional cases (e.g., technical failure), manual entry of a supplier's quote may be allowed but must be documented and approved.

### **Supplier Quote Evaluation and Internal Decision Support**

Functional Requirements:

- After the RFQ deadline passes, the system shall:
- Automatically compare all supplier submissions.
- Display responses side-by-side in a comparison matrix.
- Key comparison criteria:
- Unit price
- Lead time
- Brand/specification match
- Payment terms
- Supplier status (preferred, blacklisted, approved)
- Highlight:
- Lowest price per item
- Best average lead time
- Top 3 suppliers by cost and compliance score
- Users may:
- View supporting documents submitted by suppliers
- Add internal notes or flag Irregularities
- Override system ranking (with justification entry)
- Final supplier selection will drive quotation generation, subject to approval workflows based on Delegation of Authority (DoA).

### **AI-Driven Predictive Insights (Future Enhancement)**

As the system accumulates data over time, future releases may include predictive features to support smarter and faster RFQ evaluations:

- Vendor Scoring: AI models may assign performance scores to vendors based on historical accuracy, responsiveness, and delivery success.
- Lead Time Forecasting: Instead of relying solely on past delivery timelines, the system may predict future lead times using vendor behaviour patterns and seasonal factors.
- Price Estimation: For new or infrequently purchased items, the system may use past trends to suggest estimated pricing.
- Smart Supplier Suggestions: Based on the context of the RFQ (item, port, urgency), the system may recommend the most suitable supplier using AI-assisted ranking logic.

These enhancements aim to reduce manual evaluation time, support informed decision-making, and improve sourcing accuracy. They will be considered in future development phases once a sufficient volume of transaction data is available.

## **Quotation, Pricing and Tender Management**

This module enables the NMSC Business Unit to generate, approve, and manage customer quotations based on evaluated supplier offers, pricing rules, and internal approvals. It also supports high-volume tender submissions and ensures full traceability and control.

### **Quotation Generation**

- Provide supplier quotations based on received offers; the system shall perform automated comparison after the RFQ deadline based on price, lead time, and compliance criteria.
- Provide customer quotations based on evaluated supplier quotes or historical pricing.
- System auto-fills item details, pricing, lead time, and standard terms using approved templates.
- Generate a structured quotation that includes:
- Item Description
- IMPA Code
- Item Code (if applicable or already exists)
- Product Image
- Data Sheet
- Availability Status
- Quantity
- Unit Price
- Total Price
- Terms of Sale and Validity.
- Comments Column (for Warranty, Certifications, or other client-specific remarks)
- Milaha Information (Company Name, Location, Phone, Email)
- Quotations shall be exportable in multiple formats such as PDF, Excel, or others as required by tender specifications, while retaining the approved structure, pricing, and branding elements.
- The system shall allow users to send the quotation directly to the customer via email or smart link, if required. Quotation delivery may be configured as manual (upon user action) or automated. All delivery actions shall be logged, including recipient, method, timestamp, and delivery status (e.g., Sent, Viewed, Acknowledged).
- Supports multi-currency pricing with automated conversions.
- The system shall support line-item level rejection within customer quotations. If a customer chooses not to proceed with a specific item, designated users (e.g., Sales Executives) may remove the item from the quotation without discarding the rest of the proposal.
- Customer rejection may be received via email, annotated quotation, or (if enabled) through a customer-facing smart link allowing per-line acceptance or rejection. The system shall enable users to record the rejection reason and take further action accordingly.
- Once a quotation is modified due to item rejection, the system shall automatically generate a new version, preserving a complete change log with user ID, timestamp, and description of the change. All previous versions remain accessible for traceability and audit.
- If a rejected item was a newly created product and has not been converted into a Sales Order, the system shall prompt authorized users to either mark the item as inactive or flag it for removal from the item master. This ensures product data integrity and prevents clutter from unused items.
- Users shall be able to quickly modify and reissue quotations after line-level changes, provided the adjusted quotation does not breach pricing, margin, or value thresholds defined in the Delegation of Authority (DoA).
- If the revised quotation exceeds DoA thresholds or involves significant commercial changes, the system shall automatically route the new version for re-approval based on pre-configured DoA rules.
- The system shall maintain a comprehensive version history of all quotations, including visibility into accepted and rejected items per version, to support internal reviews and audit requirements.

### **Pricing and Margin Logic**

Pricing is derived from supplier cost, plus other applicable charges such as:

- Storage and handling
- Inland or port transportation
- Import duties and customs clearance
- Any additional operational or logistics costs
- Final pricing is then adjusted based on markup/margin rules or fixed rate structures, as applicable.  
   • The system displays calculated margins per item and flags any deviations.  
   • Users can reference past quotations and pricing history.  
   • Discounts or margin overrides require justification and follow the approval flow.
- Note: For items approaching expiry (as flagged in the inventory module), the system should notify users to consider applying discounted pricing or initiating stock clearance. (See Section 9.3 for expiry tracking logic.)

### **DoA-Based Approval Workflow**

- Quotations requiring approval (based on value, margin, or commercial terms) are routed as per the Delegation of Authority (DoA) matrix.
- Quotations within the default approved margin range shall be auto approved by the system without manual intervention. Only those exceeding the threshold shall trigger DoA-based routing.
- For tenders and high-value submissions, the system must enforce additional approvals from the Legal Team and the Management Team before final submission.
- Approved quotations are locked; any edits will trigger a re-approval process.
- All approvals are logged with a timestamp and user ID for audit purposes.

### **Version Control and Audit Trail**

- Every quotation revision is saved with version number and timestamp.
- Users can view full history of changes, edits, and submission status.
- Original and revised versions are retained for compliance.
- Version history shall also reflect line-item level rejections and modifications based on customer feedback, capturing changes across versions for full traceability.

### **Validity and Status Tracking**

- Users define validity period per quotation; expired quotes auto flagged by system.
- Statuses: Draft, Submitted, Accepted, Rejected, Expired.
- Alerts generated for pending expiry and un-responded submissions.

### **Tender Management**

- Bulk quotation handling for tenders with 100+ items.
- Price inputs allowed via validated Excel upload.
- All tender items grouped under a single Tender ID
- Tender quotes follow same approval and versioning controls.
- Final output is a consolidated tender proposal with uniform terms and expiry.

## **Contract Management**

This module manages both customer and supplier contracts related to the NMSC Business Unit. It ensures clear visibility of contract terms, validity tracking, pricing adherence, and operational integration with RFQs, quotations, and procurement.

### **Contract Creation and Storage**

- Ability to create and store both customer contracts (e.g., framework agreements, SLAs (Service Level Agreement)) and supplier contracts (e.g., supply agreements, pricing terms).
- Each contract is stored with a unique contract ID, version number, and linked party (customer or supplier).
- Users can upload scanned contract documents (PDF) and tag metadata:
  - Contract Type (Customer/Supplier)
  - Validity Period
  - Associated Entity
  - Point of Contact
  - Scope Category (e.g., Lubricants, Provisions, Technical Stores)

### **Contract Terms and Rate Cards**

- For customer contracts:
  - Store fixed rate cards or discount structures agreed per item or category.
  - Attach pricing annexures and link to applicable item codes.
  - Define service levels, delivery windows, and penalty clauses (if applicable).
- For supplier contracts:
  - Maintain item-wise rate agreements or pricing formulas.
  - Capture brand or equivalent supply obligations and delivery terms.

### **Validity and Renewal Tracking**

- Contracts are assigned start and expiry dates.
- System sends automated alerts before expiry (e.g., 30/60/90 days).
- Renewal workflows may be triggered, including submission of updated pricing or terms.
- Expired contracts are flagged and restricted from further use unless extended.

### **Linkage to Operational Processes**

- Customer contracts can be linked to:
- Quotations → To enforce agreed pricing and terms
- Orders → To validate against contract scope
- Supplier contracts can be linked to:
- RFQs → To auto-populate pricing or supplier selection
- POs → To validate rates and delivery obligations
- System flags any deviation from active contract rates or terms during transaction processing.

### **Version Control and Audit Trail**

- Every change to contract records is versioned and timestamped.
- Contract history includes:
  - Original version
  - Amendments or addendums
  - User who modified or approved changes
- Ensures traceability for compliance and audits.

### **Compliance and Document Management**

- Each contract record may include required supporting documents:
  - Signed contract
  - Rate card annexures
  - Legal approvals
  - Customer or supplier certificates (e.g., ISO, trade license)
- System validates document presence based on contract type and flags missing files.
- Supports search and filter by contract type, validity, or linked entity.

## **Vendor Management**

This module manages supplier onboarding, classification, compliance documentation, and ongoing performance tracking. It supports reliable procurement operations by ensuring only approved and compliant vendors are engaged, and that vendor data is accurate and auditable across all sourcing and purchasing workflows.

Note: While Milaha currently maintains vendor master data in Oracle Procurement, it is recommended that NMSC operates a separate vendor management module within the new system. This ensures:

- Commercial privacy for NMSC-exclusive vendors and pricing terms
- Internal control over supplier visibility, RFQ participation, and sourcing workflows
- Reduced dependency on centralized procurement for tactical or fast-moving categories (e.g., lubricants, provisions)

The NMSC system shall synchronize only approved supplier IDs and statuses with Oracle where required for financial transactions (e.g., PO, invoice posting), while detailed commercial data remains restricted to NMSC BU.

### **Vendor Onboarding and Master Data**

- Vendors are registered in the system with unique Vendor IDs and profile details.
- Required fields include:
  - Legal name, CR number, VAT registration number
  - Registered address and country of operation
  - Bank details and preferred payment currency
  - Contact persons and roles (e.g., Sales Rep, Accounts Contact)
  - Email and phone for RFQ and PO communication
- Vendors are assigned to one or more categories (e.g., Lubricants, Provisions, Technical Spares).

### **Vendor Registration and Approval Workflow**

When adding a new vendor to the system, the following process shall be followed to ensure accuracy, compliance, and proper approval before the vendor can participate in RFQs or receive Purchase Orders.

### **Vendor Registration**

Users with appropriate access rights (e.g., Procurement Team) shall be able to initiate the registration of a new vendor in the system by entering key master data fields, including:

- Legal name
- Commercial Registration (CR) number
- VAT registration number
- Bank details
- Country of operation
- Category of supply (e.g., Lubricants, Provisions, Technical Spares)
- Primary contact persons

### **Duplicate Check**

The system shall automatically verify the new entry against existing records using a combination of:

- Legal name
- CR number
- Country
- Email address or tax ID (if applicable)

If a potential duplicate is identified, the user shall be alerted, and a review must be conducted before proceeding.

### **Document Upload and Compliance Validation**

During registration, the user shall be required to upload all relevant compliance documents, including but not limited to:

- CR Copy
- Tax Certificate
- Bank Letter
- ISO or Quality Certifications
- HSSE Declarations (if required by category)

The system shall validate the uploaded documents based on the vendor's type and region, and record the following metadata:

- Document type
- Issue and expiry dates
- Upload user and timestamp

Expiry alerts shall be triggered automatically as expiration dates approach to prompt re-submission.

### **Approval Workflow**

Once the vendor record and documents are submitted, the system shall route the new vendor through an approval workflow, which may include:

- Document verification
- HSSE clearance
- Commercial and legal evaluation
- Category Owner approval (based on supply classification)

Each workflow step shall be recorded in the audit log with approver ID, date/time, and comments (if any).

### **Status Tracking and Activation**

The system shall assign and display the vendor's onboarding status at each stage:

- Pending - Record created but not yet reviewed
- In Review - Under approval workflow
- Approved - Successfully cleared and eligible for transactions
- Inactive - Rejected or deactivated due to non-compliance or disuse

Only "Approved" vendors shall be available for use in RFQs, tenders, or Purchase Orders by default. Exceptions must follow a defined override process with justification.

### **Vendor Classification and Status**

- Vendors can be classified as:
  - Preferred / Approved / Temporary / Blacklisted
- Status is system-controlled based on:
  - Approval workflow completion
  - Document validity
  - Performance metrics (see 5.6)
- Only "Approved" vendors are eligible for RFQ or PO issuance by default (override with justification).

### **Document Management and Validity Tracking**

- Each vendor record supports uploading of required compliance documents:
  - CR Copy, Tax Certificate, Bank Letter, ISO Certificates, Safety Forms, etc.
- System validates required documents based on vendor type and region.
- Expiry tracking with auto-alerts for:
  - Trade licenses
  - Safety certifications
  - Approval letters
- Incomplete or expired documentation flags the vendor as "Pending" or "Inactive."

### **Business Category and Item Mapping**

- Vendors can be mapped to:
  - Specific item categories based on the class of items (e.g., Lubricants, Chemicals, Engine Stores, etc.)
  - Specific brands (e.g., Castrol, TOTAL)
  - Specific ports or delivery regions
- This mapping controls vendor inclusion in automated RFQs and tender processes.

### **Vendor Approval Workflow**

- New vendors follow a configurable approval process before activation.
- Steps may include:
  - Document verification
  - HSSE clearance (only applicable to local companies)
  - Commercial evaluation
- Approval status is timestamped and recorded with the approver's ID.

### **Vendor Performance Tracking**

- System tracks historical performance per vendor across:
  - Quotation responsiveness
  - Price competitiveness
  - On-time delivery rate
  - Fulfilment accuracy (correct brand/spec, complete delivery)
- Performance metrics displayed on vendor profile.
- Poor performance can trigger status review or blacklisting.
- Repeated quotation rejections due to vendor errors (e.g., incorrect specifications, long lead times) may be recorded and contribute to vendor performance evaluation.

## **Product Management**

This module enables structured management of all supply items across product categories such as lubricants, provisions, and technical spares. It ensures standardized item definition, brand alignment, and data consistency across RFQs, quotations, POs, and inventory systems.

### **Product Master Creation**

- Each product is maintained as a unique item record in the system with:
  - Item Name and Description
  - IMPA Code (if applicable)
  - Internal Item Code (auto assigned or entered)
  - Part Number (if available)
  - Product Category (Lubricants, Provisions, Spares, etc.)
  - Unit of Measure (UOM)
  - Packaging Type (e.g., piece, meter, coil, drum, bag…etc.)
  - Status (Active / Inactive)
  - Obsolete Status (Yes/No), Obsolete Date, and Replacement Item Code (if any)
  - Barcode / QR Code (if applicable) for scanning during picking, dispatch, and delivery confirmation
- Supports both stock and non-stock items.

### **Brand and Specification Management**

- Items can be linked to specific brands (e.g., Shell, Castrol, Mobil).
- For each brand, users can enter:
  - Manufacturer Name
  - Product Model or Grade (e.g., Tellus S2 V 46)
  - Equivalent/Alternate Brand Options
- System may store and suggest brand alternatives if preferred brand is unavailable (If Brand A isn't available, the system knows that Brand B is acceptable for the same item, and it can recommend it automatically).

### **Product Classification and Searchability**

- Products are grouped under predefined categories and subcategories.
- Enables filtering and selection during:
  - RFQ creation
  - Quotation preparation
  - PO issuance
- Supports multi-attribute tagging (e.g., temperature sensitive, food-grade, OEM approved, marine use) for enhanced filtering and advanced search.
  - **Item Status Management**
- Items in the system shall carry a defined lifecycle status, used to control operational visibility and transaction eligibility:
- Active (Available for selection in RFQs, quotations, and POs).
- Inactive (Retained in the master data but hidden from operational workflows).
- Obsolete (Fully retired and replaced by a mapped item code, if applicable).
- The system shall also maintain a full history of:
- Item usage across documents and customers
- Supplier associations
- Pricing changes and revisions

### **UOM and Conversion Control**

- Standard UOMs are defined for each item (e.g., Litre, KG, Piece).
- Supports UOM conversions (e.g., Drum to Litre) for operational use.
- Enforces consistency of UOM across quotation, PO, and invoicing processes.

### **New Item Code Creation and Approval**

When a new item is introduced, the following process will be followed:

- Temporary Item Code Creation:  
   Users with proper access (e.g., Sales, Procurement) may create new product entries with temporary item codes for initial RFQ or quotation purposes.
- Duplicate Check:  
   Upon creation, the system shall automatically check for duplicates based on IMPA code, description, and brand.
- Pending Verification:  
   These newly created items shall be flagged as "Pending Verification" until they are reviewed and validated by an authorized user.
- Item Validation and Final Assignment:  
   Before a Sales Order (SO) is created, the item must be validated and assigned a final item code by an authorized user (e.g., Inventory Controller or Category Owner).
- Eligibility for Inclusion:  
   Once verified, the item becomes eligible for inclusion in Purchase Orders (POs), Sales Orders (SOs), and stock updates, and is then synchronized with Oracle SCM and WMS.
- System-Wide Synchronization and Traceability:
-  Once the item is approved and assigned a final item code, the system shall automatically synchronize it with the RFQ and Quotation modules.
-  This enables full traceability of the item from its initial creation through RFQ and quotation stages, allowing users to track when, where, and how the item was introduced and used.
-  The linkage also supports analytics on newly added items, making it possible to evaluate customer responses and usage trends of new entries across sales activities.

# **Order Placement, stock replenishment and Purchase Tracking**

This module manages the full cycle from Sales Order creation to supplier Purchase Order issuance and tracking. It also supports proactive stock replenishment and procurement monitoring to ensure uninterrupted fulfilment of customer orders.

### **Sales Order Creation**

- Upon customer quotation acceptance, the system shall generate a Sales Order (SO) with:
  - Customer, vessel, and port information
  - Item details, quantity, pricing, and required delivery date
- Each SO is assigned a unique ID and tracked throughout its lifecycle.
- Linked directly to its originating quotation for traceability.
- The system shall support versioning of Sales Orders. Any change to item quantity, price, or delivery timeline shall result in a new version number, along with change log (user ID, timestamp, change summary). Major changes may trigger a re-approval workflow if governed by DoA.
- Partial fulfilment of Sales Orders shall be supported. The system shall track per-line-item delivery status and maintain a fulfilment history showing which items have been delivered, partially delivered, or pending.
- Upon SO confirmation, the system shall check stock availability across NMSC-managed inventory locations (e.g., MLC warehouse, Street 46, Wakra showroom).
- If stock is available, the system shall generate an internal outbound request to the selected warehouse.
- If stock is insufficient, a purchase order process shall be triggered as outlined in Section 7.2.

### **Purchase Order (PO) Generation**

- Based on SO demand and stock availability:
  - If the item is available in stock, the system shall generate an outbound request to the relevant inventory location (e.g., MLC warehouse, Street 46 warehouse, or NMSC Wakra showroom), instead of creating a Purchase Order.
  - If the item is not in stock, the system shall create Purchase Orders for required items.
  - POs may be generated automatically from selected supplier offers or manually from vendor selection.
- Each PO includes:
- Supplier name
- Delivery terms
- Item list
- Unit price and total price
- Freight charges (if applicable)
- Expected delivery date
- One SO may result in multiple POs (multi-supplier sourcing).
- Each PO is assigned a unique identifier.
- Partial PO fulfilment shall also be supported. For each PO, the system shall allow tracking of received vs pending quantities per line item.

### **Stock Replenishment**

- For stock-controlled items:
  - System shall calculate reorder needs based on min/max thresholds, forecasted demand, or manual triggers.
  - Auto-recommend replenishment POs with preferred vendor and quantity.
- Users can review, edit, and approve replenishment orders before issuing.

### **Procurement Tracking**

- The system shall track PO status through the following stages:

Created → Sent → Confirmed → In Transit → Dispatched → Delivered

- Upon issuing the PO, the system shall:
- Automatically trigger order expedition workflows and notifications to concerned teams
- Allow the supplier to upload Delivery Note (DN) and Invoice via the supplier portal
- Expected vs actual delivery dates shall be recorded and compared.
- Vendor confirmations and shipment updates may be entered manually or captured via email/portal integration.
- Each PO status update shall be timestamped, and deviations from expected timelines will trigger exception alerts for review.
- The system shall support the creation of Goods Receipt Notes (GRNs) upon supplier delivery.
- GRNs shall record:
  - Received quantity vs PO
  - Damaged or short items
  - Receipt date and warehouse location (if applicable)
- Approved GRNs shall automatically update stock availability in the integrated Inventory Management System (Oracle SCM and/or WMS) and adjust batch records if applicable.
- GRNs shall be linked to the corresponding PO for inventory updates, supplier evaluation, and invoice matching.

### **Exception Handling**

- Exceptions such as:
  - Late delivery
  - Quantity shortfall
  - Item substitution
- Shall be logged against the PO with reason codes and comments.
- Substitutions may trigger customer-side approval workflows (if configured).
- Exception records shall be visible in supplier performance reports and considered in the vendor evaluation scorecard.

### **SO and PO Linkage and Visibility**

- System shall maintain full linkage between Sales Orders and the associated Purchase Orders.
- Users can track:
  - Which SOs are fully/partially sourced
  - PO status per item line
  - Anticipated delays affecting fulfilment
- All expenses related to the SO, including procurement cost, freight, clearance, handling, and any additional charges, must be traceable and linked to the SO for cost visibility and margin calculation

# **Inventory and Delivery Coordination**

This module ensures real-time visibility and operational control over inventory and delivery processes. It enables accurate stock tracking, coordination with warehouse systems, and structured delivery planning to vessels or ports.

### **Inventory Visibility and Stock Status**

- The system shall display real-time stock data through integration with the Inventory Management System (e.g., Oracle, WMS).
- Users shall be able to view:
  - On-hand quantity
  - Reserved quantity (against Sales Orders)
  - Available-to-promise (ATP) quantity
  - Batch/lot info and expiry dates (if applicable) Item barcode or QR code (if applicable) for scanning and physical identification during warehouse and delivery processes
  - For stock-available items, the system shall generate outbound requests to the relevant warehouse or showroom (e.g., MLC, Street 46, Wakra) based on SO demand.
  - Each outbound request shall include item details, quantity, SO reference, and required delivery date, and shall be tracked through stages (Requested → Picked → Dispatched).
  - Outbound fulfilment status shall be visible to both warehouse and sales teams for full transparency and tracking.

### **Stock Reservation and Allocation**

- Upon Sales Order confirmation, the system shall reserve inventory to avoid overcommitment.
- Stock reservation shall be based on:
  - Item and quantity
  - Vessel, port, and ETA
- Reserved stock shall be visible to planning and warehouse teams.

### **Delivery Planning and Scheduling**

- The system shall support delivery scheduling based on:
  - Vessel ETA / ETD and port access windows
  - Item handling requirements (e.g., chilled, bonded)
- Users shall define:
  - Target delivery date/time
  - Assigned delivery team or driver
- Calendar view or delivery queue available for planning.
- Delivery status shall be visible and updated in real time (e.g., Scheduled, In Progress, Completed)
- Linked invoice status shall also be shown where applicable (e.g., Not Invoiced, Invoiced, Partially Invoiced)

### **WMS Integration and Dispatch Execution**

- Once a delivery is scheduled and confirmed, the system shall automatically send the delivery details to the WMS. These details include the items to be picked, their quantities, storage locations, and the required delivery schedule.
- The warehouse team shall then use the WMS to:
- Pick the required items from storage
- Pack them according to handling requirements
- Prepare them for dispatch
- As each step is completed (Picked → Packed → Dispatched), the WMS shall update the delivery status in the NMSC Software in real time. This ensures all users have visibility into the delivery progress.
- Warehouse users may also print or upload documents such as:
  - Packing Lists
  - Container Labels
  - Loading Checklists (if applicable)
  - Material Safety Data Sheets (MSDS), if applicable (e.g., for chemical items)

### **Delivery Note and Confirmation**

The system shall generate a Delivery Note at the point of customer dispatch.

- The Delivery Note shall include:
  - SO or delivery reference
  - Item list, quantity, delivery date/time
  - Vessel name and port
  - Recipient contact
- System shall allow uploading of signed proof of delivery (POD), including images or scanned documents.
- Delivery status shall update to "Completed" once confirmed.  
   To improve flexibility and real-time coordination, the system should support mobile-responsive access for authorized users involved in field activities. This includes:
- Warehouse staff using tablets or handheld devices for dispatch updates.
- Delivery teams capturing Proof of Delivery (POD) with photo upload or digital signature.
- Real-time status updates for delivery, re-delivery attempts, or exceptions logged from the field.

### **Return Handling and Failed Delivery**

In case of delivery failure or rejection by the vessel/site, the system shall support creation of a Delivery Return record.

- Return record shall include:
  - Reference to original delivery note
  - Reason code (e.g., refused item, access issue, quantity mismatch)
  - Resolution: return to stock or report for write-off
- Returned items shall trigger GRN reversal or adjustment in inventory if restocked.

### **Exception Handling**

- Users may record delivery exceptions such as:
  - Short/over deliveries
  - Substituted items
  - Access delays or re-delivery
- System shall log exceptions with reason code and comments.
- Linked to SO, Delivery Note, and customer record for reporting.

# **Document Management**

This module supports centralized upload, storage, classification, and tracking of all operational, commercial, and compliance-related documents. It ensures users can quickly access the correct files during RFQ, quotation, delivery, or audit workflows, and that expiry-sensitive documents are monitored proactively.

## **Document Upload and Attachment**

- The system shall allow users to upload documents at any relevant transaction level:

| No  | Document Name                     | Purpose / Use                                                       | BRS Sections      |
| --- | --------------------------------- | ------------------------------------------------------------------- | ----------------- |
| 1   | Customer RFQ                      | Captured via email/portal; parsed and converted into structured RFQ | 2.3.1, 9.1        |
| 2   | Supplier Quotation                | Submitted via portal or email; compared in evaluation matrix        | 2.3.3, 2.3.4, 9.1 |
| 3   | Customer Quotation                | Generated based on supplier responses or pricing logic              | 3.1, 9.1, 10.1    |
| 4   | Proforma Invoice                  | Issued before delivery for advance payment                          | 11.1, 9.1         |
| 5   | Customer Invoice                  | Final invoice issued after delivery                                 | 11.1, 9.1, 11.3   |
| 6   | Purchase Order (PO)               | Issued to vendors; tracked and approved                             | 7.2, 9.1, 10.1    |
| 7   | Goods Receipt Note (GRN)          | Created upon receipt of goods                                       | 7.5, 9.1          |
| 8   | Supplier Invoice                  | Received from vendor; matched against PO/GRN                        | 11.2, 9.1, 11.3   |
| 9   | Delivery Note (DN)                | Generated at dispatch; includes item list and delivery details      | 8.5, 9.1          |
| 10  | Packing List                      | Used for Ship Chandelling orders; validates contents                | 8.1.10, 9.1       |
| 11  | Proof of Delivery (POD)           | Uploaded post-delivery with signature/image                         | 8.5, 9.2, 9.7     |
| 12  | Signed Contract                   | Customer or vendor agreements; uploaded and versioned               | 4.1, 9.1, 9.6     |
| 13  | Rate Card / Pricing Annex         | Attached to contract to define pricing terms                        | 4.1.1, 9.6, 10.2  |
| 14  | Vendor Registration Documents     | CR copy, bank letter, tax cert., etc.                               | 5.2.3, 9.1, 9.3   |
| 15  | Material Safety Data Sheet (MSDS) | For chemical or technical items                                     | 6.2, 9.2, 9.3     |
| 16  | Product Datasheet                 | Specs for items/services                                            | 6.2, 9.1, 9.6     |
| 17  | ISO/Compliance Certificates       | Uploaded during vendor onboarding or contract                       | 5.2.3, 9.3        |
| 18  | Service Completion Report         | Used for 3rd-party services provided to vessels                     | 1.5.2, 9.1        |
| 19  | Insurance Request Form            | PDF generated from system and sent via email                        | 14.1, 9.1, 9.2    |
| 20  | Defect Log on DN                  | Defects recorded during loading/offloading                          | 14.2, 8.5         |
| 21  | Credit Note                       | Issued for invoice reversals or corrections                         | 11.1, 11.3        |
| 22  | Quotation Evaluation Matrix       | Generated during supplier comparison                                | 2.3.4             |
| 23  | Workflow Audit Logs               | Tracks user approvals, actions, and timestamps                      | 10.7              |
| 24  | Delegation of Authority Matrix    | Defines approval thresholds by user/role                            | 10.2              |

- Supported file formats: PDF, DOCX, XLSX, JPG, PNG, etc.
- Users shall be able to upload multiple files at once (bulk upload) using a drag-and-drop interface.
- The system shall allow document preview in-app (for PDFs, images, etc.) to avoid unnecessary downloads.
- Each document shall have:
  - A title
  - Description
  - Automatic timestamp of upload
  - User ID of uploader

## **Expiry and Validity Tracking**

- The system shall allow expiry dates to be set for time-bound documents (e.g., licenses, MSDS, certificates).
- System shall trigger alerts:
- Prior to expiry (e.g., 30/60/90 days in advance)
- Upon expiry (preventing operational use if required)
- Documents linked to vendors, products, or contracts shall be flagged if expired or missing.
- For stock items with approaching expiry (as flagged in the inventory module), the system shall notify commercial users to consider applying discounted pricing or initiating stock clearance offers during quotation creation.

## **Access and Permission Control**

- Access to view, upload, or delete documents shall be role-based.
- Sensitive files (e.g., contracts, bank letters) shall be restricted to authorized roles only.
- System shall log all uploads and deletions for audit.

## **Document Search and Retrieval**

- Users shall be able to search documents by:
- Document type
- Linked record (RFQ, PO, Vendor, etc.)
- Upload date
- Expiry status
- Search results shall support filtering and export to Excel.

## **Version Control**

- For key documents (e.g., contracts, datasheets), the system may support versioning:
- Upload of revised versions with version number and date
- Retention of old versions for reference
- Ability to tag one document as "Current"

## **Barcode / QR Attachment**

- System shall support uploading documents that include QR codes or barcodes (e.g., packing lists, PODs).
- This will allow for easier scanning and retrieval of linked documents during audits or on-site checks.

# **Workflow Management**

This module enables the configuration, automation, and tracking of approvals, tasks, and system workflows across commercial, operational, and financial processes. It ensures compliance with Delegation of Authority (DoA), supports collaboration among stakeholders, and provides full auditability and visibility over all business actions.

- 1. **List of Required Workflows**

| No  | Workflow Type                 | Purpose / Use                                                         | BRS Sections      |
| --- | ----------------------------- | --------------------------------------------------------------------- | ----------------- |
| 1   | RFQ Review (Optional)         | Internal review before RFQ is issued to suppliers (if enabled)        | 2.3.2, 10.1       |
| 2   | Customer Quotation Approval   | Internal approval of quotations prior to customer submission          | 3.1.4, 10.1, 10.2 |
| 3   | Purchase Order (PO) Approval  | PO approval based on value thresholds and DoA                         | 7.2, 10.1, 10.2   |
| 4   | Vendor Registration Approval  | Approval of new supplier records and compliance documentation         | 5.2.3, 10.1       |
| 5   | Contract / Rate Card Approval | Review and approval of legal contracts and pricing annexes            | 4.1, 4.1.1, 10.1  |
| 6   | Exception Handling Approval   | Approvals for margin override, item substitution, or emergency supply | 3.2.3, 6.3, 10.1  |
| 7   | Credit Note Approval          | Commercial and finance approval for issuing credit notes              | 11.1, 10.1        |
| 8   | Invoice Reversal Approval     | Approval workflow for cancellation or correction of customer invoices | 11.1, 11.3, 10.1  |
| 9   | Service Completion Approval   | Verification and approval of 3rd-party or internal service completion | 1.5.2, 10.1       |

## **Configurable Workflow Rules**

- The system shall support configuration of approval workflows for all the processes listed in Section 10.1.
- Workflow rules shall be based on:
  - Document type
  - Value thresholds (as per DoA)
  - Item category or vendor type
  - User role or department
- Each workflow rule shall allow configuration of optional reminders and escalation paths if no action is taken within a specified timeframe (e.g., 48 hours).
- If a customer requests item removals or changes in a quotation, the revised version shall be evaluated against DoA thresholds. If exceeded, the system shall automatically trigger a re-approval.

## **Delegation of Authority (DoA) Integration**

- The system shall enforce DoA-based routing for approvals involving:
  - Pricing or margin changes
  - Quotation or PO total value thresholds
  - Contract finalization
- DoA logic shall be maintained in a central matrix, configurable by admin users.
- If an action exceeds user authority, system shall route to the appropriate approver automatically.

## **Role-Based Task Assignment**

- Each workflow step shall assign responsibility to a defined user or role.
- Users shall be able to access their assigned tasks via a centralized dashboard or task center (i.e., a dedicated screen within the system showing all workflow actions awaiting user review or approval).
- Users shall have the ability to approve, reject, or return with comments.
- Tasks can be reassigned with justification by authorized users (e.g., if an approver is on leave).

## **Notifications and Alerts**

- The system shall send notifications for:
  - New approval requests
  - Re-submissions requiring new approvals
  - Expired or overdue approvals
- Alerts may be sent via:
  - In-system notification
  - Email alerts
- Notifications shall include:
- Document reference
- Amount
- Due date
- Direct link to the approval screen
- Escalation alerts shall be automatically triggered and sent to the next-level approver or designated supervisor if no action is taken within the defined time window.

## **Workflow Status Tracking**

- For all documents under approval workflows, the system shall display:
  - Current status and assigned user
  - Full history of approvals and rejections
  - Time spent at each step
- Users shall have access to a complete timestamped trail for audit and review purposes.

## **Workflow Exceptions**

- If an approver is unavailable (e.g., on official leave), an authorized user may temporarily delegate the approval right to another designated user.
- Administrators may override or reassign workflows with mandatory justification logged by the system.
- The system shall support pre-defined delegation rules for automatic routing during periods of planned unavailability

# **Invoicing (Cost) and Billing (Revenue)**

This module enables generation, validation, and tracking of both customer billing and supplier invoicing. It ensures all revenue and cost records are tied to system transactions and aligned with contractual or quoted values. Financial records are exported to Oracle Accounts Payable (AP) and Accounts Receivable (AR) for accounting purposes.

## **Customer Billing (Revenue)**

- The system shall generate customer billing documents upon:
- Completion of delivery (based on Delivery Note confirmation)
- Linked to Sales Order and approved quotation
- Customer billing documents shall include:
- System-generated invoice number
- Customer and vessel details
- Linked quotation and SO reference
- Itemized list: quantity, unit price, discounts (if any)
- Taxes (e.g., VAT) and delivery terms
- The system shall support two billing modes:
  - Proforma Invoice: Issued for the purpose of collecting advance payment from the customer prior to delivery.
  - Final Invoice (Customer Bill): Approved document used for official billing and Oracle AR export.
- Proforma Invoices:
- shall support line-item editing, optional charges, and customer-specific notes prior to approval.
- Users shall be able to convert Proforma Invoices into Customer Bills after review and internal approval.
- System shall validate all supporting documents (e.g., signed delivery note, approved quotation) are attached before final invoice approval.
- If any mandatory document is missing, the invoice cannot be finalized.
- Proforma and Customer Bills shall both follow defined approval workflows.
- All billing documents shall link to supporting files (e.g., Delivery Note, signed quotation) via the Document Management System (Section 9).
- The system shall track the method and status of bill delivery to the customer:
- PDF email delivery, secure smart link, or hard copy handover
- The system shall log:
- Delivery method (email with PDF, secure link, or manual handover)
- Timestamp of delivery
- Recipient details (email ID or person name)
- Delivery status (e.g., Sent, Acknowledged, Pending)
- The invoice email may include an embedded "Acknowledge" button, allowing customers to confirm receipt directly.
- Customer actions such as viewing, downloading, or acknowledging the invoice shall be automatically logged, and the invoice status shall update accordingly (e.g., Acknowledged, Rejected).
- The system shall allow recording of customer receipt confirmation either manually (e.g., file upload, timestamp entry) or automatically through system-triggered interactions such as secure link access or clicking an embedded acknowledgment button. All confirmations shall be logged with timestamp and user identity.
- Billing status workflow shall follow:  
   Draft → Approved → Sent → Paid / Partially Paid / Overdue
- Both Proforma Invoices and Customer Bills shall enter the approval workflow before being marked as "Sent".
- Once approved, billing documents shall be exportable in PDF format for customer sharing and in XML (or equivalent) for Oracle AR integration.
- System shall allow invoice reversal or credit note generation in case of cancellation or correction, with full audit trail.

## **Supplier Invoicing (Cost)**

- The system shall support recording of supplier invoices received after delivery confirmation (via GRN).
- Invoices shall be matched to:
  - Purchase Orders
  - GRNs
  - Agreed unit price and quantity
- Fields to capture:
  - Supplier name, PO number, invoice number/date
  - Line items, tax, total amount
- System shall validate variance between invoice and PO/GRN.
- Status: Pending → Validated → Approved → Exported to Oracle AP

### **11.2.1. Additional Expense Allocation (Freight, Customs, etc.)**

- The system shall support allocation of additional expenses related to cargo, such as:
- Freight charges
- Customs duties
- Clearance and handling fees
- These charges shall be apportioned to the cost of received items to reflect their true landed cost.
- Allocation may be done manually or based on predefined rules (e.g., by value, weight, or volume).
- This functionality mirrors the current approach in Oracle Fusion's _Trade Operation_ module and shall be either natively supported or integrated accordingly.
- Status Workflow:  
   Pending → Validated → Approved → Exported to Oracle AP

## **Integration with Oracle AP and AR**

- Approved billing and invoicing records shall be exported directly to:
- Oracle Accounts Payable (AP) for supplier-related costs
- Oracle Accounts Receivable (AR) for customer billing
- Integration includes invoice header, line item, tax, and reference metadata.
- System shall log export status and date for traceability.

# **Insurance Management**

- This module provides functionality to manage insurance documentation and defect accountability related to shipments handled by NMSC. It digitizes the current manual insurance form process and enables traceability of defects during loading and offloading.

## **Insurance Request Preparation and Submission**

- The system shall allow users to generate a structured insurance request document for any import or domestic shipment requiring coverage. The insurance form shall be system-generated using data from confirmed orders and linked delivery details.
- Functional Requirements:
- Insurance requests can be initiated from within the Sales Order, PO, or Shipment modules.
- System shall auto-populate fields from existing records, including:
  - Order Reference Numbers
  - Shipping Invoice Numbers (if available)
  - Commodity / Cargo Description
  - Supplier Name
  - Place of Load and Place of Discharge
  - Mode of Transport
  - Order Value and Currency
  - Incoterms
  - Tentative Shipment Date(s)
  - Cost Centre and BU Account Code
- Insurance Request shall be generated as a structured PDF with standard format and submitted to the Insurance Department via email.

Note: No system integration is required with the Insurance Department. The Insurance Request shall be submitted manually as a PDF attachment.

## **Defect Reporting During Loading / Offloading**

- To ensure insurance accountability, the system shall support the capture and logging of material defects observed during transportation.
- Functional Requirements:
- Users may enter defect details directly on the system-generated Delivery Note.
- Fields include:
  - Nature of Defect
  - Location (Loading / Offloading)
  - Time and Date
  - Remarks / Notes
  - Optional Photo Attachment
- Defect entries shall be linked to the corresponding shipment, delivery, and insurance record for traceability.

# **Reporting & Analytics**

- An effective reporting and analytics module is essential for providing stakeholders with insights into the operational performance, progress, and key metrics across NMSC activities.
- All relevant business units are using various report formats to track progress, cost, revenue, and performance for their NMSC operations.
- These reports may vary from Daily Progress Reports (DPRs) to various other operational reports per business unit.
- The system should offer a variety of reports to meet the needs of different stakeholders and support various aspects of operational planning, execution, monitoring, and reporting for NMSC.
- The module should offer customizable dashboards that allow users to create personalized views of operational data and metrics.
- Users should be able to choose from a variety of widgets, charts, and graphs to visualize information according to their preferences and needs.
- Users should have the ability to generate custom reports at any time, even if they are not pre-configured in the system.
- Additionally, the system shall include transactional dashboards that visually monitor the progress and status of key business processes. These dashboards will display real-time status breakdowns and trends for documents such as:
  - Purchase Orders (POs): Draft, Submitted, Approved, Rejected, In Transit, Delivered
  - Quotations: Draft, Submitted, Approved, Rejected, Expired
  - Sales Orders (SOs): Created, Partially Fulfilled, Fully Fulfilled
  - Invoices: Draft, Sent, Paid, Overdue
- Dashboards must support:
  - Graphical representation of trends (e.g., bar charts, status-wise breakdowns)
  - Date filtering (e.g., weekly, monthly trend views)
  - Filtering by customer, status, user, or department
  - Clickable insights (e.g., clicking on "Submitted Quotations" opens the related records)
- These visual tools will enable management and users to track workflow performance, identify bottlenecks, and monitor document progression at a glance.

## **Reports Regarding NMSC Sales Activities**

<div class="joplin-table-wrapper"><table><tbody><tr><th><p>Report Name</p></th><th><p>Purpose</p></th><th><p>Data Included</p></th></tr><tr><td><p>Daily Purchase Orders</p></td><td><p>This report summarizes daily sales transactions for NMSC, helping users track sales activity, delivery status, and invoice completion across different periods (e.g., daily, weekly, monthly). It assists management in reviewing sales performance and identifying pending deliveries or invoices.</p><p>• To enhance the usability and business insight derived from the Daily Sales Summary Report, the following optional features are recommended:</p><p>- Clickable sections to view transaction-level detail</p><p>- Filter for transactions where delivery or invoice is pending.</p></td><td><ul><li><ul><li>Date / Date Range (from Created Date)</li><li>Company Name</li><li>Product Type</li><li>Product Name</li><li>Description</li><li>Sales Amount (QAR)</li><li>PO</li><li>Remarks (if any)</li><li>Delivery Status</li><li>Delivery Note (DN)</li><li>Delivered Invoice Amount (QAR)</li><li>Invoice Status</li><li>Invoice Number (INV)</li></ul></li><li>Pending to Deliver and Invoice (QAR))</li></ul></td></tr><tr><td><p>Quotation Activities Report</p></td><td><p>Provides a summary of quotation requests and their current status, enabling tracking of quotation volumes, client interest, and potential future sales. It serves as an early indicator for business pipeline performance.</p></td><td><ul><li>Created Date</li><li>Company Name</li><li>Product Type</li><li>Product Name</li><li>Description</li><li>Quoted Amount (QAR)</li><li>Quote Reference Number</li><li>Quotation Received Date</li><li>Email Reference</li><li>Remarks (if any)</li><li>Quotation Status (e.g., Sent, Approved, Rejected, Under Review)</li><li>Rejection Reason (e.g., Not Required, Incorrect Spec, Budget Constraint)</li></ul></td></tr><tr><td><p>Lead and Clients List Activity</p></td><td><p>Provides an overview of lead status, client interactions, and sales potential. It helps sales and management teams monitor the lifecycle of leads, evaluate sales effort effectiveness, and identify high-potential opportunities.</p><p>The report can be filtered by Lead Owner, Client Status, Product Type, Creation Date, and Probability Index.</p></td><td><ul><li>Lead / Account Owner</li><li>Client Status (e.g., New, Qualified, Converted)</li><li>Product Type</li><li>Product Name</li><li>Company Name</li><li>Contact Name</li><li>Designation</li><li>Contact Number</li><li>Lead Creation Date</li><li>Lead Qualified Date</li><li>Last Update Date</li><li>In-Demand Product &amp; Quantity</li><li>Expected Monthly Volume (Liters / Kg)</li><li>Expected Monthly Revenue (QAR)</li><li>Latest Updates and Activity</li><li>Probability Index (e.g., Low, Medium, High)</li></ul></td></tr><tr><td><p>Inventory Status Report</p></td><td><p>This report presents a detailed snapshot of item-level inventory data across NMSC and related stores.</p><p>It supports warehouse management by tracking quantities, storage locations, expiration dates, and historical transactions. Additionally, it highlights stock thresholds using predefined minimum and maximum levels to prompt timely replenishment and avoid overstock or stockouts</p></td><td><ul><li>Item Code</li><li>Supersede Code</li><li>Type - Item classification</li><li>Legacy Part Number</li><li>Item Description</li><li>Category Name</li><li>Lot Number</li><li>Expiration Date</li><li>Sub Inventory</li><li>Locator</li><li>UOM (Unit of Measure)</li><li>Last Receipt Date</li><li>Last Issue Date</li><li>Quantity</li><li>Unit Cost</li><li>Value</li><li>Minimum Stock Level</li><li>Maximum Stock Level - Ideal upper stock limit to prevent overstocking.</li></ul></td></tr><tr><td><p>Good Receipt Note Report</p></td><td><p>Captures the receipt of goods against purchase orders, facilitating inventory reconciliation and supplier performance tracking. It enables warehouse and procurement teams to validate delivered quantities, costs, and timelines against purchase commitments.</p></td><td><p>• Receipt No (GRN)<br>• Date<br>• Supplier No.<br>• Supplier Name<br>• Location<br>• PO No.<br>• Requisition No<br>• Item Category<br>• Item Description<br>• Currency<br>• Conversion Rate<br>• Quantity<br>• Price<br>• Value (QAR)</p></td></tr><tr><td><p>Sales Summary Report</p></td><td><p>This report provides a comprehensive summary of sales invoices transactions. It enables detailed analysis of revenue, profitability, and sales performance, supporting both operational tracking and financial reporting. It is used by sales teams and management to monitor invoice activity, assess profit margins, and evaluate sales effectiveness over time.</p></td><td><ul><li>AR Invoice No</li><li>Doc Type - Document classification (e.g., INV for Invoice)</li><li>Invoice Date</li><li>Customer Name</li><li>Customer Account</li><li>AP Invoice</li><li>AGIS Batch</li><li>Customer PO</li><li>Order #</li><li>Order Type</li><li>Currency</li><li>Exchange Rate</li><li>Invoice Amount</li><li>Discount/Adjustment Amount</li><li>Net Amount</li><li>Shipment Date</li><li>Item - Inventory code for the sold item</li><li>Description - Detailed description of the item sold</li><li>Category - Product category</li><li>Order UOM</li><li>Quantity</li><li>Conv. Quantity - Converted quantity based on UOM</li><li>Picked Sub Inventory - Inventory location the item was shipped from</li><li>Unit Cost - Cost per unit</li><li>Unit Sell Price</li><li>Unit Sell Price QAR</li><li>Line Cost - Total cost for the line item</li><li>Line Selling - Total selling value for the line item</li><li>Profit for the individual item line</li><li>Aggregate profit for the full invoice</li></ul></td></tr><tr><td><p>Delivery Tracking Report</p></td><td><p>Tracks delivery performance and fulfillment of sales orders. It ensures alignment with promised delivery schedules and identifies delays or inefficiencies in the delivery process.</p></td><td><ul><li>The report will include the following:</li><li>Sales Order Number / PO Number</li><li>Customer Name</li><li>Delivery Date (Planned vs. Actual) - Comparison of promised delivery date and actual delivery execution.</li><li>Product Description - Description of items delivered.</li><li>Quantity Ordered vs. Delivered - Helps identify partial deliveries or missed quantities.</li><li>Delivery Status</li><li>Delivery Location</li><li>Remarks</li></ul></td></tr><tr><td><p>Complete Transaction Report</p></td><td><p>•This report provides a detailed summary of all inventory transactions occurring within the organization, covering movements such as issues, receipts, transfers, returns, and adjustments. It is designed to offer visibility into the flow of goods across sub inventories, projects, and business units.</p><p>•The report supports operational transparency, cost tracking, and compliance by documenting each transaction's nature, origin, and destination.</p></td><td><ul><li>Transaction number</li><li>Item code</li><li>Item description</li><li>Transaction Quantity</li><li>Source Reference</li><li>Creation Date</li><li>Transfer Sub inventory</li></ul></td></tr><tr><td><p>Outbound Report</p></td><td><p>Monitors outbound order fulfillment activities, capturing shipment preparation details, ensuring completeness of mandatory order fields, and enabling quality checks on quantity, expiry, and batch information before dispatch.</p></td><td><p>• Owner Name<br>• Advisor Name<br>• Mobile Number<br>• Requested Shipped Date &amp; Time<br>• Order Reference Number<br>• Ship-To Name<br>• Pickup Trailer Number<br>• Packing List Number<br>• Line Number (starting from 1 per Order Reference #)&nbsp;<br>• Material Code / SKU<br>• Material Description<br>• UOM<br>• Order Quantity<br>• Expected Expiry Date<br>• Expected Batch Number<br>• Notes (if any)</p></td></tr><tr><td><p>Packing List Report - Ship Chandelling Only</p></td><td><p>Verifies order accuracy, quantity, and packing details for outbound shipments. This report also serves as a formal shipping document accompanying each delivery, useful for both internal reference and customer acknowledgment.</p></td><td><p>• Packing List Number<br>• Order Reference Number<br>• Ship-To Name / Customer Name<br>• Requested Shipped Date &amp; Time<br>• Pickup Trailer Number<br>• Line Number<br>• Material Code / SKU<br>• Material Description<br>• UOM<br>• Packed Quantity<br>• Expected Expiry Date (if applicable)<br>• Expected Batch Number<br>• Remarks / Notes (if any)</p></td></tr><tr><td><p>Invoicing Activities Report</p></td><td><p>Tracks and monitors all invoice-related activities. The report ensures visibility over issued invoices, their alignment with corresponding Purchase Orders (POs) and Sales Orders (SOs), and supports timely submission, status tracking, and proper documentation for billing and audit purposes.</p></td><td><ul><li>Order Processor - <em>Staff responsible for processing and issuing the invoice.</em></li><li>Date</li><li>Customer Ref - <em>Reference provided by the customer for identification or tracking.</em></li><li>PO Reference Number - <em>Purchase Order reference number related to the transaction.</em></li><li>SO Reference No <em>- Sales Order reference number, indicating the related internal sales document.</em></li><li>Amount - <em>Total invoice value.</em></li><li>Currency</li><li>Status - <em>Current status of the invoice (e.g., Draft, Submitted, Approved).</em></li><li>Date Submitted</li></ul></td></tr><tr><td><p>Data Validation Reference Report</p></td><td><p>This report provides a centralized source of standardized reference values used across all operational and sales-related reports to ensure consistency, data integrity, and accuracy. It supports data validation mechanisms (e.g., dropdown lists), minimizes manual entry errors, and enables effective filtering, review, and uniform report generation.</p></td><td><p>• Client Name<br>• Product Type<br>• Client Status (e.g., Qualified, Unqualified)<br>• Invoice Status (e.g., Complete, Partial)<br>• Salesperson<br>• Brand</p></td></tr><tr><td><p>Stock consumption Report</p></td><td><p>This report provides a detailed analysis of stock consumption across different dimensions including items, customers, time periods, and inventory segments. It is used to track usage trends, support demand forecasting, optimize reordering, and reduce excess inventory. The report supports both operational control and strategic planning.</p></td><td><ul><li>Item-wise</li><li>Customer-wise</li><li>Period-wise</li><li>Salesperson-wise</li><li>Item category</li><li>Sub-inventory</li></ul></td></tr><tr><td><p>Order-To-invoice Report</p></td><td><p>Track the number of orders received against Quotations and RFQs and ensure they are delivered and invoiced on time.</p></td><td><ul><li><ul><li>Total quotations given.</li><li>Total orders received.</li><li>Total orders delivered</li><li>Orders pending delivery.</li><li>Delivered orders invoicing time. (to find out if invoiced on time).</li></ul></li></ul></td></tr></tbody></table></div>

## **Deals and Tenders Report for NMSC**

<div class="joplin-table-wrapper"><table><tbody><tr><th><p>Report Name</p></th><th><p>Purpose</p></th><th><p>Data Included</p></th></tr><tr><td><p>Deals and Tenders Report for NMSC</p></td><td><p>Provides an overview of deals, tenders, and pipeline projects related to NMSC. It supports strategic sales monitoring, revenue forecasting, and business development oversight.</p><ul><li>To enhance the visibility and decision-making utility of this report, the following optional features are recommended:</li><li>pipeline chart view (visual tracking of Won, Negotiation, Submitted stages).</li><li>Win/Loss analysis filters.</li><li>estimated revenue totals grouped by duration or award status.</li><li>Export to Excel or PDF.</li><li>Colour coding or status flags (e.g., green for awarded, yellow for pending, red for lost).</li></ul></td><td><p>• Business Unit<br>• Lead/Opportunity<br>• Customer<br>• Product/Project Type<br>• Description<br>• Date Created/Tender Enquiry Date<br>• Proposal Submission Date/Deadline<br>• Project/Contract Start Date<br>• Contract/Project Duration<br>• Estimated Revenue (QAR)<br>• Status (e.g.<br>• Proposal Submitted<br>• Won<br>• Negotiation<br>• Lost)<br>• Clarifications/Remarks<br>• Source (if applicable)<br>• Award Date<br>• Status Update</p></td></tr></tbody></table></div>

## **Future Reporting Requirements - Strategic and Operational Analytics**

<div class="joplin-table-wrapper"><table><tbody><tr><th><p>Report Name</p></th><th><p>Sub-reports and Description</p></th></tr><tr><td><p>Order Processing Efficiency Reports</p></td><td><ul><li>Orders Processed: Tracks the PO's from customers which are processed on time</li><li>Supplier RFQ's &amp; PO's: Tracks the number of PO's provided to suppliers.</li><li>Delivery Status of PO's to suppliers: Tracks the delivery of items against NMSC PO's provided to suppliers, and to remind suppliers to deliver items if delayed.</li><li>GRN: Tracks the GRN created against received goods.</li></ul></td></tr><tr><td><p>Product-Specific Reports</p></td><td><ul><li>Product Line Performance: Highlights the best- and worst-performing product lines.</li><li>Inventory Turnover Report: Tracks how quickly products stock is sold and replenished.</li></ul></td></tr><tr><td><p>Sales Efficiency Reports</p></td><td><ul><li><ul><li>Conversion Rates: Tracks the percentage of quotations submitted which are converted into actual sales. This can help find out reasons for non-conversion, possibly due to higher price of products, credit holds, or related reasons.</li><li>Non-Stock item RFQ's: Tracks list of RFQ's from customers for non-stock items.</li><li>Average Deal Size: Provides insights into the average transaction value.</li></ul></li></ul></td></tr><tr><td><p>Customer-Focused Reports</p></td><td><ul><li><ul><li>Customer Segmentation Performance: Reports sales performance by customer type (e.g., Marine, Industrial, Automotive, Retail, Energy).</li></ul></li></ul></td></tr><tr><td><p>Sales Performance Reports</p></td><td><ul><li><ul><li>Sales Volume by Product (Item wise): Tracks the quantity of products sold, broken down by product type or category or sub-inventory.</li><li>Revenue by Product (Item wise): Highlights revenue generated from each product.</li><li>Sales Revenue by Customer Wise: Tracks the revenue from each customer.</li><li>Revenue / Profit period wise: Tracks the Revenue / Profit in a particular period or time frame.</li><li>Item Category</li><li>Sub-Inventory.</li></ul></li></ul></td></tr><tr><td><p>Stock &amp; Inventory Report</p></td><td><ul><li>Stock Report: Tracks the stock of items in inventory.</li><li>Min-Max Report: Tracks the low inventory items to prompt replenishment and monitors maximum thresholds to avoid stock out.</li><li>Supplier RFQ's &amp; PO's: Tracks the number of purchase orders issued to suppliers.</li><li>Order expedition of PO's issued to suppliers: Monitors the delivery status of items against NMSC POs and reminds suppliers of any delays.</li></ul></td></tr></tbody></table></div>

# **Integrations**

Milaha uses a variety of enterprise systems to manage its core functions. The NMSC system shall integrate with these systems to ensure synchronized master data, real-time process visibility, and seamless operational and financial workflows.

## **Customer Master Data**

Oracle CX is used at Milaha for managing limited customer data.

- Oracle Fusion Finance retrieves customer master data from Oracle CX.
- The NMSC system shall maintain full customer master data (cash and credit) and synchronize with Oracle CX and Oracle Fusion Finance in real time.
- Customers created in the NMSC system shall undergo onboarding/vetting by Finance.
  - Customer credit limits will be retrieved from Oracle Fusion Finance and shown in the NMSC system for sales quoting and billing validation.
- Synchronization includes:
  - Oracle customer account number
  - Credit limit
  - Tax and legal data
- Credit approval process remains external; NMSC shall receive only the final credit result for visibility.
- Cash customers will have no credit limit enforcement but must still be registered and approved.

## **Supplier / Vendor Master Data**

- Vendor records shall be initially created and maintained within the NMSC system to manage commercial, operational, and sourcing activities independently.
- For vendors already maintained in Oracle, key master data (e.g., legal name, CR number, tax ID, and bank details) shall be abstracted into the NMSC system to reduce duplication and ensure consistency during onboarding and validation.
- Once a vendor is approved within NMSC, only the required financial information shall be pushed to Oracle Procurement for vendor code assignment and transaction eligibility.
- The synchronization to Oracle shall include:
  - Supplier ID
  - Legal and tax details
  - Bank information
  - Approval status
- Commercial information such as category classification, pricing terms, and contract conditions shall remain confidential and managed exclusively within the NMSC system.
- This separation ensures:
  - Internal control over tactical sourcing
  - Commercial privacy from centralized procurement
  - Reduced dependency on corporate vendor workflows
- Only vendors with approved financial status in Oracle shall be eligible for PO issuance and invoice processing.

## **Financial Finance Integration (Oracle AP and AR)**

- The NMSC system shall integrate exclusively with:
- Oracle Accounts Payable (AP) for processing supplier invoices (cost)
- Oracle Accounts Receivable (AR) for posting customer billing (revenue)
- The integration does not extend to the full ERP platform but is limited strictly to these financial modules (AP and AR).
- Only validated and approved billing and invoicing records shall be exported from the NMSC system after all supporting documentation and workflow approvals are completed.
- Exported data shall include:
- Invoice header and line-item details
- Customer/vendor information
- Tax, discounts, and credit note references (if applicable)
- Source document links (e.g., PO, SO, GRN, DN)
- Export status and timestamp
- Once exported, financial posting, payment release, and aging tracking shall be handled in Oracle AP/AR.
- The payment status (e.g., Paid, Partially Paid, Overdue) shall be retrieved from Oracle and displayed within the NMSC system for visibility and reporting.
- In case of rejected or failed invoices (e.g., due to mismatch, missing vendor code, or duplicate record), the NMSC system shall log the failure reason, notify responsible users, and allow re-submission after correction.

## **Procurement System Integration (Oracle Procurement)**

- Oracle Procurement is used for centralized PO approvals and tracking across Milaha.
- The NMSC system shall push approved POs to Oracle for vendor execution and visibility.
- Any PO changes (e.g., amount, vendor, quantity) in Oracle must sync back to the NMSC system to maintain alignment.
- In addition, GRN (Goods Receipt Note) creation and updates in the NMSC system shall be synchronized with Oracle Procurement, where required, to support invoice validation and payment workflows.

## **Inventory Management System ((If Vendor System Lacks Inventory Functionality)**

- Milaha uses WMS and Oracle SCM to manage inventory across various locations.
- The NMSC system shall:
  - Retrieve real-time inventory availability by location
  - Reserve stock upon SO confirmation
  - Update stock balances upon GRN creation or delivery execution
- Inventory updates must be bi-directional: stock movement triggered in NMSC must reflect in WMS, and vice versa.
- Batch tracking, expiry dates, and UOM must remain consistent across all systems.