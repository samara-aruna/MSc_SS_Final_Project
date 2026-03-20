<?php
   /*function emptyInputSignup($fname,$lname,$username,$email,$pwd,$pwdRepeat)
   {
    $result;

    if(empty($fname) || empty($lname) || empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat))
    {
    
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
   {
    $result;

    if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
    
        $result = true;
    }
    else
    {
        $result = false; 
    }
    return $result;
}

function invalidEmail($email)
   {
    $result;

    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
    
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdRepeat)
   {
    $result;

    if($pwd !== $pwdRepeat)
    {
    
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function uidExists($conn,$username,$email)
{
    $sql = "SELECT * FROM learners WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location:../signup.php?error=stmtfaild");
        exit();
    }

mysqli_stmt_bind_param($stmt,"ss",$username,$email);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData))
{
    return $row;
}
else
{
    return false;
}
mysqli_stmt_close($stmt);
}*/

function createUser($conn,$name,$address,$reason,$info,$subject)
{
    $sql = "INSERT INTO knowledge (name,address,reason,how_know,subject) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location:../undergraduate.php?error=stmtfaild");
        exit();
    }

    //$hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$name,$address,$reason,$info,$subject);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../undergraduate.php?error=none");
    exit();
}

/*function emptyInputslogin($username,$pwd)
   {
    $result;

    if(empty($username) || empty($pwd))
    {
    
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function loginUser($conn,$username,$pwd) 
{
    $uidExists = uidExists($conn,$username,$username);
    if($uidExists === false)
    {
        header("Location:../signup.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if($checkPwd === false)
    {
        header("Location:../login.php?error=wrongloging");
        exit();
    }
    else if($checkPwd === true)
    {
        session_start();
        $_SESSION["userId"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["username"] = $uidExists["usersFname"];
        header("Location:../index.php");
        exit();
    }
}*/

