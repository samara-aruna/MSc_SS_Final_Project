
<?php
    include_once 'header.php';
?>
    <div class="logo">
    <img src="logo.jpg" width="100" height="100">
    </div>
    <div class="form">
      <h1><center>AIS Learning</center> </h1>
    <form action="includes/login.inc.php" method="post">
    <div class="container">
    <label for="uname"><b>Username or Email</b></label>
    <input type="text" placeholder="Enter Username or email" name="uname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd">
        
    <button type="submit" name="submit">Login</button>
    <!-- Google Login Button -->
     <a href="google-login.php" style="display:block; text-align:center; margin-top:10px; padding:10px; background-color:#4285F4; color:white; text-decoration:none; border-radius:5px; font-size:15px;">
    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" style="width:20px; vertical-align:middle; margin-right:8px;">
    Login with Google
</a>

    <?php
       if(isset($_GET["error"]))
       {
         if($_GET["error"] == "emptyinput")
         {
           echo '<div class = "error"> Fill the all fields before registration </div>';
         }
       
        elseif($_GET["error"] == "wronglogin")
        {
         echo '<div class = "error">Invalid Details!</div>';
        }
        elseif($_GET["error"] == "stmtfailed")
        {
         echo '<div class = "error">Some thing went wrong!</div>';
        }
        elseif($_GET["error"] == "none")
        {
         echo '<div class = "error">Your account is successfully created.</div>';
        }
      
       }
    ?>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  

  </div>
  
</form>



<?php 
    include_once 'footer.php';
?> 