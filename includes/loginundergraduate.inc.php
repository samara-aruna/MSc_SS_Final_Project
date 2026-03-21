<?php
  if(isset($_POST["submit"]))
  {
   if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token'])) {
        header("Location: ../loginundergraduate.php?error=csrfmissing");
        exit();
    }

    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        header("Location: ../loginundergraduate.php?error=csrfinvalid");
        exit();
    }

     $username = $_POST["uname"];
     $pwd = $_POST["pwd"];

     require_once 'dbh.inc.php';
     require_once 'functionundergraduate.inc.php';

     if(emptyInputslogin($username,$pwd) != false)
     {
        header('Location../loginundergraduate.php>error=emptyinput');
        exit();
     }
     loginUser($conn,$username,$pwd); 
  }   
  else
  {
    header('Location:../loginundergraduate.php');
    exit();
  }