<?php
session_start();
include_once 'header.php';

// Generate CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<div class="logo">
    <img src="logo.jpg" width="100" height="100">
</div>

<div class="form">
<h1><center>AIS Learning</center></h1>

<form action="includes/login.inc.php" method="post">

    <!--CSRF TOKEN-->
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

<div class="container">
    <label><b>Username or Email</b></label>
    <input type="text" placeholder="Enter Username or email" name="uname">

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd">
        
    <button type="submit" name="submit">Login</button>

<?php
if(isset($_GET["error"]))
{
    if($_GET["error"] == "emptyinput"){
        echo '<div class="error"> Fill all fields </div>';
    }elseif($_GET["error"] == "wronglogin"){
        echo '<div class="error">Invalid Details!</div>';
    }elseif($_GET["error"] == "stmtfailed"){
        echo '<div class="error">Something went wrong!</div>';
    }elseif($_GET["error"] == "none"){
        echo '<div class="error">Your account is successfully created.</div>';
    }
}
?>

<label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
</label>

</div>
</form>
</div>

<?php include_once 'footer.php'; ?>