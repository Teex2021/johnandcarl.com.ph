<?php 

// connect database
include "../db.php";

if(isset($_POST["product_id"]))  
{  
     $query = "SELECT * FROM tblproduct WHERE product_id = '".$_POST["product_id"]."'";  
     $result = mysqli_query($con, $query);  
     $row = mysqli_fetch_array($result);  
     echo json_encode($row);  
} 

?>