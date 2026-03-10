💊 PharmaLink OS v2.0

Intelligent Pharmacy Management & Business Analytics 

SuitePharmaLink OS is an advanced, data-driven pharmacy ecosystem engineered to streamline medical inventory, digital billing, and real-time business intelligence. Built with the cutting-edge Laravel 12 and reactive Alpine.js, it offers a premium glassmorphic interface designed for high-efficiency pharmaceutical operations.

✨ Key Features

🖥️ Reactive Analytics HubLive KPI Tracking: Real-time monitoring of Net Revenue, Sales Volume, and Critical Stock Alerts.Glassmorphic UI: A modern, professional design language that enhances user focus and reduces cognitive load.Intelligent Modals: State-driven Alpine.js popups for Top Selling analytics and Inventory warnings.

📦 Smart Inventory & Restock EngineOne-Click Bulk Restocking: Rapidly update quantities for all low-stock items from a single specialized interface.Automated Thresholds: Smart triggers for "Critical Stock" alerts when inventory dips below 10 units.New Entry Wizard: A dedicated, emerald-themed workflow for registering new medical arrivals with full attribute validation.

📅 Precision Expiry MonitoringTimeline-Based Sorting: Products are automatically prioritized by expiration proximity (Closest dates appear first).Dynamic Urgency Badging: Color-coded status indicators (Critical/Urgent/Stable) triggered based on remaining shelf life.

📊 Business Intelligence ReportsAutomated PDF Generation: Integrated DomPDF engine to generate clean, professional Weekly and Monthly audits.Financial Auditing: Comprehensive tracking of sales performance, order counts, and revenue growth.

🛠️ Technical StackBackend: PHP 8.4+ / Laravel 12 (Service Layer Architecture)Frontend: Tailwind CSS (Custom Config) & Alpine.jsDatabase: MySQL 8.0 / MariaDBDocument Engine: Barryvdh Laravel-DomPDFAssets: Vite / Heroicons🚀 Installation Guide1. 

Clone the RepositoryBashgit clone https:/github.com/Nvd063/Digital-Receipt-System-Laravel.git

cd Digital-Receipt-System-Laravel

2. Install DependenciesBashcomposer install

npm install && npm run dev

3. Environment SetupBashcp .env.example .env

php artisan key:generate

4. Database ConfigurationUpdate your .env file with your local database credentials, then run migrations:Bashphp artisan migrate --seed

5. PDF Engine ConfigurationBashphp artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"

6. Launch ApplicationBashphp artisan serve

📸 Interface Preview

<img width="1910" height="915" alt="image" src="https://github.com/user-attachments/assets/3d58ae9e-8274-4e95-93e3-be36b4d7df39" />

<img width="1896" height="917" alt="image" src="https://github.com/user-attachments/assets/5d7fd55e-72ec-4708-8ed4-82a9a4731b6c" />

<img width="1853" height="900" alt="image" src="https://github.com/user-attachments/assets/2ce3acd0-a338-4626-a708-0daf7cfb95af" />

<img width="776" height="1077" alt="1" src="https://github.com/user-attachments/assets/82023e6d-9169-47cc-a71b-df3c6962c01e" />

<img width="752" height="1361" alt="screencapture-127-0-0-1-8000-view-receipt-REC-69AE9B10D4766-2026-03-09-15_06_37" src="https://github.com/user-attachments/assets/9f8e663f-f610-42fc-8af3-60544f6d5bcc" />

<img width="1789" height="849" alt="image" src="https://github.com/user-attachments/assets/b59b378d-c641-423c-8b77-b769dfb28719" />

<img width="1745" height="799" alt="image" src="https://github.com/user-attachments/assets/1f7797d2-443c-4c3d-9373-08f91d64c667" />

<img width="1660" height="877" alt="image" src="https://github.com/user-attachments/assets/7b6eccc2-e5e8-4121-9afd-61a635ac8617" />

