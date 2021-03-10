
  <?php  
 if(isset($_POST["product_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "dbjandc");  
      $query = "SELECT * FROM tblproduct WHERE product_id = '".$_POST["product_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Product Name</label></td>  
                     <td width="70%">'.$row["product_title"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Description</label></td>  
                     <td width="70%">'.$row["product_desc"].'</td>  
                </tr>                  
                <tr>  
                     <td width="30%"><label>Price</label></td>  
                     <td width="70%">'.$row["product_price"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Image</label></td>  
                     <td width="70%"><img class="img-fluid" src="data:image;base64,'.base64_encode($row['product_image']).'" alt="image"></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>