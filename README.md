# Hometeq Product Store

A robust and user-friendly product store web application designed to offer a seamless shopping experience. Developed using PHP as the server-side scripting language, this project efficiently connects with MySQL databases to ensure secure and dynamic data handling.

## Overview

Hometeq is a complete e-commerce solution that provides customers with an intuitive interface for browsing products, managing shopping baskets, and processing orders. The application features user authentication, session management, and a comprehensive product catalog with shopping cart functionality.

## Project Structure

```
Hometeq/
├── images/                    # Product and UI images
├── basket.php                 # Shopping basket page
├── bgimage.jpg               # Background image
├── clearbasket.php           # Clear basket functionality
├── db.php                    # Database connection configuration
├── detectlogin.php           # Login detection and session handling
├── footer.html               # Footer template
├── headfile.html             # Header template
├── index.php                 # Main homepage
├── login.php                 # User login page
├── login_process.php         # Login processing logic
├── logout.php                # User logout functionality
├── mystylesheet.css          # Main stylesheet
├── prodbuy.php              # Product purchase page
├── signup.php               # User registration page
├── signup_process.php       # Registration processing logic
└── README.md
```

## Dependencies

- **PHP**: Version 7.4 or higher
- **MySQL**: Version 5.7 or higher
- **Web Server**: Apache or Nginx
- **XAMPP/WAMP/MAMP**: For local development (recommended)

## Installation and Setup

### Local Development Setup

1. **Install XAMPP/WAMP/MAMP:**
   - Download and install XAMPP, WAMP, or MAMP for your operating system
   - Start Apache and MySQL services

2. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/hometeq.git
   ```

3. **Move to web directory:**
   ```bash
   # For XAMPP
   cp -r hometeq/ C:/xampp/htdocs/
   
   # For WAMP
   cp -r hometeq/ C:/wamp/www/
   
   # For MAMP
   cp -r hometeq/ /Applications/MAMP/htdocs/
   ```

4. **Database Setup:**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `hometeq`
   - Import the database schema (if provided)

5. **Configure Database Connection:**
   - Edit `db.php` file with your database credentials:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "hometeq";
   ```

## How to Run

### Local Development
1. **Start your local server:**
   - Start XAMPP/WAMP/MAMP services
   - Ensure Apache and MySQL are running

2. **Access the application:**
   ```
   http://localhost/hometeq/
   ```

### Production Deployment
1. Upload files to your web hosting server
2. Configure database connection in `db.php`
3. Set appropriate file permissions
4. Access your domain URL

## Features

### User Management
- **User Registration** - New customer account creation
- **User Login/Logout** - Secure authentication system
- **Session Management** - Persistent user sessions
- **Login Detection** - Automatic session validation

### Product Management
- **Product Catalog** - Browse available products
- **Product Details** - Detailed product information
- **Product Images** - Visual product gallery

### Shopping Experience
- **Shopping Basket** - Add products to cart
- **Basket Management** - Update quantities, remove items
- **Clear Basket** - Remove all items from cart
- **Product Purchase** - Complete order processing

### User Interface
- **Responsive Design** - Mobile-friendly interface
- **Custom Styling** - Professional appearance with CSS
- **Template System** - Reusable header and footer components

## File Descriptions

### Core Files
- **`index.php`** - Main homepage displaying products and navigation
- **`db.php`** - Database connection and configuration
- **`mystylesheet.css`** - Main stylesheet for visual design

### Authentication
- **`login.php`** - User login form
- **`login_process.php`** - Handles login validation and session creation
- **`signup.php`** - User registration form
- **`signup_process.php`** - Processes new user registration
- **`logout.php`** - Terminates user session
- **`detectlogin.php`** - Session validation and login detection

### Shopping Cart
- **`basket.php`** - Shopping cart display and management
- **`clearbasket.php`** - Removes all items from shopping cart
- **`prodbuy.php`** - Product purchase and order processing

### Templates
- **`headfile.html`** - Common header template
- **`footer.html`** - Common footer template
- **`bgimage.jpg`** - Background image for design

## Database Schema

The application uses a MySQL database with tables for:
- **Users** - Customer account information
- **Products** - Product catalog data
- **Orders** - Purchase history
- **Cart Items** - Shopping basket contents

## Security Features

- **Session Management** - Secure user session handling
- **Input Validation** - Protection against SQL injection
- **Password Security** - Secure password handling
- **Login Detection** - Automatic session validation

## Usage Examples

### User Registration
1. Navigate to `signup.php`
2. Fill in the registration form
3. Submit to create a new account

### Adding Products to Cart
1. Browse products on the homepage
2. Select desired products
3. Items automatically added to the basket

### Checkout Process
1. View basket contents
2. Proceed to `prodbuy.php`
3. Complete purchase transaction

