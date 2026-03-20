<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
.content
{
  margin:20px;
}
/* Css for my login form */
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.form
{
  width:60%;
  margin-left:auto;
  margin-right:auto;
  
}

.error 
{
  color:red;
  text-align:center;
  padding:12px;
  border-left-style:solid;
  border-right-style:solid;
  border-top-style:solid;
  border-bottom-style:solid;
  font-size:20px;
  font-weight:bold;
  margin-bottom:10px;
}
body
{
  background-image:url("pexels-andrea-piacquadio-3771074.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  animation:transitionIn 4s;
  background-attachment:fixed;

}
@keyframes transitionIn
{
	from
	{
		opacity:0;
		transform:rotateX(-10deg);
	}
	to
	{
		opacity:1;
		transform:rotateX(0);
	}
}

.logo
{
	border-top-left-radius:20px;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
  overflow: hidden;
  opacity: 0.5;
}
.course
{
  text-decoration:none;
  color:inherit;
  text-align:center;
  border-top-style:solid;
  border-bottom-style:solid;
  border-left-style:solid;
  border-right-style:solid;
  border-radius:50Px;
	box-shadow: inset 0 0 0 50px #116530;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learners_Login</title>
</head>
<body>
  
<ul>
  <li><a class="active" href="first.php">Home</a></li>
  <!--<li style ="float:right"> <a href="login.php"> Login</a></li>-->
  
  <?php 
    if(isset($_SESSION["username"]))
    {
        echo '<li style="float:right"><a href="includes/logout.inc.php"> Logout </a></li>';
        echo '<li style="float:right"><a href="#">'.$_SESSION["username"].'</a></li>';
        //After build profile page we can add the link to th "#" point.
    } 
    else
    {
        echo '<li style="float:right"><a class="active" href="login.php"> login </a>';
        
    }?>

  </li>
</ul>
    <div class="content">
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/80ac50c3-06da-4368-8dd7-df91fbc54ce3/webchat/config.js" defer></script>
</body>