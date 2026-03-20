<?php
  if(isset($_POST["submit"]))
  {
     $name = $_POST["name"];
     $address = $_POST["address"];
     $reason = $_POST["reason"];
     $info = $_POST["info"];
     $subject = $_POST["subject"];
     

     require_once 'dbh.inc.php';
     require_once 'functioninfoordinary.inc.php';
     
     /*$emptyInput = emptyInputSignup($fname,$lname,$username,$email,$pwd,$pwdRepeat);
     $invalidUid = invalidUid($username);
     $invalidEmail = invalidEmail($email);
     $pwdMatch = pwdMatch($pwd,$pwdRepeat);
     $uidExists = uidExists($conn,$username,$email);

     if($emptyInput !== false)
     {
        header("Location:../signup.php?error=emptyinput");
        exit();
     }
     if($invalidUid !== false)
     {
        header("Location:../signup.php?error=invaliduid");
        exit();
     }
     if($invalidEmail !== false)
     {
        header("Location:../signup.php?error=invalidemail");
        exit();
     }
     if($pwdMatch !== false)
     {
        header("Location:../signup.php?error=passwordnotmatch");
        exit();
     }
     if($uidExists !== false)
     {
        header("Location:../signup.php?error=usernametaken");
        exit();
     }*/

     createUser($conn,$name,$address,$reason,$info,$subject);
}   
  else
  {
    header('Location:../loginordinary.php');
    exit();
  }