<?php
    include_once 'header.php';
?>
     <div class="logo">
    <img src="logo.jpg" width="100" height="100">
    </div>
    <div class="form">
      <h1><center>AIS Learning New Appers Infomations</center> </h1>
    <form action="includes/infoparent.inc.php" method="post">
    <div class="container">        
        
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" >

    <label for="address"><b>Address/Country</b></label>
    <input type="text" placeholder="Enter Address/Counter" name="address" >

    <label for="reason"><b>Why do you select this online platform </b></label>
    <input type="text" placeholder="Enter reason" name="reason" >

    <label for="info"><b>How do you know this learning platform</b></label>
    <input type="text" placeholder="Enter your comment" name="info" >

    <label for="subject"><b>What is your favorite subject which is wish to follow</b></label>
    <input type="text" placeholder="Enter your comment" name="subject" >

        
    <button name="submit" type="submit">Register Now </button>
    

    
  </div>

  </div>
  
</form>

<?php 
    include_once 'footer.php';
?> 