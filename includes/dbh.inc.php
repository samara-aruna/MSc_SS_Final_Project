<?php
  $serverName = "localhost";
  $dbUsername = "Learners";
  $dbpassword = "Hn2ern(fklrtwS06";
  $dbName = "Learners_Login";

  $conn = mysqli_connect($serverName,$dbUsername,$dbpassword,$dbName);

  if(!$conn)
  {
    die("Connection failed :".mysqli_connect_error());
  }