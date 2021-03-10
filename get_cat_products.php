<?php

  // Include Database Connection
  include "db.php";

  $db_query = "SELECT * FROM tblproduct";

  $query = mysqli_query($db_query);
  $rows = mysqli_num_rows($query);

  $page_rows = 10;

  $last = ceil($rows/$page_rows);
  if($last < 1){
      $last = 1;
  }
  $loadData = 1;
  if(isset($_REQUEST['pn'])){
      $loadData = preg_replace('#[^0-9]#','', $_REQUEST['pn']);
  }
  if($loadData < 1){
      $loadData = 1;
  }else if($loadData > $last){
      $loadData = $last;
  }

  $limit = 'LIMIT'.($loadData - 1) * $page_rows .',' .$page_rows;

  $sql = $db_query."limit";
  $resResults = mysqli_query($sql);

  $textLine2 = "Page <br>$loadData</b> of <b>$last</b>";
  $paginationlinks = '';

  if($last != 1){
      if($loadData > 1){
          $previous = $loadData - 1;
          $paginationlinks .='<span onclick="load_product_data('.$previous.')">Previous</span> &nbsp; &nbsp; ';

          for($i = $loadData-4; $i < $loadData; $i++){
              if($i > 0){              
              $paginationlinks .='<span onclick="load_product_data('.$i.')">'.$i.'</span> &nbsp; ';
            }
          }
      }

  $paginationlinks .= ''.$loadData.' &nbsp; ';

  for($i = $loadData+1; $i <= $last; $i++){
      $paginationlinks .= '<span onclick="load_product_data('.$i.')">'.$i.'</span>  &nbsp; ';
        if($i >= $loadData+4){
            break;
        }
  }
  if($loadData != $last){
    $next = $loadData + 1;
    $paginationlinks .=' &nbsp; &nbsp; <span onclick="load_product_data('.$next.')">Next</span> ';
  }
}


while($row = mysqli_fetch_array($resResults) )
{
  // echo $row['product_id'] . ' ' . $row['product_desc']. '<br>';
    $pro_id = $row['product_id'];            
    $pro_desc = $row['product_desc'];
    $pro_price = $row['product_price'];
    $pro_image = $row['product_image'];
    
           echo 
             "
            <div class='slider-box'>
            <p class='time'>Sale</p>
            <div class='img-box'>
            <img class='img-fluid' src='image/$pro_image' style='width: 170px;'>
            </div> 
            <br>
            <h6>$pro_desc</h6> 
            <p>P$pro_price</p>
            <a href='#'><p class='details '><i class='fas fa-search'></i>Quick View</p></a>
            <button pid='$pro_id' class='btn cartbtn' id='product' class='Add_To_Cart'>Add To Cart</button>
            </div>
            ";   
}

$strHTML .='<div id="pagination_controls">'.$paginationlinks.'</div>'.$textLine2;
echo $strHTML;

?>