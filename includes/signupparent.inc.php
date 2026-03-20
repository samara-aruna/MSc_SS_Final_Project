<?php
  if(isset($_POST["submit"]))
  {
     $fname = $_POST["fname"];
     $lname = $_POST["lname"];
     $username = $_POST["uname"];
     $email = $_POST["email"];
     $pwd = $_POST["pwd"];
     $pwdRepeat = $_POST["pwdrepeat"];

     require_once 'dbh.inc.php';
     require_once 'functionparent.inc.php';
     
     $emptyInput = emptyInputSignup($fname,$lname,$username,$email,$pwd,$pwdRepeat);
     $invalidUid = invalidUid($username);
     $invalidEmail = invalidEmail($email);
     $pwdMatch = pwdMatch($pwd,$pwdRepeat);
     $uidExists = uidExists($conn,$username,$email);

     if($emptyInput !== false)
     {
        header("Location:../parent.php?error=emptyinput");
        exit();
     }
     if($invalidUid !== false)
     {
        header("Location:../parent.php?error=invaliduid");
        exit();
     }
     if($invalidEmail !== false)
     {
        header("Location:../parent.php?error=invalidemail");
        exit();
     }
     if($pwdMatch !== false)
     {
        header("Location:../parent.php?error=passwordnotmatch");
        exit();
     }
     if($uidExists !== false)
     {
        header("Location:../parent.php?error=usernametaken");
        exit();
     }

     createUser($conn,$fname,$lname,$username,$email,$pwd);
}   
  else
  {
    header('Location:../loginparent.php');
    exit();
  }