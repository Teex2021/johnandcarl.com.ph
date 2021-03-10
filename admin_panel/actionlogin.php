<?php

// Include Database Connection
  include "../db.php";

session_start();

if(isset($_POST['userLogin'])){

$u_name = mysqli_real_escape_string($con,$_POST["username"]);
// $password = $_POST["userpassword"];
$password = sha1($con->real_escape_string($_POST["userpassword"]));

$sql = "SELECT * FROM tbl_administrator WHERE username = '$u_name' AND password = '$password'";
$run_query = mysqli_query($con,$sql);
$count = mysqli_num_rows($run_query);

if($count == 1){  

  $row = mysqli_fetch_array($run_query);
  $_SESSION["uid"] = $row["id"];
  $_SESSION["name"] = $row["name"];
    echo "user";
}

}

?>