<?php
  if(isset($_POST["submit"]))
  {
     $username = $_POST["uname"];
     $pwd = $_POST["pwd"];

     require_once 'dbh.inc.php';
     require_once 'functionparent.inc.php';

     if(emptyInputslogin($username,$pwd) != false)
     {
        header('Location../loginparent.php>error=emptyinput');
        exit();
     }
     loginUser($conn,$username,$pwd); 
  }   
  else
  {
    header('Location:../loginparent.php');
    exit();
  }