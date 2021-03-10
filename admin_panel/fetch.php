<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "dbjandc");  
 if(isset($_POST["product_id"]))  
 {  
      $query = "SELECT product_id,product_title,product_price,product_desc FROM tblproduct WHERE product_id = '".$_POST["product_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>