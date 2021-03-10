<?php
  $conn = new mysqli("localhost", "root","","dbjandc");
  if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
  }
 ?>
