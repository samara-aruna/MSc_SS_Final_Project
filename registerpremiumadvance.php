<?php

include 'configpremium.php';

//Disable error display (production)
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Optional: log errors to file
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');

if(isset($_POST['submit'])){

   $name  = htmlspecialchars(trim($_POST['name']));
   $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if(!$email){
      $message[] = "Something went wrong. Please try again.";
   }

   $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $cpass = password_hash($_POST['cpassword'], PASSWORD_DEFAULT);

   
   $image = basename($_FILES['image']['name']);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $allowed_types = ['image/jpeg','image/png','image/jpg'];

   if(!in_array($_FILES['image']['type'], $allowed_types)){
      $message[] = 'Invalid image type!';
   }

  
   $stmt = $conn->prepare("SELECT id FROM user_form_advance WHERE email = ?");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $result = $stmt->get_result();

   if($result->num_rows > 0){
      $message[] = 'user already exist'; 
   }else{

      if($_POST['password'] != $_POST['cpassword']){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{

       
         $stmt = $conn->prepare("INSERT INTO user_form_advance (name, email, password, image) VALUES (?, ?, ?, ?)");
         $stmt->bind_param("ssss", $name, $email, $pass, $image);

         if($stmt->execute()){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:loginpremium.php');
            exit();
         }else{
            $message[] = 'registration failed!';
         }
      }
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="stylepremium.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="loginpremiumadvance.php">login now</a></p>
   </form>

</div>

</body>
</html>