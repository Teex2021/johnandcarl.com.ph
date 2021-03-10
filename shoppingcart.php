<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>John & Carls Home Depot</title>

  <link rel="icon" href="./img/logo.jpg" type="image/x-icon">

  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- CSS flickity -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <!-- Local CSS -->
  <link href="css/cart.css" rel="stylesheet">
  <link href = "css/jquery-ui.css" rel = "stylesheet">

</head>

<body onload="initClock()">

  <!-- top header ------------------------------------------------------------->
  <div class="topHeader">
    <div class="socialContent2 mx-3 col-lg-7 p-0 d-flex">
      <li style="font-size: 12px; list-style: none;"><i class="fas fa-phone-square ph" style="margin-left: 30px;"></i> (046) 410-5288</li>
      <li style="font-size: 12px; list-style: none;"><i class="fas fa-envelope env" style="margin-left: 10px;"></i> johncarltrading@gmail.com</li>
      <li style="font-size: 12px; list-style: none;"><i class="fas fa-clock clk" style="margin-left: 10px;"> </i></li>

      <!--digital clock start-->
      <div class="datetime" style="margin-top: -3px;">
        <div class="date">
          <span id="dayname">Day</span>
          <span id="month">Month</span>
          <span id="daynum">00</span>
          <span id="year">Year</span>
          <span id="hour">00</span>
          <span id="minutes">00</span>
          <span id="seconds">00</span>
          <span id="period">AM</span>
        </div>
      </div>

    </div>

    <div class="socialContent col-lg-3 p-0 ">
      <a href="#" class="topIcon"><i class="fab fa-facebook fb"></i></a>
      <a href="#" class="topIcon"><i class="fab fa-twitter tw"></i></a>
      <a href="#" class="topIcon"><i class="fab fa-google-plus-g gpl"></i></a>
      <a href="#" class="topIcon"><i class="fab fa-instagram ins"></i></a>
      <a href="#" class="topIcon"><i class="fab fa-youtube yt"></i></a>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark pt-0 pb-0">
    <a class="navbar-brand"><img src="img/logo.png" alt="logo" width="200px" height="150px"></a>
    <button class="navbar-toggler navbar-custom" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto my-4 ">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">Products</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="products">Floor & Wall Coverings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Bath & Sanitary Wares</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Plumbing & Fittings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Building & Construction</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Paints & Sundries</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Doors, Windows, Stairs & Moldings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Hardware</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Tools & Safety</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Electrical & Appliances</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="products">Household & Furnitures</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Store Locations</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Putingkahoy, Silang Cavite
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Biga, Silang, Cavite
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Kawit, Cavite
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Batangas City
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Nasugbu, Batangas
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Calaca, Batangas
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Balayan, Batangas
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Palanas, Lemery Batangas
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus">Contact Us</a>
        </li>
        <li class="itemCC">
          <a href="cart"><i class="shopBasket fas fa-shopping-cart"></i></a>
        </li>
        <li class="itemCC">
          <a href="login.html"><i class="shopUser far fa-user"></i></i><a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Content ---------------------------------------------------------------->

  <div class="container">
    <div class="row px-5">
      <div class="col-md-7">
        <div class="shopping-cart">
          <h6>My Cart</h6>
          <hr>

        </div>
      </div>
      <div class="col-md-5">

      </div>
    </div>
  </div>

  <!--- Footer ---------------------------------------------------------------->
  <footer>
    <div class="container-fluid d-flex contFooter">
      <div class="col-lg-3 cont1">
        <img src="img/logo.png" class="footerLogo" style="width: 200px;">
        <ul class="list-unstyled">
          <li><a href="#"><i class="fas fa-phone-square"></i> (046) 410-5288</a></li>
          <li><a href="#"><i class="fas fa-mobile"></i> 0923-081-2723</a></li>
          <li><a href="#"><i class="fas fa-envelope"></i> johncarltrading@gmail.com</a></li>
          <li><a href="#"><i class="fas fa-location-arrow"></i> Bldg. Sta. Rosa-Tagaytay Rd., Brgy. Putingkahoy, Silang Cavite</a></li>
        </ul>
      </div>
      <div class="col-lg-3 cont2">
        <h5>About Us</h5>
        <ul class="list-unstyled">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Mission & Vision</a></li>
          <li><a href="#">Company Profile</a></li>
        </ul>
      </div>

      <div class="col-lg-3 cont3">
        <h5>Customer Support</h5>
        <ul class="list-unstyled">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Chat on sales consultant</a></li>
        </ul>
      </div>

      <div class="col-lg-3 cont4">
        <h5>Branches</h5>
        <ul class="list-unstyled">
          <li><a href="#"> Putingkahoy, Silang, Cavite</a></li>
          <li><a href="#"> Biga, Silang, Cavite</a></li>
          <li><a href="#"> Kawit, Cavite</a></li>
          <li><a href="#"> Batangas City</a></li>
          <li><a href="#"> Nasugbu, Batangas</a></li>
          <li><a href="#"> Calaca, Batangas</a></li>
          <li><a href="#"> Balayan, Batangas</a></li>
          <li><a href="#"> Palanas, Lemery Batangas</a></li>
        </ul>
      </div>
    </div>
    <center><p style="color: white; font-size: 10px;">&copy; 2021. John & Carls Home Depot Corporation. All Rights Reserved</p></center>
  </footer>

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Bootstrap CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!-- JavaScript flickity -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <!-- jquery for flickity -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <!-- Script for real time date & time clock --------------------------------->
  <script type="text/javascript" src="js/clock.js"></script>

  <!-- Price Range -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>

</body>

</html>
