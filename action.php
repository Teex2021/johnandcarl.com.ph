<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" contenkt="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- local css -->
    <link rel="stylesheet" type="text/css" href="css/product_list.css">
    <link rel="stylesheet" type="text/css" href="css/side_bar_design.css">

    <!-- boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <style>
    @media only screen and (max-width: 768px) {

        .product_container {
            margin-top: 70px;
        }

        .row_back,
        .bc_back {
            background-color: white;
        }
    }


    @media only screen and (max-width: 576px) {

        .slider-box {
            margin-left: 120px;
        }

    }
    </style>

</head>

<body>

    <script type="text/javascript" src="js/sweetalert.min.js"></script>

    <script>
    $("body").delegate(".show_selected_category", "click", function(e) {
        event.preventDefault();
        var pcid = $(this).attr('pcid');


        if (pcid == 1) {
            window.location.href = 'vinyl';
        } else if (pcid == 2) {
            window.location.href = 'ceramic';
        }
    });
    </script>

    <?php

  session_start();

  // include database connection
  include "db.php";

  // include style for action
  // include "scripts.php";

  // show categories in database table
  if(isset($_POST["category"]))
  {

    $category_query = "SELECT * FROM tblproductcoverage WHERE cat_id = 1";
    $run_query = mysqli_query($con,$category_query);

   
    echo "
    <div class='panel-group'>
      <div class='panel panel-default'>
        <div class='panel-heading '>
          <h5 class='text-center pt-2' style='color: white; height: 40px; background-color: #F15B28;'>
          CATEGORIES <i class='fas fa-bars'></i>
          </h5>
          <a data-toggle='collapse' href='#collapse1' class='text-white'>
          <h6 class='panel-title'>
          Floor & Wall Coverings
          </h6>
          </a>
          
        </div>
        <div id='collapse1' class='panel-collapse collapse '>
          <ul class='list-group'>     
    ";

    // style='border-radius: none; border: none; padding-bottom: 10px;'
    //  show Floor & Wall Coverings
    if(mysqli_num_rows($run_query) > 0)
    {
      while($row = mysqli_fetch_array($run_query))
      {
        $cid = $row["cat_id"];
        $pc_id = $row["pc_id"];

        $pcoverage_name = $row["product_coverage"];

          echo "
        
          <a href='#' class='show_selected_category' pcid='$pc_id' style='color: #161C33; font-size: 12px;'>
            <li class='list-group-item' >$pcoverage_name 
            </li>
            </a>
          ";
      } 
      
      

    echo "</ul></div>";

    //  show Bath & Sanitary Wares
    $category_query2 = "SELECT * FROM tblproductcoverage WHERE cat_id = 2";
    $run_query2 = mysqli_query($con,$category_query2);

    echo "

    <a data-toggle='collapse' href='#collapse2' class='text-white'>
    <h6 class='panel-title '>
    Bath & Sanitary Wares
    </h6>

    </a>      
    <div id='collapse2' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row2 = mysqli_fetch_array($run_query2))
    {
      $pcoverage_name2 = $row2["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name2 
        </li>
      </a>
      ";

    }

    echo "</ul></div>";
    

    //  show Plumbing & Fittings
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title '>
    Plumbing & Fittings
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";
   
    //  show Building & Construction
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title ' >
    Building & Construction
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";

    //  show Paints & Sundries
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title ' >
    Paints & Sundries
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";
    
    //  show Doors, Windows, Stairs & Moldings
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title ' >
    Doors, Windows, Stairs & Moldings
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";
    
    //  show Hardware
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title ' >
    Hardware
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";
    
    //  show Tools & Safety
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title ' >
    Tools & Safety
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";
    
    //  show Electrical & Appliances
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title ' >
    Electrical & Appliances
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";
    
    //  show Household & Furnitures
    $category_query3 = "SELECT * FROM tblproductcoverage WHERE cat_id = 3";
    $run_query3 = mysqli_query($con,$category_query3);

    echo "

    <a data-toggle='collapse' href='#collapse3' class='text-white'>
    <h6 class='panel-title' >
    Household & Furnitures
    </h6>

    </a>      
    <div id='collapse3' class='panel-collapse collapse'>
    <ul class='list-group'>

    ";

    
    while($row3 = mysqli_fetch_array($run_query3)){
      $pcoverage_name3 = $row3["product_coverage"];

      echo "
      
      <a href='#' class='category' style='color: #161C33; font-size: 12px;'>
        <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $pcoverage_name3 
        </li>
      </a>
      ";

    }
   
    echo "</ul></div>";    
  }
  }

