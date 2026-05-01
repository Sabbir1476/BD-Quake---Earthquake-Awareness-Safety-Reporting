<?php
// ==============================================
// CONFIGURATION FILE FOR BD Quake Safety SYSTEM
// ==============================================

define('BASE_URL', 'http://localhost:8000');

define('APP_ROOT', dirname(__DIR__) . '/app');
define('VIEW_PATH', APP_ROOT . '/views');

// ==============================================
// 🛢 DATABASE CONFIGURATION
// ==============================================

define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_db_username');
define('DB_PASS', 'your_db_password');

// ==============================================
// 🔧 Error Handling & Default Settings
// ==============================================

date_default_timezone_set('Asia/Dhaka');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
