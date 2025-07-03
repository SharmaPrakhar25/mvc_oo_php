# 🍽️ MVC Diet Tracker Assignment

<div align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/MVC-Architecture-blue?style=for-the-badge" alt="MVC">
  <img src="https://img.shields.io/badge/API-REST-green?style=for-the-badge" alt="REST API">
</div>

## 📋 Project Overview

A clean, object-oriented PHP application built with the **MVC (Model-View-Controller)** architecture pattern. This RESTful API provides comprehensive backend functionality for user management and diet tracking, allowing users to register, authenticate, browse food items, and manage their personal nutrition data.

---

## 🚀 Personal Journey

> **💡 Author's Note:**  
> This project holds special significance as my **very first real-world assignment** in 2018. With zero prior experience in MVC architecture, I challenged myself to learn and implement this complete system over a single weekend. My passion for backend development and determination to make an impact drove me to build this project from scratch in just **2 days**. 
>   
> The result? This assignment landed me my first full-time job offer, proving that dedication and the willingness to learn can overcome any technical barrier.  
>   
> This project represents my journey from beginner to professional developer and showcases my commitment to learning, ability to deliver under pressure, and passion for backend engineering.

---

## ✨ Features

- 🔐 **User Authentication** - Secure registration and login system
- 📋 **Food Item Management** - Browse available food items
- 🥗 **Diet Tracking** - Add and remove items from personal diet
- 📊 **Diet Retrieval** - View complete diet history
- 🔄 **JSON API** - All responses in standardized JSON format
- ✅ **Input Validation** - Basic security and data integrity
- 📱 **RESTful Design** - Clean, predictable API endpoints

---

## 🛠️ Technology Stack

| Component | Technology |
|-----------|------------|
| **Language** | PHP (Object-Oriented) |
| **Architecture** | MVC (Model-View-Controller) |
| **Database** | MySQL |
| **API Format** | JSON REST API |
| **Server** | Apache/Nginx |

---

## 🚀 Quick Start

### Prerequisites
- PHP 7.0+ with MySQL support
- Web server (Apache/Nginx) or local development environment
- MySQL database server

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/SharmaPrakhar25/mvc_oo_php.git
   cd mvc_oo_php
   ```

2. **Set up your environment**
   - Place files in your web server's document root
   - Configure database credentials in config files
   - Ensure proper file permissions

3. **Database Setup**
   - Create a MySQL database
   - Run any provided SQL scripts to create tables
   - Update database connection settings

4. **Test the API**
   - Access endpoints via browser or API client
   - Use tools like Postman for testing

---

## 📖 API Documentation

### 🔐 Authentication

#### User Registration
```http
POST /signup.php
Content-Type: application/x-www-form-urlencoded

first_name=John&last_name=Doe&email=john@example.com&password=secret123&mobile=1234567890
```

#### User Login
```http
POST /index.php
Content-Type: application/x-www-form-urlencoded

email=john@example.com&password=secret123
```

### 🍎 Food Management

#### Get Food Items
```http
GET /food_item.php
```

#### Add Food to Diet
```http
POST /input_diet.php
Content-Type: application/x-www-form-urlencoded

email=john@example.com&food_item=apple&quantity=2
```

#### Remove Food from Diet
```http
POST /delete_diet.php
Content-Type: application/x-www-form-urlencoded

user_id=1&food_item_id=5
```

#### Get User's Diet
```http
GET /get_diet.php?email=john@example.com
```

### 📝 Response Format

All endpoints return JSON responses with consistent structure:
```json
{
  "status": "success|error",
  "code": 200,
  "message": "Operation completed successfully",
  "data": {}
}
```

---

## 🧪 Testing

### Manual Testing Checklist

- [ ] **Registration Flow**
  - [ ] Valid user registration
  - [ ] Duplicate email handling
  - [ ] Invalid input validation

- [ ] **Authentication Flow**
  - [ ] Successful login
  - [ ] Invalid credentials
  - [ ] Session management

- [ ] **Diet Management**
  - [ ] View food items
  - [ ] Add items to diet
  - [ ] Remove items from diet
  - [ ] Retrieve user diet

### Tools
- **Postman** - For API endpoint testing
- **cURL** - For command-line testing
- **Browser** - For GET endpoint testing

---

## 🔧 Configuration

### Database Configuration
Update your database connection settings in the configuration file:
```php
$host = 'localhost';
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';
```

### Server Requirements
- **PHP Version**: 7.0 or higher
- **Extensions**: MySQLi or PDO
- **Server**: Apache with mod_rewrite or Nginx

---

## 📁 Project Structure

```
mvc_oo_php/
├── 📁 controllers/     # Application logic
├── 📁 models/          # Data layer
├── 📁 views/           # Presentation layer
├── 📁 config/          # Configuration files
├── 📄 index.php        # Entry point
├── 📄 signup.php       # User registration
├── 📄 food_item.php    # Food management
├── 📄 input_diet.php   # Add diet items
├── 📄 delete_diet.php  # Remove diet items
├── 📄 get_diet.php     # Retrieve diet
└── 📄 README.md        # This file
```

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/amazing-feature`)
3. **Commit** your changes (`git commit -m 'Add amazing feature'`)
4. **Push** to the branch (`git push origin feature/amazing-feature`)
5. **Open** a Pull Request

---

## 📜 License

This project is open source and available under the **MIT License**. See the [LICENSE](LICENSE) file for more details.

---

## 📚 Version History

| Version | Date | Description |
|---------|------|-------------|
| **v1.0** | 2018 | Initial release with core functionality |
| | | • User registration and authentication |
| | | • Food item management |
| | | • Diet tracking system |

---

## 🔗 Links

- **Repository**: [GitHub](https://github.com/SharmaPrakhar25/mvc_oo_php)
- **Issues**: [Report Bug](https://github.com/SharmaPrakhar25/mvc_oo_php/issues)
- **Contact**: [Email](mailto:your-email@example.com)

---

<div align="center">
  <p>Built with ❤️ by <a href="https://github.com/SharmaPrakhar25">Prakhar Sharma</a></p>
  <p><em>My first step into the world of backend development</em></p>
</div> 
