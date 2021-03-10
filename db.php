<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "dbjandc";

// $servername = "	sql102.epizy.com";
// $username = "epiz_27827376";
// $password = "yHCnMmdNs7";
// $db = "epiz_27827376_jandcdb";

// $servername = "sql100.epizy.com";
// $username = "	epiz_27859005";
// $password = "CPsUoztSjVA";
// $db = "epiz_27859005_jandcdb";

// Create Connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection_aborted
if(!$con){
  die("Connection Failed:" . mysqli_connect_error());
}

 ?>
