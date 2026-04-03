<?php
// Security Fix: Removed hardcoded database credentials from this file
// Credentials are now stored securely in .env.php configuration file
// .env.php is excluded from version control via .gitignore
// Previously contained hardcoded password: $dbpassword = "Hn2ern(fklrtwS06"
// Fix addresses OWASP A05:2021 - Security Misconfiguration
require_once __DIR__ . '/../.env.php';

$serverName = DB_HOST;
$dbUsername = DB_USER;
$dbpassword = DB_PASS;
$dbName     = DB_NAME;

$conn = mysqli_connect($serverName, $dbUsername, $dbpassword, $dbName);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>