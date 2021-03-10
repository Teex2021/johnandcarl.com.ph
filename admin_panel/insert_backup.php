<?php

// // connect database
// include "../db.php";

// // insert product into database
// if(isset($_POST["product_title"], $_POST["product_desc"], $_POST["product_price"]))
// {
//  $product_title = mysqli_real_escape_string($con, $_POST["product_title"]);
//  $product_desc = mysqli_real_escape_string($con, $_POST["product_desc"]);
//  $product_price = mysqli_real_escape_string($con, $_POST["product_price"]);
//  $query = "INSERT INTO tblproduct(product_title, product_desc, product_price) VALUES('$product_title', '$product_desc', '$product_price')";
//  if(mysqli_query($con, $query))
//  {
//   echo 'Data Inserted';
//  }
// }


// connect database
include "../db.php";

if(!empty($_POST))  
{  
     $product_title = mysqli_real_escape_string($con, $_POST["name"]);  
     $product_desc = mysqli_real_escape_string($con, $_POST["description"]);  
     $product_price = mysqli_real_escape_string($con, $_POST["price"]);  

     if($_POST["product_id"] != '')  
     {  
          $query = "  
          UPDATE tblproduct   
          SET product_title='$product_title',   
          product_desc='$product_desc',   
          product_price='$product_price',   
          WHERE product_id='".$_POST["product_id"]."'";   

               
          if(mysqli_query($con, $query))
          {
               echo 'Data Inserted';
          }
     }  
     else  
     {  
          $query2 = "  
          INSERT INTO tblproduct(product_title, product_desc, product_price)  
          VALUES('$product_title', '$product_desc', '$product_price');  
          ";   
                                   
          if(mysqli_query($con, $query2))
          {
               echo 'Data Inserted';
          }
     } 
}
?>