
<?php

include 'configpremium.php';
session_start();

if(isset($_POST['submit'])){

$email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']), ENT_QUOTES, 'UTF-8');
$pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select = mysqli_query($conn, "SELECT * FROM `user_form_advance` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:homepremiumadvance.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="stylepremium.css">

</head>
<body>
<div class="logo">
 <img src="logo.jpg" width="100" height="100">
</div>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>ASI login</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="login now" class="btn">
      <a href="first.php"><input type="buttom" name="home" value="Home page" class="btn"></a>
      <p>don't have an account? <a href="registerpremiumadvance.php">regiser now</a></p>
   </form>

</div>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/80ac50c3-06da-4368-8dd7-df91fbc54ce3/webchat/config.js" defer></script>
</body>
</html>