// show brand from database 
if(isset($_POST["brand"])){
  $brand_query = "SELECT * FROM tblbrand";
  $run_query = mysqli_query($con,$brand_query);

  echo "
  <div class='panel-group mt-2'>
    <div class='panel panel-default'>
      <div class='panel-heading'>

        <a data-toggle='collapse' href='#collapse10' class='text-white'>
        <h5 class='panel_title_brand'>
        BRANDS
        </h5>
        </a>
        
      </div>
      <div id='collapse10' class='panel-collapse collapse'>
        <ul class='list-group'>
          
  ";
  if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
      $bid = $row["brand_id"];
      $brand_name = $row["brand_title"];

    echo "
        
    <a href='#' class='selectBrand' bid='$bid' style='color: #161C33; font-size: 13px;'>
    
    <li class='list-group-item' style='border-radius: none; border: none; padding-bottom: 10px;'> $brand_name 
    </li>
    </a>
    ";
  }
  echo "</ul></div></div>";
  }
}

// search & select products on database
if(isset($_POST["get_selected_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"]))
{
  
  // show selected item on database table
  if(isset($_POST["get_selected_Category"]))
  {
    
    
  }else if(isset($_POST["selectBrand"]))
  {
    $id = $_POST["brand_id"];
    $sql = "SELECT * FROM tblproduct WHERE product_brand = '$id'";
  }else
  {    

      $keyword = $_POST["keyword"];          

      $sql = "SELECT * FROM tblproduct WHERE product_keyword LIKE '%$keyword%' ORDER BY product_id DESC ";

      $run_query = mysqli_query($con, $sql);
      $count = mysqli_num_rows($run_query);

      if($count > 0)
      {
        while ($row = mysqli_fetch_array($run_query)) 
        {
  
  
            $pro_id = $row['product_id'];            
            $pro_desc = $row['product_desc'];
            $pro_price = $row['product_price'];
            $pro_image = base64_encode($row['product_image']);
    
            $pro_money = number_format($pro_price);
    
            echo 
            "
            <div class='slider-box' post style='display:none;'>
            <p class='time'></p>
            <div class='img-box'>
                <img class='img-fluid' src='data:image;base64,$pro_image' style='width: 170px;'>
            </div> 
                <br>
                <small class='text-primary'>$pro_desc</small> 
                <div class='row mx-auto action_btns'>
                                          
                    <div class='col-md-4'>
    
                        <button class='btn qv_btn rounded-circle' qvid='$pro_id' id='quick_view' data-toggle='modal' data-target='#pop1'>
                            <i class='bi bi-eye-fill' data-toggle='tooltip' data-placement='top' title='Quick View'></i>
                        </button>                                     
                    </div>
                    <div class='col-md-4'>                                            
                        <button pid='$pro_id' class='btn ac_btn rounded-circle'' id='product' data-toggle='tooltip' data-placement='top' title='Add to cart'>
                            <i class='bi bi-bag '></i>
                        </button>
                    </div>
                    <div class='col-md-4'>                                       
                        <button class='btn aw_btn rounded-circle'' id='heart' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
                            <i class='bi bi-suit-heart-fill '></i>
                        </button>
                    </div>                                            
                </div>                                
                <div class='back-drop'></div>
        </div>
            ";
        
          
    
        } 
        ?>
        <button id="load_more" class="btn mx-auto w-50">Load More</button>
        <?php
    }       
    else
    {
      echo "
      <div class='error_content text-center mx-auto pt-5'> 
      <i class='bi bi-search' style='color: gray; font-size: 50px;'></i>
        <h3 style='color: gray;'>Search No Result</h3>
        <h6 style='color: gray;'>We're sorry, We couldn't find what you are searching for!</h6>
      </div>      
      ";

    }
    
    ?>

    <?php } ?>

    <?php } ?>

    <?php
    // Add to product
    if(isset($_POST["addToProduct"]))
    {

      $p_id = $_POST["proId"];
      $user_id = $_SESSION["uid"];
      $sql = "SELECT * FROM tblcart WHERE p_id = '$p_id' AND user_id = '$user_id' ";

      // $sql = "SELECT * FROM tblcart WHERE p_id = '$p_id' ";
      $run_query = mysqli_query($con, $sql);
      $count = mysqli_num_rows($run_query);

      if($count > 0)
      {
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
      }else
      {
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

        if(mysqli_query($con,$sql))
        {
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
        }
      }
    }

    // show quick view of every product
    if(isset($_POST["show_quick_view"])){

    $p_id = $_POST["quick_id"];

    $product_query = "SELECT * FROM tblproduct WHERE product_id = $p_id";
    $run_query = mysqli_query($con, $product_query);

    if(mysqli_num_rows($run_query) > 0)
    {
    while($row = mysqli_fetch_array($run_query))
    {
    $pro_id = $row['product_id'];
    $pro_cat = $row['product_cat'];
    $pro_desc = $row['product_desc'];
    $pro_title = $row['product_title'];
    $pro_money = $row['product_price'];
    $pro_image = base64_encode($row['product_image']);

    echo "
    <div class='row'>
        <div id='img-container' class='col-md-6 d-flex justify-content-center'>            
            <img class='img-fluid' src='data:image;base64,$pro_image'>
        </div>

        <div class='col-md-6'>
            <br>
            <h3>$pro_desc</h3>
            <small class='text-muted'>stock available in: <u>puting kahoy silang, cavite</u> </small><br>
            <small class='text-muted'>current:</small><small class='text-success'> 13 stocks</small>
            <hr>
            <center class='text-success'>found your item? reach us on messenger located on the left corner of your screen</center>
        </div>
    </div>
    ";
    }
    // <button class='btn btn-outline-success'>Buy Now</button> &nbsp; &nbsp;
    // <button class='btn btn-danger'>Add to cart</button> &nbsp; &nbsp; <br><br>
    // <button class='btn quick_active_btn_wish'>
    //     <i class='bi bi-suit-heart-fill'></i> &nbsp;<small>Add to Wishlist</small>
    // </button>
    }

    }

    // show grid view
    if(isset($_POST["show_gridview"]))
    {

    // Include pagination library file
    include_once 'pagination.class.php';

    // Include database configuration file
    require_once 'db.php';

    // Set some useful configuration
    $baseURL = 'get_products/show_grid.php';
    $limit = 8;

    // Count of all records
    $query = $con->query("SELECT COUNT(*) as rowNum FROM tblproduct");
    $result = $query->fetch_assoc();
    $rowCount= $result['rowNum'];

    // Initialize pagination class
    $pagConfig = array(
    'baseURL' => $baseURL,
    'totalRows' => $rowCount,
    'perPage' => $limit,
    'contentDiv' => 'postContent'
    );
    $pagination = new Pagination($pagConfig);

    $product_query = "SELECT * FROM tblproduct ORDER BY product_id DESC LIMIT $limit";
    $run_query = mysqli_query($con, $product_query);

    if(mysqli_num_rows($run_query) > 0)
    {
    while($row = mysqli_fetch_array($run_query))
    {
    $pro_id = $row['product_id'];
    $pro_cat = $row['product_cat'];
    $pro_desc = $row['product_desc'];
    $pro_title = $row['product_title'];
    $pro_money = $row['product_price'];
    $pro_image = $row['product_image'];

    echo "
    <div class='slider-box post'>
        <p class='time'></p>
        <div class='img-box'>
            <img class='img-fluid' src='image/$pro_image' style='width: 170px;'>
        </div>
        <br>
        <small class='text-primary'>$pro_desc</small> 
        <div class='row mx-auto action_btns'>
                                  
            <div class='col-md-4'>

                <button class='btn qv_btn rounded-circle' qvid='$pro_id' id='quick_view' data-toggle='modal' data-target='#pop1'>
                    <i class='bi bi-eye-fill' data-toggle='tooltip' data-placement='top' title='Quick View'></i>
                </button>                                     
            </div>
            <div class='col-md-4'>                                            
                <button pid='$pro_id' class='btn ac_btn rounded-circle'' id='product' data-toggle='tooltip' data-placement='top' title='Add to cart'>
                    <i class='bi bi-bag '></i>
                </button>
            </div>
            <div class='col-md-4'>                                       
                <button class='btn aw_btn rounded-circle'' id='heart' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
                    <i class='bi bi-suit-heart-fill '></i>
                </button>
            </div>                                            
        </div>                                
        <div class='back-drop'></div>        
    </div>
    ";
    ?>

    <?php } ?>

    <!-- end of while & looping all products -->

    <div class="container-fluid all_pag_container pb-3">
        <div class="container pag_container d-flex justify-content-center">
            <div id="pagination_design">
                <?php      
                        echo $pagination->createLinks();
                    
  } 
 
 }?>

            </div>
        </div>
    </div> <!-- end of all_pag_container -->

    <?php
    // show list view
    if(isset($_POST["show_listview"]))
    {

    // Include pagination library file
    include_once 'pagination.class.php';

    // Set some useful configuration
    $baseURL = 'get_products/show_list.php';
    $limit = 8;

    // Count of all records
    $query = $con->query("SELECT COUNT(*) as rowNum FROM tblproduct");
    $result = $query->fetch_assoc();
    $rowCount= $result['rowNum'];

    // Initialize pagination class
    $pagConfig = array(
    'baseURL' => $baseURL,
    'totalRows' => $rowCount,
    'perPage' => $limit,
    'contentDiv' => 'postContent'
    );
    $pagination = new Pagination($pagConfig);

    $product_query = "SELECT * FROM tblproduct ORDER BY product_id DESC LIMIT $limit";
    $run_query = mysqli_query($con, $product_query);

    if(mysqli_num_rows($run_query) > 0)
    {
    while($row = mysqli_fetch_array($run_query))
    {
      $pro_id = $row['product_id'];
      $pro_cat = $row['product_cat'];
      $pro_desc = $row['product_desc'];
      $pro_title = $row['product_title'];
      $pro_money = $row['product_price'];
      $pro_image = $row['product_image'];

    echo "
    <div class='row grid_view d-flex justify-content-center'>
        <p class='time'></p>

        <div class='col-md-4 pt-3'>
            <div class='list_img_view'>
                <img class='img-fluid' src='image/$pro_image' style='width: 170px;'>
            </div>
        </div>

        <div class='col-md-4'>
            <br>
            <small class='text-primary'>$pro_desc</small>

        </div>
    </div>
    ";

    
    // <p class='mb-0'>&#8369;$pro_money</p>
    // <div class='mb-3'>
    //     <small>available:</small><small class='text-success'> 7 stocks</small>
    // </div>

    // <button pid='$pro_id' class='btn btn-success'><small><i class='bi bi-bag'></i>Add to cart</small></button>

    // <button class='btn btn-danger'><small><i class='bi bi-suit-heart-fill '></i>Add to Wishlist</small></button>
    ?>

    <?php } ?>

    <!-- end of while & looping all products -->

    <div class="container-fluid all_pag_container pb-3">
        <div class="container pag_container d-flex justify-content-center">
            <div id="pagination_design">
                <?php      
                        echo $pagination->createLinks();
                    
  } 
 
 }?>

            </div>
        </div>
    </div> <!-- end of all_pag_container -->

    <?php


// Add product and check out
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
<div class='col-md-3 text-center'>$pro_name<img src='image/$pro_image' class='img-fluid'></div>
<div class='col-md-3 text-center'></div>
<div class='col-md-3 text-center'>$pro_price</div>
<div class='col-md-3 text-center'>10</div>
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



    <script>
    $(".slider-box").slice(0, 4).show(); //showing 3 div

    $("#load_more").on("click", function() {
        // $(".slider-box:hidden").fadeIn("slow");

        $(".slider-box:hidden").slice(0, 4).fadeIn(); //showing 3 hidden div on click

        if ($(".slider-box:hidden").length == 0) {
            $("#load_more").fadeOut(); //this will hide
            //button when length is 0
        }
    })
    </script>

</body>

</html>