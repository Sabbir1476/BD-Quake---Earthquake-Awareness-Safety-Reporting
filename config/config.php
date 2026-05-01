<?php
// ==============================================
// CONFIGURATION FILE FOR BD Quake Safety SYSTEM
// ==============================================

// 🌐 Base URL of your hosted website
define('BASE_URL', 'http://localhost:8000');

// 🗂 Path Constants
define('APP_ROOT', dirname(__DIR__) . '/app');
define('VIEW_PATH', APP_ROOT . '/views');

// ==============================================
// 🛢 DATABASE CONFIGURATION (Local MySQL)
// ==============================================

// Local MySQL settings
define('DB_HOST', 'localhost');        // Local MySQL Hostname
define('DB_NAME', 'bdquake_db');       // Database Name
define('DB_USER', 'root');             // MySQL Username
define('DB_PASS', '123456789');        // MySQL Password

// ==============================================
// 🔧 Error Handling & Default Settings
// ==============================================

// Set default timezone (Bangladesh)
date_default_timezone_set('Asia/Dhaka');

// Display all errors in development mode (turn off in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ==============================================
// 🚀 Test Connection (Optional - Debug Mode)
// ==============================================

// Uncomment this block only if you need to test the connection manually
/*
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Database connected successfully!";
} catch (PDOException $e) {
    echo "❌ Database Connection Failed: " . $e->getMessage();
}
*/
?>
