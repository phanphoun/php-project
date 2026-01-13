# PHP-MySQL Authentication System

## 📁 File Structure

```
learn-php-mysql/
├── public/                          # Public web root
│   ├── index.php                    # Login/Register page
│   └── assets/                      # Static assets
│       ├── css/
│       │   └── login.css           # Login page styles
│       └── js/
│           └── script.js           # JavaScript functions
└── app/                             # Application logic
    ├── Controllers/                 # Controllers
    │   ├── AuthController.php       # Login/Register logic
    │   └── LogoutController.php     # Logout logic
    ├── Database/                     # Database configuration
    │   └── config.php              # Database connection
    └── Views/                        # View templates
        ├── admin/
        │   └── dashboard.php        # Admin dashboard
        └── user/
            └── dashboard.php        # User dashboard
```

## 🚀 Features

- **Secure Authentication**: SQL injection prevention, password hashing
- **Role-Based Access**: Admin and user dashboards
- **Modern UI**: Glassmorphism design with animations
- **Password Toggle**: Show/hide password functionality
- **Responsive Design**: Works on all devices
- **Session Management**: Secure session handling

## 🔧 Setup

1. Configure database in `Database/config.php`
2. Create `users_db` database with `users` table
3. Set web server document root to `learn-php-mysql/` directory

## 📋 Database Schema

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 🎯 Access Points

- **Login Page**: `http://localhost/learn-php-mysql/`
- **Admin Dashboard**: `Views/admin/dashboard.php`
- **User Dashboard**: `Views/user/dashboard.php`

## 🔐 Security Features

- Prepared statements for SQL injection prevention
- Password hashing with PHP's `PASSWORD_DEFAULT`
- Session validation on protected pages
- HTML output escaping with `htmlspecialchars()`
- Role-based access control
