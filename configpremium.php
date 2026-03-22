<?php
require_once __DIR__ . '/.env.php';

$conn = mysqli_connect(DB_HOST, DB_USER_PREMIUM, DB_PASS_PREMIUM, DB_NAME_PREMIUM);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>