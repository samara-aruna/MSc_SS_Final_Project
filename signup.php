<?php
    include_once 'header.php';
?>

    <div class="logo">
    <img src="logo.jpg" width="100" height="100">
    </div>
    <div class="form">
      <h1><center>AIS Learning</center> </h1>
    <form action="includes/signup.inc.php" method="post">
    <div class="container">        
        
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" >

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" >

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" >

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" >

    <label for="psw"><b>Re-Enter Password</b></label>
    <input type="password" placeholder="Re-enter Password" name="pwdrepeat">

        
    <button name="submit" type="submit">Register  </button>
    
    <?php
       if(isset($_GET["error"]))
       {
         if($_GET["error"] == "emptyinput")
         {
           echo '<div class = "error"> Fill the all fields before registration </div>';
         }
       
        elseif($_GET["error"] == "invaliduid")
        {
         echo '<div class = "error">Invalid Username!</div>';
        }
        elseif($_GET["error"] == "invalidemail")
        {
         echo '<div class = "error">Invalid Email!</div>';
        }
        elseif($_GET["error"] == "passwordnotmatch")
        {
         echo '<div class = "error">Password do not match</div>';
        }
        elseif($_GET["error"] == "stmtfailed")
        {
         echo '<div class = "error">Some thing went wrong!</div>';
        }
        elseif($_GET["error"] == "none")
        {
         echo '<div class = "error">Your account is successfully created.</div>';
        }
        elseif($_GET["error"] == "usernametaken")
        {
         echo '<div class = "error">Username or Email has already used!</div>';
        }
      
       }
    ?>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>


  <p><center> Already have an account? <a href="login.php"> Login </a> </center></p>
  </div>
  
</form>

<?php 
    include_once 'footer.php';
?> 