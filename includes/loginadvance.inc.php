<?php
  if(isset($_POST["submit"]))
  {
      //CSRF VALIDATION (IMPORTANT)
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token'])) {
        header("Location: ../loginadvance.php?error=csrfmissing");
        exit();
    }

    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        header("Location: ../loginadvance.php?error=csrfinvalid");
        exit();
    }


     $username = $_POST["uname"];
     $pwd = $_POST["pwd"];

     require_once 'dbh.inc.php';
     require_once 'functionadvance.inc.php';

     if(emptyInputslogin($username,$pwd) != false)
     {
        header('Location../loginadvance.php>error=emptyinput');
        exit();
     }
     loginUser($conn,$username,$pwd); 
  }   
  else
  {
    header('Location:../loginadvance.php');
    exit();
  }