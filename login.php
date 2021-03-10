<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John & Carls Home Depot</title>

    <link rel="icon" href="./img/logo.jpg" type="image/x-icon">

    <!-- boostrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <!-- Local CSS -->
    <link type="text/css" rel="stylesheet" href="css/login.css">
    <link type="text/css" rel="stylesheet" href="css/media.css">


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
                    <!-- <li class="nav-item dropdown"> -->
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
    <!-- Login Form ------------------------------------------------------------->
    <div class="row">
        <div class="col-md-12" id="signup_msg">

        </div>
    </div>
    <div class="container">


        <div class="forms-container">
            <div class="signin-signup">

                <form action="" class="sign-in-form">
                    <h2 class="title"> Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user icons"></i>
                        <input type="text" id="useremail" name="useremail" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock icons"></i>
                        <input type="password" id="userpassword" name="userpassword" placeholder="Password">
                    </div>
                    <input type="submit" class="btn solid" id="login" value="Login">

                    <p class="social-text">Or Sign in with social platforms</p>

                </form>

                <form method="post" class="sign-up-form">
                    <h2 class="title"> Sign Up</h2>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="fas fa-envelope icons"></i>
                                <input type="text" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="fas fa-lock icons"></i>
                                <input type="password" id="password" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="fas fa-lock icons"></i>
                                <input type="password" id="copassword" name="copassword" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="fas fa-user icons"></i>
                                <input type="text" id="f_name" name="f_name" placeholder="First Name"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="fas fa-user icons"></i>
                                <input type="text" id="l_name" name="l_name" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="fas fa-mobile icons"></i>
                                <input type="text" id="mobile" name="mobile" placeholder="Mobile">
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="bi bi-geo icons"></i>
                                <input type="text" id="address1" name="address1" placeholder="Address 1">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="bi bi-geo icons"></i>
                                <input type="text" id="address2" name="address2" placeholder="Address 2 (optional)">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="bi bi-geo icons"></i>
                                <input type="text" id="inputSProvince" placeholder="State/Province">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-field">
                                <i class="bi bi-geo icons"></i>
                                <input type="text" id="inputZip" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn solid" id="signup_button">Sign Up</button>
                    <!-- <input type="submit" class="btn" id="signup_button" value="Sign Up"> -->
                </form>

            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3> New here ?</h3>
                        <p>sign up now to get your business started</p>
                        <button class="btn btn-outline-light" id="sign-up-btn">Sign Up</button>
                    </div>


                </div>

                <div class="panel right-panel">
                    <div class="content">
                        <h3> One of Us?</h3>
                        <p>click here to get thing started</p>
                        <button class="btn btn-outline-light" id="sign-in-btn">Sign In</button>
                    </div>


                </div>

            </div>

        </div>
    </div>

    <!--- Footer -->
    <footer>
        <div class="container-fluid-6 p-5">
            <div class="row text-left">
                <div class="col-md-3">



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
                    <h5 class="h51">About Us</h5>
                    <ul>
                        <li><a href="aboutus">Company Profile</a></li>
                    </ul>
                    <br>
                    <h5 class="h52">Customer Support</h5>
                    <ul>
                        <li><a href="contactus">Contact Us</a></li>
                        <li><a href="careers">Careers</a></li>
                    </ul>
                </div>

                <div class="Branches col-md-3 shadow">
                    <p class="lead">Get Into Newsletter!</p>
                    <small>We'll provide latest offers and promotions.</small>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email here"><br>
                    <button type="submit" class="btn btn-info">SUBSCRIBE <i class="fas fa-envelope"></i></button>
                </div>

                <div class="col-md-3"></div>

                <div class="row text-center mt-5">
                    <h5 class="footerRes">&copy; 2021. John & Carls Home Depot Corporation. All Rights Reserved</h5>
                </div>

            </div>
        </div>
    </footer>


    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script for real time date & time clock -------------------------------------------->
    <!-- <script type="text/javascript" src="js/clock.js"></script> -->

    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/all123.js" type="text/javascript"></script>

</body>

</html>