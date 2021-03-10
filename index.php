<?php

// session_start();

// if(isset($_SESSION["uid"])){
//   header("location:profile");
// }

session_start();

if(isset($_SESSION["uid"])){
  $userName = $_SESSION["name"];
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=3.0, maximum-scale=1.0, user-scalable=0">

    <title>John & Carl Home Depot</title>

    <link rel="icon" href="image/logo.png" type="image/x-icon">

    <!-- local css -->
    <link href="css/home.css" type="text/css" rel="stylesheet">
    <link href="css/product_list.css" type="text/css" rel="stylesheet">

    <!-- media queries -->
    <link href="css/index-media.css" type="text/css" rel="stylesheet">

    <!-- boostrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css" />



</head>

<body>

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

                    <!-- user login session -->
                    <?php
                        // if(isset($_SESSION["uid"]))
                        // {

                        //     echo "
                        //             <div class='btn-group'> 
                        //                 <button href='login' type='button' class='btn btn-success dropdown-toggle' 
                        //                 data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> 
                        //                 <i class='bi bi-person-circle'></i> 
                        //                 <small>Hi, $userName</small></a>
                        //                 </button>
                                    
                        //                 <div class='dropdown-menu'>            
                        //                 <a class='dropdown-item' href='profile'><i class='fas fa-cog'></i>    Settings </a>
                        //                 <div class='dropdown-divider'></div>
                        //                 <a class='dropdown-item' href='logout'><i class='fas fa-sign-out-alt'></i>     Logout </a>
                        //                 </div>
                        //             </div>
                        //         ";
                        // }else
                        // {
                        //     echo "

                        //             <a class='nav-link dropdown-toggle link_account'  href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        //                 <i class='bi bi-person-circle'></i><small>ACCOUNT</small>
                        //             </a>
                        //             <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        //                 <a class='dropdown-item' href='login'><i class='fas fa-sign-in-alt'></i>&nbsp;&nbsp;&nbsp; Login</a>
                        //                 <div class='dropdown-divider'></div>              
                        //                 <a class='dropdown-item' href='login'><i class='fas fa-user-plus'></i>&nbsp; Create account </a>
                        //             </div>
                                    
                        //         ";
                        // }

                    ?>
                    <!-- </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="btn" id="cart_container">
                            <a id="navbarDropdown" role="button" data-toggle="dropdown">
                                <i class="bi bi-cart3" style="color: #F15B27;"></i><a href="shoppingcart"></a>
                                &nbsp;<span class="badge badge-light">0</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                style="width: 600px; margin-left: -520px;">
                                <div class="row">
                                    <div class="col-md-3 text-center">Item</div>
                                    <div class="col-md-3 text-center">Product</div>
                                    <div class="col-md-3 text-center">Item Description</div>
                                    <div class="col-md-3 text-center">Price</div>
                                </div>

                                <div class="dropdown-divider"></div>
                                <div class="row" id="cart_product">

                                </div>
                            </div>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
    <!-- end of header -->

    <!--- image slider -->
    <div class="row pt-1">
        <div class="col-md-12">
            <div id="slides" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                    <li data-target="#slides" data-slide-to="3"></li>
                    <li data-target="#slides" data-slide-to="4"></li>
                </ul>

                <div class="carousel-inner ">

                    <div class="carousel-item active text-center">
                        <img class="img-fluid" src="image/img_slider1.jpg" style="width: 800px;">
                    </div>

                    <div class="carousel-item text-center">
                        <img class="img-fluid" src="image/img_slider2.jpg" style="width: 800px;">
                    </div>

                    <div class="carousel-item text-center">
                        <img class="img-fluid" src="image/img_slider3.jpg" style="width: 800px;">
                    </div>

                    <div class="carousel-item text-center">
                        <img class="img-fluid" src="image/img_slider4.jpg" style="width: 800px;">
                    </div>

                    <div class="carousel-item text-center">
                        <img class="img-fluid" src="image/img_slider5.jpg" style="width: 800px;">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </div>
    <!-- end of image slider -->

    <!-- featured product slider -->
    <br>
    <h5 class="headers text-center text-white p-2">Featured Products</h5>

    <!-- Swiper -->
    <div class="swiper-container bg-light">
        <div class="swiper-wrapper">
            <?php 
                      
                            // Include database configuration file 
                            require_once 'db.php'; 
                            
                            $limit = 50; 
                            
                            // Fetch records based on the limit 
                            $query = $con->query("SELECT * FROM tblproduct ORDER BY product_id DESC LIMIT $limit"); 
                            
                            if($query->num_rows > 0)
                            {                                
                        

    
                        while($row = $query->fetch_assoc())
                        { 
                            
                            $pro_id = $row['product_id'];            
                            $pro_desc = $row['product_desc'];
                            $pro_price = $row['product_price'];
                            $pro_image = base64_encode($row['product_image']);                            

                            $pro_money = number_format($pro_price);
                     
    
                            echo 
                            "
                            <div class='swiper-slide'>
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
                            </div>
                            ";  
                        }
                    }
           ?>
        </div>

    </div>
    </div>
    <!-- end featured product slider -->

    <br>
    <h5 class="headers text-center text-white p-2">Our own brands</h5>
    <br>
    <div class="swiper-containerX">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="image/amarah.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="image/bohochic.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="image/finewood.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="image/fliezen.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="image/hudor.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="image/jcceramica.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="image/lumiere.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!--- Connect -->
    <div class="container-fluid-7 padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h4>Connect with us</h4>
            </div>
            <div class="col-12 social padding">
                <a href="https://www.facebook.com/JohnAndCarlHomeDepot"><i class="fab fa-facebook"></i></a>
                <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://www.instagram.com/johnandcarlhomedepot/"><i class="fab fa-instagram"></i></a>
                <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
            </div>
        </div>
    </div>

    <!--- Footer -->
    <footer>
        <div class="container-fluid-6 p-5">
            <div class="row text-left">
                <div class="col-md-3">

                    <img src="image/logo.png" class="footerLogo">

                    <div>
                        <ul class="list-unstyled">
                            <li class="my-2"><i class="fas fa-phone-square"></i> (046) 410-5288</li>
                            <li class="my-2"><i class="fas fa-mobile"></i> 0923-081-2723</li>
                            <li class="my-2"><i class="fas fa-envelope"></i> johncarltrading@gmail.com</li>
                            <li class="my-2"><i class="fas fa-location-arrow"></i> Bldg. Sta. Rosa-Tagaytay Rd., Brgy.
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
                    <h5>Customer Support</h5>
                    <ul>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="contact">Terms & Conditions</a></li>
                        <li><a href="contact">FAQ's</a></li>
                    </ul>
                </div>

                <div class="aboutUs col-md-3">
                    <h5 class="h52">Promotions</h5>
                    <ul>
                        <li><a href="contactus">On Sale</a></li>
                        <li><a href="contactus">Vouchers</a></li>
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
                <small>&copy; 2021. John & Carl Home Depot Corporation. All Rights Reserved</small>
            </div>
        </div>
    </footer>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- local js -->
    <script src="js/all.js"></script>

    <!-- swiper js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
    // slide for featured products
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 100,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // slider for owned brands
    var swiper = new Swiper('.swiper-containerX', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 3,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    </script>

</body>

</html>