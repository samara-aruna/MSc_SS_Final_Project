<?php
session_start();

if(isset($_POST["submit"]))
{
    //CSRF VALIDATION (IMPORTANT)
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token'])) {
        header("Location: ../login.php?error=csrfmissing");
        exit();
    }

    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        header("Location: ../login.php?error=csrfinvalid");
        exit();
    }

   
    unset($_SESSION['csrf_token']);

    //Get inputs safely
    $username = trim($_POST["uname"]);
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    //Validate empty input
    if(emptyInputslogin($username, $pwd) !== false)
    {
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    //Call login function (should use prepared statements inside)
    loginUser($conn, $username, $pwd); 
}
else
{
    header("Location: ../login.php");
    exit();
}