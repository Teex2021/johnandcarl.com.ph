<?php

$connect = mysqli_connect("localhost", "root", "", "dbjandc");  

//  delete product from database table
if(isset($_POST["product_id"]))
{
 $query = "DELETE FROM tblproduct WHERE product_id = '".$_POST["product_id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>