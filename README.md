
## Point Of Sale (POS) System

This Point of Sale (POS) system is a comprehensive and user-friendly web application built with Laravel, designed to streamline and optimize retail operations. With a fast and reliable interface, customizable theming, and intuitive navigation, users can effortlessly manage essential business activities.

### Key Features:

    Inventory Management: Organize and track products and categories efficiently.
    Member and Supplier Management: Easily handle relationships with members and suppliers, storing critical contact details.
    Transaction Management: Manage active and new transactions with detailed reporting and oversight.
    Expenditure and Purchases Tracking: Record and analyze expenditures and purchases to monitor costs.
    Sales and Revenue Analytics: View a graphical representation of revenue trends and detailed sales reports.
    User Management and Roles: Control access levels for various users and assign specific roles as needed.
    Customizable Dashboard: Gain insights from analytics on total categories, products, members, suppliers, and more.
    Profile and POS Settings: Customize the POS system, including logo settings, theming options, and system configurations.
    Secure Authentication: Safeguard data access with secure authentication, along with profile editing options.

User Capabilities

Users can navigate this POS system effortlessly, managing day-to-day retail operations and accessing critical data for business growth. The streamlined experience is enhanced with customizable settings, making it an adaptable solution for any retail environment.


This POS system offers everything from basic inventory management to advanced analytics, ensuring users have the tools needed to make informed business decisions while enjoying a secure, fast, and customizable interface.

Login Credentials:

username: admin@gmail.com
password: 123

#### Clone Repository
```bash
git clone https://github.com/AqibUllah/pos.git
```

### Setup Aplikasi
```bash
composer install 
or
composer update
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```

Migrate database
```bash
php artisan migrate --seed
```

Generate key
```bash
php artisan key:generate
```
Run Development Server
```bash
php artisan serve
```

