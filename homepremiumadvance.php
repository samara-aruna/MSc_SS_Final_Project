<?php

include 'configpremium.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:loginpremiumadvance.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:loginpremiumadvance.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="stylepremium.css">

</head>
<body>
<div class="logo">
 <img src="logo.jpg" width="100" height="100">
</div>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form_advance` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile_premiumadvance.php" class="btn">update profile</a>
      <a href="homepremiumadvance.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <a href="indexAlevel.php" class="btn"> Cousers </a>
      <p>new <a href="loginpremiumadvance.php">login</a> or <a href="registerpremiumadvance.php">register</a></p>
   </div>

</div>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/80ac50c3-06da-4368-8dd7-df91fbc54ce3/webchat/config.js" defer></script>

</body>
</html>