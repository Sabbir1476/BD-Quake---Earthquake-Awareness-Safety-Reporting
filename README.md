# 🌏 BD Quake Safety — Bangladesh Earthquake Safety Portal

A web-based earthquake safety and community response platform built for Bangladesh. It helps citizens report unsafe buildings, find emergency shelters, share earthquake experiences, and access safety guidelines — all in one place.

---

## 🚀 Live Demo

🔗 [https://bdquake.rf.gd/public](https://bdquake.rf.gd/public)

---

## ✨ Features

- **🏚️ Unsafe Building Reports** — Users can report structurally unsafe buildings with location details and photo uploads
- **🏥 Emergency Shelters & Hospitals** — Browse and filter emergency shelters and hospitals by district
- **📳 "I Felt It" Reports** — Submit and view community earthquake felt-reports with intensity and description
- **💬 Community Forum** — Post, edit, and delete forum discussions related to earthquake preparedness
- **📋 Safety Guidelines** — Admin-managed earthquake safety guidelines for the public
- **ℹ️ Info & FAQ** — Frequently asked questions and emergency contact information
- **🔐 User Authentication** — Secure registration and login with role-based access (Admin / User)

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP 8 (MVC Architecture) |
| Database | MySQL (PDO) |
| Frontend | HTML5, CSS3, JavaScript |
| Hosting | InfinityFree |
| Version Control | Git / GitHub |

---

## 📁 Project Structure

```
htdocs/
├── app/
│   ├── controllers/        # AuthController, ShelterController, ReportController, etc.
│   ├── models/             # User, Shelter, UnsafeBuilding, FeltReport, ForumPost, etc.
│   └── views/              # PHP view templates per feature
│       ├── auth/
│       ├── shelter/
│       ├── report/
│       ├── felt/
│       ├── forum/
│       ├── guideline/
│       ├── info/
│       ├── home/
│       └── layouts/        # Shared header & footer
├── config/
│   └── config.php          # Database & app configuration (not committed)
├── core/
│   ├── Controller.php      # Base controller class
│   └── Database.php        # PDO database wrapper
└── public/
    ├── index.php           # Application entry point (front controller)
    ├── css/
    ├── js/
    └── uploads/            # User-uploaded images
```

---

## ⚙️ Installation & Setup

### Prerequisites
- PHP 8.0+
- MySQL 5.7+
- A web server (Apache/Nginx) or XAMPP/WAMP locally

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/YOUR_USERNAME/bd-quake-safety.git
   cd bd-quake-safety
   ```

2. **Set up the database**
   - Create a MySQL database (e.g., `bdquake_db`)
   - Import the SQL schema file *(add your `.sql` file to the repo)*
   ```bash
   mysql -u root -p bdquake_db < database/schema.sql
   ```

3. **Configure the app**
   - Copy the example config file:
   ```bash
   cp config/config.example.php config/config.php
   ```
   - Open `config/config.php` and fill in your credentials:
   ```php
   define('BASE_URL', 'http://localhost/htdocs/public');
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'bdquake_db');
   define('DB_USER', 'your_db_username');
   define('DB_PASS', 'your_db_password');
   ```

4. **Point your web server to `/public`**
   - For XAMPP: place the project in `htdocs/` and visit `http://localhost/htdocs/public`

---

## 🔒 Security Notes

- `config/config.php` is listed in `.gitignore` and should **never** be committed to version control
- Passwords are hashed using PHP's `password_hash()` with `PASSWORD_DEFAULT`
- User input is validated server-side before any database operation

---

## 👥 User Roles

| Role | Permissions |
|------|------------|
| **Guest** | View shelters, guidelines, forum, felt reports |
| **User** | All of the above + submit reports, felt reports, and forum posts |
| **Admin** | Full access including managing shelters, guidelines, FAQs, and emergency contacts |

---

## 📸 Screenshots



---

## 🤝 Contributing

Contributions are welcome! Please open an issue first to discuss what you'd like to change.

1. Fork the project
2. Create your feature branch: `git checkout -b feature/my-feature`
3. Commit your changes: `git commit -m 'Add my feature'`
4. Push to the branch: `git push origin feature/my-feature`
5. Open a Pull Request

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

## 👨‍💻 Author

Made with ❤️ for Bangladesh earthquake safety awareness.
