<?php

// include('database_connection.php');

include "db.php";
session_start();

if(isset($_SESSION["uid"])){
  $userName = $_SESSION["name"];
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>John & Carls Home Depot</title>

    <link rel="icon" href="image/logo.png" type="image/x-icon">

    <!-- bootstrap CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- animated css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Local CSS -->
    <link href="css/product_design1.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="css/jquery-ui.css" rel="stylesheet">

    <style>
    /*---Media Queries --*/
    @media (min-width: 1200px) {
        .modal-dialog {
            max-width: 800px;
        }
    }

    @media only screen and (max-width: 992px) {}

    @media (max-width: 870px) {}

    @media only screen and (max-width: 768px) {}

    @media only screen and (max-width: 576px) {

        .product_container {
            margin-top: 70px;
        }

        .row_back,
        .bc_back {
            background-color: white;
        }

    }

    @media (max-width: 360px) {}


    /*
  Extra small (xs) devices (portrait phones, less than 576px)
  No media query since this is the default in Bootstrap

  Small (sm) devices (landscape phones, 576px and up)
  @media (min-width: 576px) { ... }

  Medium (md) devices (tablets, 768px and up)
  @media (min-width: 768px) { ... }

  Large (lg) devices (desktops, 992px and up)
  @media (min-width: 992px) { ... }

  Extra (xl) large devices (large desktops, 1200px and up)
  @media (min-width: 1200px) { ... }
  */
    </style>
</head>

<body>

    <!-- show quick view product -->
    <div class="modal" id="pop1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Quick View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

    <!-- navigation header -->
    <div class="container-fluid p-0 sticky-top">
        <nav class="navbar navbar-expand-lg ">
            <div class="head_orange mx-auto"></div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <image class="img-fluid mx-auto" src="image/logo.jpg" style="width: 250px;"></image>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-align-center">
                    <li class="nav-item">
                        <a class="nav-link link_home" href="index"><small>HOME &nbsp;&nbsp;&nbsp;&nbsp;</small>
                            &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_product" href="products"><small>PRODUCTS&nbsp;&nbsp;&nbsp;&nbsp;</small>
                            &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_store" href="storelocations"><small>STORE
                                LOCATIONS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small> &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_contact" href="contact"><small>CONTACT
                                US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small> &nbsp;</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end of header -->

    <?php
        if(isset($_SESSION["uid"]))
        {
            echo "
                <div class='btn-group'> 
                    <button href='login' type='button' class='btn btn_account dropdown-toggle' 
                        data-toggle='dropdown'> 
                        <i class='bi bi-person-circle'></i> 
                        <small>Hi, $userName</small></a>
                    </button>                                

                    <div class='dropdown-menu'>            
                        <a class='dropdown-item' href='profile'><i class='fas fa-cog'></i>    Settings </a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='logout'><i class='fas fa-sign-out-alt'></i>     Logout </a>
                    </div>                
                
                    <div class='dropdown' id='cart_container'>
                        <button class='btn btn_cart dropdown-toggle' href='shoppingcart.php' type='button' id='dropdownMenuButton' data-toggle='dropdown'
                            aria-haspopup='true' aria-expanded='false'>
                            <i class='bi bi-cart3' style='color: #F15B27;'></i>
                            
                            &nbsp;<span class='badge badge-light'>0</span>                            
                        </button>    
                        <div class='dropdown-menu' style='width: 600px; margin-left: -520px;'>
                        <h6 class='text-success text-center'> CART ITEMS </h6>
                            <div class='dropdown-divider'></div>
                            <div class='row'>                                
                                <div class='col-md-6 text-center'><b>Product</b></div>                                
                                <div class='col-md-3 text-center'><b>Price</b></div>
                                <div class='col-md-3 text-center'><b>Qty</b></div>
                            </div>                
                            <div class='dropdown-divider'></div>
                            <div class='row' id='cart_product'></div>
                        </div>
                    </div>   
                </div>
                ";             
        }else
        {
            echo "
            <div class='btn-group'> 
                <button href='login' type='button' class='btn btn_account dropdown-toggle' 
                    data-toggle='dropdown'> 
                    <i class='bi bi-person-circle'></i> 
                    <small>Account</small></a>
                </button>                                

                <div class='dropdown-menu'>            
                    <a class='dropdown-item' href='profile'><i class='fas fa-cog'></i>    Settings </a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='logout'><i class='fas fa-sign-out-alt'></i>     Logout </a>
                </div>                
        
                <div class='dropdown' id='cart_container'>
                    <button class='btn btn_cart dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'
                        aria-haspopup='true' aria-expanded='false'>
                        <i class='bi bi-cart3' style='color: #F15B27;'></i>
                        <a href='shoppingcart'></a>
                        &nbsp;<span class='badge badge-light'>0</span>
                    </button>
                    <div class='dropdown-menu' style='width: 600px; margin-left: -520px;'>
                    <h6 class='text-success text-center'> CART ITEMS </h6>
                        <div class='dropdown-divider'></div>
                        <div class='row'>                                
                            <div class='col-md-6 text-center'><b>Product</b></div>                                
                            <div class='col-md-3 text-center'><b>Price</b></div>
                            <div class='col-md-3 text-center'><b>Qty</b></div>
                        </div>                
                        <div class='dropdown-divider'></div>
                        <div class='row' id='cart_product'></div>
                    </div>
                </div>   
            </div>
                ";
        }
    ?>



    <!-- side bar content and products -->
    <div class="container-fluid">
        <div class="row row_back" style="height: 55px;">
            <ol class="breadcrumb col-md-5" style="height: 55px; font-size: 12px;">
                <li class="breadcrumb-item font-weight-bold"> <a href="index"> Home</a> </li>
                <li class="breadcrumb-item active" id="all_products_text">All Products</li>
            </ol>
            <ol class="breadcrumb bc_back col-md-7 p-2" style="height: 55px">
                <div class="input-group" style="margin-left: -180px;">
                    <input type="text" style="font-size: 12px;" class="form-control" placeholder="I'm looking for..."
                        id="search" name="names" aria-describedby="basic-addon1">
                    <button class="btn btn_search" type="submit" id="search_btn"><i class="fas fa-search"></i></button>
                </div>
            </ol>
            <!-- <ol class="breadcrumb links col-md-2" style="height: 55px">
                <ul>
                    <li data-view="list-view" style="font-size: 25px; " class="li-list active" data-toggle="tooltip" data-placement="top"
                        title="Show list">
                        <i class="fas fa-th-list"></i>
                    </li>

                    <li data-view="grid-view" style="font-size: 25px;" class="li-grid " data-toggle="tooltip" data-placement="top" title="Show grid">
                        <i class="fas fa-th-large"></i>
                    </li>

                </ul>
            </ol> -->
        </div>

        <div class="row product_container">

            <div class="col-md-3 side_bar_container">

                <!-- pop up alert shown by this div -->
                <div id="signup_msg"></div>

                <div class="list-group">
                    <div id="get_category"></div>
                </div>
                <div class="list-group">
                    <div id="get_brand"></div>
                </div>

            </div>

            <div class="col-md-9">
                <!-- start of col-md-9 -->

                <!-- loading overlay -->
                <div class="loading-overlay">
                    <img src="image/loading.gif">
                </div>

                <!-- product list container -->
                <div class="row" id="postContent">

                    <?php 
                                // Include pagination library file 
                                include_once 'pagination.class.php'; 
                                
                                // Include database configuration file 
                                require_once 'db.php'; 
                                
                                // Set some useful configuration 
                                $baseURL = 'getData.php'; 
                                $limit = 8; 
                                
                                // Count of all records 
                                $query   = $con->query("SELECT COUNT(*) as rowNum FROM tblproduct"); 
                                $result  = $query->fetch_assoc(); 
                                $rowCount= $result['rowNum']; 
                                
                                // Initialize pagination class 
                                $pagConfig = array( 
                                    'baseURL' => $baseURL, 
                                    'totalRows' => $rowCount, 
                                    'perPage' => $limit, 
                                    'contentDiv' => 'postContent' 
                                ); 
                                $pagination =  new Pagination($pagConfig); 
                                
                                // Fetch records based on the limit 
                                $query = $con->query("SELECT * FROM tblproduct ORDER BY product_id DESC LIMIT $limit"); 
                                
                                if($query->num_rows > 0)
                                {                                
                            ?>

                    <!-- display all products -->
                    <?php 

                        
                            while($row = $query->fetch_assoc())
                            { 
                                
                                $pro_id = $row['product_id'];            
                                $pro_desc = $row['product_desc'];
                                $pro_price = $row['product_price'];
                                $pro_image = base64_encode($row['product_image']);  

                                $pro_money = number_format($pro_price);
                        ?>
                    <?php
                                echo 
                                "
                                <div class='slider-box post'>
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


                            //     <div class='slider-box post'>
                            //     <p class='time'></p>
                            //     <div class='img-box'>
                            //         <img class='img-fluid' src='image/$pro_image' style='width: 170px;'>
                            //     </div> 

                            //         <small class='text-primary'>$pro_desc</small> 
                            //         <p class='mb-0'>&#8369;$pro_money</p>                                        
                            //         <div class='mb-3'>
                            //             <small>available:</small><small class='text-success'> 7 stocks</small>                                        
                            //         </div>
                            //         <div class='row mx-auto action_btns'>
                                                            
                            //             <div class='col-md-4'>

                            //                 <button class='btn qv_btn rounded-circle' qvid='$pro_id' id='quick_view' data-toggle='modal' data-target='#pop1'>
                            //                     <i class='bi bi-eye-fill' data-toggle='tooltip' data-placement='top' title='Quick View'></i>
                            //                 </button>                                     
                            //             </div>
                            //             <div class='col-md-4'>                                            
                            //                 <button pid='$pro_id' class='btn ac_btn rounded-circle'' id='product' data-toggle='tooltip' data-placement='top' title='Add to cart'>
                            //                     <i class='bi bi-bag '></i>
                            //                 </button>
                            //             </div>
                            //             <div class='col-md-4'>                                       
                            //                 <button class='btn aw_btn rounded-circle'' id='heart' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
                            //                     <i class='bi bi-suit-heart-fill '></i>
                            //                 </button>
                            //             </div>                                            
                            //         </div>
                            //         <div class='back-drop'></div>
                                    
                            // </div>

                        ?>

                    <?php } ?>

                    <!-- end of while & looping all products -->

                    <div class="container-fluid all_pag_container pb-3">
                        <div class="container pag_container d-flex justify-content-center">
                            <div id="pagination_design">
                                <?php      
                                        echo $pagination->createLinks();
                                    ?>
                            </div>
                        </div>
                    </div> <!-- end of all_pag_container -->

                </div><!-- end of postContent -->
            </div><!-- end of col-md-9 -->
            <?php } ?>
            <!-- end of if statement -->

        </div><!-- end of product_container -->
    </div> <!-- end of side bar content and products -->


    <!-- Footer -->
    <footer>
        <div class="p-5">
            <div class="row text-left">
                <div class="col-md-3">

                    <img src="image/logo.png" class="footerLogo">

                    <div>
                        <ul class="list-unstyled">
                            <li class="my-2"><i class="fas fa-phone-square"></i> (046) 410-5288</li>
                            <li class="my-2"><i class="fas fa-mobile"></i> 0923-081-2723</li>
                            <li class="my-2"><i class="fas fa-envelope"></i> johncarltrading@gmail.com</li>
                            <li class="my-2"><i class="fas fa-location-arrow"></i> Bldg. Sta. Rosa-Tagaytay Rd.,
                                Brgy.
                                Putingkahoy, Silang Cavite</li>
                        </ul>

                    </div>
                </div>

                <div class="aboutUs col-md-3">
                    <h5>Navigate</h5>
                    <ul>
                        <li><a href="storelocations">Store Locations</a></li>
                        <li><a href="careers">Careers</a></li>
                    </ul>
                    <br>
                    <h5 class="h52">Customer Support</h5>
                    <ul>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="contact">Terms & Conditions</a></li>
                        <li><a href="contact">FAQ's</a></li>
                    </ul>
                </div>

                <div class="aboutUs col-md-3">
                    <h5 class="h52">Promotions</h5>
                    <ul>
                        <li><a href="contact">On Sale</a></li>
                        <li><a href="contact">Vouchers</a></li>
                    </ul>
                </div>

                <div class="Branches col-md-3 shadow">
                    <p class="lead">Get Into Newsletter!</p>
                    <small>We'll provide latest offers and promotions.</small>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email here"><br>
                    <button type="submit" class="btn btn-info">SUBSCRIBE <i class="fas fa-envelope"></i></button>
                </div>

            </div>
            <div class="text-center">
                <small>&copy; 2021. John & Carls Home Depot Corporation. All Rights Reserved</small>
            </div>
        </div>
    </footer>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Popper CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script for real time date & time clock --------------------------------->
    <!-- <script type="text/javascript" src="js/clock.js"></script> -->

    <script type="text/javascript" src="js/sweetalert.min.js"></script>

    <script src="js/all123.js"></script>

    <script>
    //  Show loading overlay ajax request starts
    $(document).ajaxStart(function() {
        $('.loading-overlay').show();
        $('#post_').show();
    });

    //  Hide loading overlay ajax request completes
    $(document).ajaxStop(function() {
        $('.loading-overlay').hide();
    });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $("#quick_view").ajaxStart(function() {
        $('.loading-overlay').show();
    });
    //  Hide loading overlay ajax request completes
    $("#quick_view").ajaxStop(function() {
        $('.loading-overlay').hide();
    });
    </script>

</body>

</html>