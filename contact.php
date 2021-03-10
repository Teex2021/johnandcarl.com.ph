<?php

include "scripts.php";

session_start();

if(isset($_SESSION["uid"])){
  $userName = $_SESSION["name"];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Include autoload.php file
require 'vendor/autoload.php';
// Create object of PHPMailer class
$mail = new PHPMailer(true);

$output = '';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    // Gmail ID which you want to use as SMTP server
    $mail->Username = 'philip.jacmotors.santarosa@gmail.com';
    // Gmail Password
    $mail->Password = '232015JhonAirish';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Email ID from which you want to send the email
    $mail->setFrom('philip.jacmotors.santarosa@gmail.com');
    // Recipient Email ID where you want to receive emails
    $mail->addAddress('jhonphilipalulod@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Form Submission';
    $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

    $mail->send();
    $output = '              
    <script>
    swal({
        icon: "info",
        title: "Thank you for reaching us '.$name.'",
        text: "Well get back to you as soon as possible!",
      });
    </script>';

  } catch (Exception $e) {
    // $output = '<div class="alert alert-danger">
    //             <h5>' . $e->getMessage() . '</h5>
    //           </div>';

    $output = '
    
    <script>
    swal({
        icon: "warning",
        title: "Something Went Wrong",
        text: "Please try again!",
      });
    </script>
    ';
  }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Local CSS -->
    <link href="css/contact.css" rel="stylesheet">
    <!-- <link href = "css/jquery-ui.css" rel = "stylesheet"> -->

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
                    <!-- </li>
                    <li class="nav-item dropdown">
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

    <!-- Content ---------------------------------------------------------------->
    <h5 class="mt-3 text-center">CONTACT US</h5>
    <br>
    <section class="form-section">
        <div class="container">

            <div class="row">

                <div class="col-md-6"><h5 class="mt-3 text-center">Contact Us</h5>
                    <h5>Call Us</h5>
                    <i class="fas fa-phone-square"></i> (046) 410-5288
                    <i class="fas fa-mobile"></i> 0923-081-2723<br>
                    <hr>
                    <h5>Email</h5>
                    <i class="fas fa-envelope"></i> johncarltrading@gmail.com<br>
                    <hr>
                    <h5>Working Hours</h5>
                    <p><i class="fas fa-clock"></i> Mon-Fri & Sunday 8am - 5pm</p>
                    <hr>
                    <h5>Head Office</h5>
                    <i class="fas fa-location-arrow"></i> Bldg. Sta. Rosa-Tagaytay Rd., <br>Brgy. Putingkahoy, Silang
                    Cavite
                </div>

                <div class="col-md-6">
                    <div id="showSuc"></div>
                    <div class="card shadow">
                        <div class="card-header text-light">
                            <h4 class="card-title">Fill up information</h4>
                        </div>
                        <div class="card-body px-4">
                            <form action="contact" method="POST">
                                <div class="form-group">
                                    <?= $output; ?>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Enter E-Mail" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                        <input type="subject" name="subject" id="subject" class="form-control"
                                            placeholder="Enter Subject" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" rows="5" class="form-control"
                                        placeholder="Write Your Message" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Send Message" class="btn btn-block"
                                        id="sendBtn">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <hr>
    <center>
        <h5 class="text-center bg-dark text-light p-2">Visit our Head Office here</h5>
        <br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.781547571647!2d121.0236682!3d14.207565599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf864c8efa779128!2sJohn%20%26%20Carl%20Trading!5e0!3m2!1sen!2sph!4v1611560119186!5m2!1sen!2sph"
            width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
        </iframe>
    </center>
                        <br>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper CDN -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script for real time date & time clock --------------------------------->
    <script type="text/javascript" src="js/clock.js"></script>

    <script type="text/javascript" src="js/mainD.js"></script>

    <!-- Price Range -->
    <!-- <script src="js/jquery-1.10.2.min.js"></script> -->
    <!-- <script src="js/jquery-ui.js"></script> -->

    <!-- Script Button scroll top ----------------------------------------------->

    <script>
    const btnUp = document.querySelector("#btnUp");

    btnUp.addEventListener("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    </script>

</body>

</html>