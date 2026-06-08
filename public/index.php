<?php
// Simple connection test to verify the stack works
$db_host = getenv('DB_HOST') ?: 'database';
$db_port = (int)(getenv('DB_PORT') ?: 3306);
$db_name = getenv('DB_NAME') ?: 'spacerunner';
$db_user = getenv('DB_USER') ?: 'spacerunner';
$db_pass = getenv('DB_PASSWORD') ?: 'spacerunner';

echo "<h1>LEMP Stack Status</h1>";

try {
    $dsn = "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4";
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 2
    ]);
    echo "<p style='color: green;'>✔ Database connection successful!</p>";
} catch (PDOException $e) {
    echo "<p style='color: red;'>✘ Database connection failed: " . htmlspecialchars($e->getMessage()) . "</p>";
}

echo "<hr>";
phpinfo();