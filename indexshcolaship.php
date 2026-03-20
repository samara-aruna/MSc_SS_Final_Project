
<?php
    include_once 'header.php';
?>
    
    <h1> <div class="logo">
    <img src="logo.jpg" width="100" height="100">
    </div>Hello <!--?php
    if(isset($_SESSION["username"]))
    {
        echo $_SESSION["username"];
    } 
    else
    {
        echo 'user';
    }?-->
        Welcome to AIS Online Learning Platform </h1>
        <br><br><br>

        <h2><center>Welcome to our AIS Online Learning Platform! We're thrilled to have you embark on<br> this educational journey with us. Here, you'll find a dynamic and interactive<br> environment designed to enhance your learning experience. Whether you're here to<br> acquire new skills, deepen your knowledge, or explore exciting subjects, our platform<br> offers a wealth of resources to support your academic endeavors. Get ready to<br> engage with expertly crafted courses, connect with fellow learners, and access a<br> world of knowledge at your fingertips. We're committed to providing you with a rich<br> and rewarding learning experience, and we look forward to accompanying you on your path to success. Happy learning!</center></h2>
        <h2><center> <a href="coursepageshcolaship.php" class="course"> Courses </a></center></h2>
        <h2><center> <a href="library.php" class="course">AIS Library </a></center></h2>
<?php
    include_once 'footer.php';
?> 
