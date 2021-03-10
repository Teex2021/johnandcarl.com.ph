
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" type="text/css" href="productlist.php">
</head>
<body>
  
</body>
</html>

<?php

  session_start();

  // Include Database Connection
  include "db.php";
  include "scripts.php";

  // Get Category From Database
  if(isset($_POST["category"])){
    $category_query = "SELECT * FROM tblcategories";
    $run_query = mysqli_query($con,$category_query);

    echo "
          <ul class='list-group'>
            <li class='list-group-item text-center' style='background-color: #161C33; color: white;' >Categories</li>
    ";

    if(mysqli_num_rows($run_query) > 0){
      while($row = mysqli_fetch_array($run_query)){
        $cid = $row["cat_id"];
        $cat_name = $row["cat_title"];

        echo "
        <a href='#' class='category' cid='$cid' style='color: #161C33; font-size: 14px;'><li class='list-group-item' style='background-color: #d2dae2;'> $cat_name </a></li>
        ";
      }
      echo "</ul>";
    }
  }

// Get brand From Database
if(isset($_POST["brand"])){
  $brand_query = "SELECT * FROM tblbrand";
  $run_query = mysqli_query($con,$brand_query);

  echo "
        <ul class='list-group'>
        <li class='list-group-item text-center' style='background-color: #161C33; color: white;' >Brands</li>
  ";

  if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
      $bid = $row["brand_id"];
      $brand_name = $row["brand_title"];

      echo "            
            <a href='#' class='selectBrand' bid='$bid' style='color: #161C33; font-size: 14px;'><li class='list-group-item' style='background-color: #d2dae2;'> $brand_name </a></li>
      ";
    }
    echo "</ul>";
  }
}

// Show All Products
if(isset($_POST["getProduct"])){

  $limit = 3;
  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = ($page - 1) * $limit;

  $product_query = "SELECT * FROM tblproduct LIMIT $start, $limit";
  $run_query = mysqli_query($con, $product_query);

  $result1 = $con->query("SELECT count(product_id) AS product_id FROM tblproduct ");
  $custCount = $result1->fetch_all(MYSQLI_ASSOC);
  $total = $custCount[0]['product_id'];
  $pages = ceil($total / $limit);

  $Previous = $page - 1;
  $Next = $page + 1;

  if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
      $pro_id = $row['product_id'];
      $pro_cat = $row['product_cat'];
      $pro_desc = $row['product_desc'];
      // $pro_brand = $row['product_brand'];
      $pro_title = $row['product_title'];
      $pro_price = $row['product_price'];
      $pro_image = $row['product_image'];

      echo "

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

    echo "
  
  <nav aria-label='Page navigation example'>
  <ul class='pagination justify-content-center'>
    <li class='page-item disabled'>
      <a class='page-link' href='productsX.php?page=$Previous' tabindex='-1'>Previous</a>
    </li>

  ";
  for($i = 1; $i <= $pages; $i++){

    echo "
    

        <li class='page-item'><a class='page-link' href='productsX.php?page=$i'>$i</a></li>        
    
    ";

  }

  echo "
  
      <li class='page-item'>
      <a class='page-link' href='productsX.php?page=$Next'>Next</a>
    </li>
    </ul>
    </nav>
  
  ";
  
  }

  

}

// Search Products From Database
if(isset($_POST["get_selected_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"]) ){

  if(isset($_POST["get_selected_Category"])){
    $id = $_POST["cat_id"];
    $sql = "SELECT * FROM tblproduct WHERE product_cat = '$id'";
  }else if(isset($_POST["selectBrand"])){
    $id = $_POST["brand_id"];
    $sql = "SELECT * FROM tblproduct WHERE product_brand = '$id'";
  }else{
    $keyword = $_POST["keyword"];
    $sql = "SELECT * FROM tblproduct WHERE product_keyword LIKE '%$keyword%'";
  }


  $run_query = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($run_query)) {
    $pro_id = $row['product_id'];
    $pro_cat = $row['product_cat'];
    $pro_brand = $row['product_brand'];
    $pro_desc = $row['product_desc'];
    $pro_title = $row['product_title'];
    $pro_price = $row['product_price'];
    $pro_image = $row['product_image'];

    echo "

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
}

if(isset($_POST["addToProduct"])){

  $p_id = $_POST["proId"];
  $user_id = $_SESSION["uid"];

  $sql = "SELECT * FROM tblcart WHERE p_id = '$p_id' AND user_id = '$user_id' ";
  $run_query = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run_query);

  if($count > 0){
    echo "
          <script>
          swal({
              icon: 'info',
              title: 'Product is already added',
              text: 'Add more on your cart!',
            });
          </script>
          ";
          exit();
    
  }else{
    $sql = "SELECT * FROM tblproduct WHERE product_id = '$p_id'";
    $run_query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($run_query);

    $id = $row["product_id"];
    $pro_name = $row["product_title"];
    $pro_image = $row["product_image"];
    $pro_price = $row["product_price"];

    $sql = "INSERT INTO `tblcart` (`id`, `p_id`, `ip_add`, `user_id`, 
    `product_title`, `product_image`, `qty`, `price`, `total_amount`) 
    VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";

    if(mysqli_query($con,$sql)){
        echo "
            <script>
            swal({
                icon: 'success',
                title: 'Product is added',
                text: 'Continue Shopping...',
              });
            </script>
            ";
            exit();
  
      // echo "Product is added...";
    }
  }

}

if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){

  $uid = $_SESSION["uid"];
  $sql = "SELECT * FROM tblcart WHERE user_id = '$uid'";

  $run_query = mysqli_query($con,$sql);
  $count = mysqli_num_rows($run_query);

  if($count > 0){

    $no = 1;

    while($row=mysqli_fetch_array($run_query)){
      $id = $row["id"];
      $pro_id = $row["p_id"];
      $pro_name = $row["product_title"];      
      $pro_image = $row["product_image"];
      $qty = $row["qty"];
      $pro_price = $row["price"];
      $total = $row["total_amount"];

      if(isset($_POST["get_cart_product"])){

        echo "      
        <div class='col-md-3 text-center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$no</div>
        <div class='col-md-3 text-center'><img src='image/$pro_image' class='img-fluid'></div>
        <div class='col-md-3 text-center'>$pro_name</div>
        <div class='col-md-3 text-center'>$pro_price</div>
        <div class='dropdown-divider'></div>
          ";

        $no = $no + 1;

      }else{

        echo "
        
        <div class='row'>
                    <div class='col-md-2'>
                        <a href='#' class='btn btn-danger' style='margin-left: -50px;'><i class='fas fa-trash'></i></a>
                        <a href='#' class='btn btn-primary'><i class='far fa-check-circle'></i></a>
                    </div>
                    <div class='col-md-4 text-center'><img src='image/$pro_image' class='img-fluid'></div>
                    <div class='col-md-2 text-center'>$pro_name</div>
                    <div class='col-md-1 text-center'><input type='text' class='form-control' Value='$qty'></div>
                    <div class='col-md-1 text-center'>$pro_price</div>
                    <div class='col-md-2 text-center'>$total</div>                
                </div>
        
        ";

      }

     

    }
  }

}

 ?>
