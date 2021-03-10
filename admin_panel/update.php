<?php
// connect database
include "../db.php";


if(isset($_POST["product_id"]) != '')  
{  

    $product_id = mysqli_real_escape_string($con, $_POST["product_id"]);
    $product_title = mysqli_real_escape_string($con, $_POST["name"]);
    $product_desc = mysqli_real_escape_string($con, $_POST["description"]);
    $product_price = mysqli_real_escape_string($con, $_POST["price"]);

    $query = "UPDATE tblproduct SET product_title='$product_title',product_desc='$product_desc',product_price='$product_price' WHERE product_id = '$product_id'";
    if(mysqli_query($con, $query))
    {
        echo 'Data Updated';
    }
}


// if(isset($_POST["id"]))
// {
//  $value = mysqli_real_escape_string($con, $_POST["value"]);
//  $query = "UPDATE tblproduct SET ".$_POST["column_name"]."='".$value."' WHERE product_id = '".$_POST["id"]."'";
//  if(mysqli_query($con, $query))
//  {
//   echo 'Data Updated';
//  }
// }
?>