<?php
    include_once 'header.php';
?>
    <div class="logo">
    <img src="logo.jpg" width="100" height="100">
    </div>
    <div class="form">
      <h1><center>AIS Learning</center> </h1>
    <form action="includes/loginteacher.inc.php" method="post">
    <div class="container">
    <label for="uname"><b>Username or Email</b></label>
    <input type="text" placeholder="Enter Username or email" name="uname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd">
        
    <button type="submit" name="submit">Login</button>

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
