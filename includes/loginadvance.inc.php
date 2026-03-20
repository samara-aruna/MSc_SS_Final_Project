<?php
  if(isset($_POST["submit"]))
  {
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