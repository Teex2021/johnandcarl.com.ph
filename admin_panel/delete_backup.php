<?php

// connect database
include "../db.php";

//  delete product from database table
if(isset($_POST["product_id"]))
{
 $query = "DELETE FROM tblproduct WHERE product_id = '".$_POST["product_id"]."'";
 if(mysqli_query($con, $query))
 {
  echo 'Data Deleted';
 }
}
?>