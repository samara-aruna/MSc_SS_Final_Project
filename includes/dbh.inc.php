<?php
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