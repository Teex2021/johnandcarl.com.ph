<?php  
 $connect = mysqli_connect("localhost", "root", "", "dbjandc");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
      $description = mysqli_real_escape_string($connect, $_POST["description"]);  
      $price = mysqli_real_escape_string($connect, $_POST["price"]);    


      if($_POST["product_id"] != '')  
      {                  
        $query = "  
        UPDATE tblproduct   
        SET product_title='$name',   
        product_desc='$description',   
        product_price='$price'  
        WHERE product_id='".$_POST["product_id"]."'";                
      }  
      else  
      {  
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $query = "  
        INSERT INTO tblproduct(product_title, product_desc, product_price, product_image)  
        VALUES('$name', '$description', '$price', '$file');  
        ";           
      }  
     $result = mysqli_query($connect, $query);  
 }
 ?>