<?php
// Cloudways MySQL Database credentials
$host = "134.209.154.194"; // Change this to the actual PUBLIC HOST provided by Cloudways (NOT localhost!)
$port = 8082; // Or 8082 if Cloudways allows custom port (rare)
$dbname = "dvztwxkvwg";
$username = "dvztwxkvwg";
$password = "3uFknydBK4";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    global $pdo;

    echo "✅ Connected successfully!";
} catch (PDOException $e) {
    die("❌ Database connection failed: " . $e->getMessage());
}
?>
