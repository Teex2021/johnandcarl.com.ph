<?php

// session_start();

// if(isset($_SESSION["uid"])){
//   $userName = $_SESSION["name"];
// }


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>John & Carl Home Depot</title>

    <link rel="icon" href="image/logo.png" type="image/x-icon">

    <!-- boostrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!-- Local CSS -->
    <link href="css/storelocations.css" rel="stylesheet">

    <style>
    @media screen and (min-width: 1200px) {
        .modal-dialog {
            max-width: 800px;
        }
    }
    </style>

</head>

<body onload="initClock()">

    <!-- Modal 1 -->
    <div class="modal" id="pop1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Angeles
                        Pampanga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1925.7770180137086!2d120.5970549!3d15.127888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee6abbe342420cbe!2sJohn%20and%20Carl%20Home%20Depot!5e0!3m2!1sen!2sph!4v1614327303507!5m2!1sen!2sph" 
                            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                <hr>
                                <div class="col-md-5">
                                    Monday<br>
                                    Tuesday<br>
                                    Wednesday<br>
                                    Thursday<br>
                                    Friday<br>
                                    Sunday  
                                </div>
                                <div class="col-md-3">
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>                                    
                                    8:00 AM - 5:00 PM
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">MacArthur Highway Cor. San Joaquin St. Brgy. Sto. Domingo, Angeles, Pampanga</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0977 024 5716 / 0968 411 6590</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div>
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Direct Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(02) 6849-5310</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal" id="pop2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Balayan
                        Batangas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d484.0277436111698!2d120.7296997!3d13.9453862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bda30c2b18f5f1%3A0xec57607c0457635d!2sJohn%20and%20Carl%20trading!5e0!3m2!1sen!2sph!4v1614327437612!5m2!1sen!2sph" 
                            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                <hr>
                                <div class="col-md-5">
                                    Monday<br>
                                    Tuesday<br>
                                    Wednesday<br>
                                    Thursday<br>
                                    Friday<br>
                                    Sunday  
                                </div>
                                <div class="col-md-3">
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>                                    
                                    8:00 AM - 5:00 PM
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">Brgy. Calzada Ermita, Balayan, Batangas</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0967 621 5731</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div>-->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(043) 774 0021</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 3 -->
    <div class="modal" id="pop3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Biga II
                        Cavite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d413.5099752631356!2d120.9748099!3d14.2544396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7e6e72f59f7b%3A0xffc5973eb8373984!2sJohn%20%26%20Carl!5e1!3m2!1sen!2sph!4v1614327521479!5m2!1sen!2sph" 
                            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                <hr>
                                <div class="col-md-5">
                                    Monday<br>
                                    Tuesday<br>
                                    Wednesday<br>
                                    Thursday<br>
                                    Friday<br>
                                    Sunday  
                                </div>
                                <div class="col-md-3">
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>                                    
                                    8:00 AM - 5:00 PM
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">Aguinaldo Hi-Way, Biga II, Silang, Cavite</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0945 450 0212</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(046) 487 0875</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal" id="pop4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Bucal
                        Batangas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d968.214811867265!2d120.8909248!3d13.9073601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bda1d52f3c1169%3A0x4b7ea389df52241a!2sJOHN%20AND%20CARL%20TRADING!5e0!3m2!1sen!2sph!4v1614327626685!5m2!1sen!2sph" 
                            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                <hr>
                                <div class="col-md-5">
                                    Monday<br>
                                    Tuesday<br>
                                    Wednesday<br>
                                    Thursday<br>
                                    Friday<br>
                                    Sunday  
                                </div>
                                <div class="col-md-3">
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>
                                    8:00 AM - 5:00 PM<br>                                    
                                    8:00 AM - 5:00 PM
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">Brgy. Bucal, Lemery Batangas</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0975 392 5175</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(043) 740 3266</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal" id="pop5" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Calaca
                        Batangas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15489.828238901819!2d120.8071025896641!3d13.93136953567493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bda17f08ef82e9%3A0x50d9c2d25a9f0d0!2sOhn%20%26%20Carl%20My%20Home!5e0!3m2!1sen!2sph!4v1614327703365!5m2!1sen!2sph" 
                            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                    <hr>
                                    <div class="col-md-5">
                                        Monday<br>
                                        Tuesday<br>
                                        Wednesday<br>
                                        Thursday<br>
                                        Friday<br>
                                        Sunday  
                                    </div>
                                    <div class="col-md-3">
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>                                    
                                        8:00 AM - 5:00 PM
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">Brgy. Camastilisan, Calaca, Batangas </div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Contact No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0936 555 9810</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div>
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Direct Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(02) 6849-5310</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal" id="pop6" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Nasugbu
                        Batangas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d484.0277436111698!2d120.7296997!3d13.9453862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bda30c2b18f5f1%3A0xec57607c0457635d!2sJohn%20and%20Carl%20trading!5e0!3m2!1sen!2sph!4v1614327734593!5m2!1sen!2sph"
                             width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                    <hr>
                                    <div class="col-md-5">
                                        Monday<br>
                                        Tuesday<br>
                                        Wednesday<br>
                                        Thursday<br>
                                        Friday<br>
                                        Sunday  
                                    </div>
                                    <div class="col-md-3">
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>                                    
                                        8:00 AM - 5:00 PM
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">JP Laurel St. Sitio Sagbat Brgy. Lumbangan, Nasugbu, Batangas</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Contact No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0967 621 5731</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(043) 727 6722</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 7 -->
    <div class="modal" id="pop7" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | P&P Lipa
                        Batangas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d828.1805472684485!2d121.1175775!3d13.9344239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x618acb79871b14e8!2sPat%20%26%20Pao%20Home%20Builders!5e1!3m2!1sen!2sph!4v1614327785810!5m2!1sen!2sph" width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                    <hr>
                                    <div class="col-md-5">
                                        Monday<br>
                                        Tuesday<br>
                                        Wednesday<br>
                                        Thursday<br>
                                        Friday<br>
                                        Sunday  
                                    </div>
                                    <div class="col-md-3">
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>                                    
                                        8:00 AM - 5:00 PM
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">Purok 4, Brgy. Banay-Banay, Lipa City, Batangas</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0995 852 1865</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(046) 404 6711</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 8 -->
    <div class="modal" id="pop8" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Palanas
                        Batangas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d968.2908628017339!2d120.9098554!3d13.889173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd0b0b3888ea7d%3A0x60fe3fcb9e387678!2sJohn%20%26%20Carl%20Trading!5e0!3m2!1sen!2sph!4v1614327835812!5m2!1sen!2sph"
                             width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                    <hr>
                                    <div class="col-md-5">
                                        Monday<br>
                                        Tuesday<br>
                                        Wednesday<br>
                                        Thursday<br>
                                        Friday<br>
                                        Sunday  
                                    </div>
                                    <div class="col-md-3">
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>                                    
                                        8:00 AM - 5:00 PM
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8"> Ilustre Ave.Brgy. Palanas, Lemery, Batangas</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0977 422 1063</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(043) 321 8664</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 9 -->
    <div class="modal" id="pop9" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Puting
                        Kahoy Silang Cavite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1933.8624618622368!2d121.0268287!3d14.2108783!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16bf174d78f66d2!2sJohn%20%26%20Carl%20Builders%20Depot!5e0!3m2!1sen!2sph!4v1614327855994!5m2!1sen!2sph" 
                            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                    <hr>
                                    <div class="col-md-5">
                                        Monday<br>
                                        Tuesday<br>
                                        Wednesday<br>
                                        Thursday<br>
                                        Friday<br>
                                        Sunday  
                                    </div>
                                    <div class="col-md-3">
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>                                    
                                        8:00 AM - 5:00 PM
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">9150 Sta. Rosa - Tagaytay Rd., Purok 1 , Brgy. Puting Kahoy, Silang, Cavite</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0977 672 5764 / 0968 555 8876</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(046) 409 6331</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 10 -->
    <div class="modal" id="pop10" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Sta.
                        Rita
                        Batangas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6629.8535989832435!2d121.0375037!3d13.7799028!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd0f811e30b667%3A0x301216d794798826!2sJohn%20%26%20Carl%20My%20Home!5e1!3m2!1sen!2sph!4v1614327914084!5m2!1sen!2sph" width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                    <hr>
                                    <div class="col-md-5">
                                        Monday<br>
                                        Tuesday<br>
                                        Wednesday<br>
                                        Thursday<br>
                                        Friday<br>
                                        Sunday  
                                    </div>
                                    <div class="col-md-3">
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>                                    
                                        8:00 AM - 5:00 PM
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">Bauan – Batangas Provincial Rd., Brgy. Sta. Rita, Batangas</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0977 024 5716</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(02) 6849-5310</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 11 -->
    <div class="modal" id="pop11" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Kawit
                        Cavite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15455.144086584412!2d120.9100481202004!3d14.43949161903338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2b97878dbeb%3A0xb8f0b8741cb78555!2sJohn%20and%20Carl%20Trading!5e0!3m2!1sen!2sph!4v1614327936883!5m2!1sen!2sph" 
                            width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </center>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-12 text-center"><i class="bi bi-bag"></i> Shopping Hours</div>                                
                                    <hr>
                                    <div class="col-md-5">
                                        Monday<br>
                                        Tuesday<br>
                                        Wednesday<br>
                                        Thursday<br>
                                        Friday<br>
                                        Sunday  
                                    </div>
                                    <div class="col-md-3">
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>
                                        8:00 AM - 5:00 PM<br>                                    
                                        8:00 AM - 5:00 PM
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                                <div class="col-md-8">Centennial Rd., Gahak, Kawit, Cavite</div>
                                <div class="col-md-4"><i class="bi bi-phone-fill"></i> Mobile No: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">0916 334 7100</div>
                                <!-- <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                                <div class="col-md-8">johnandcarlangeles@gmail.com</div> -->
                                <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Land Line: </div>
                                <div class="col-md-8" style="color: #161C33; font-weight: 600;">(046) 472 3884</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
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

    <!-- Content -->
    <div class="container-fluid p-0">
        <!-- Start Container -->

        <h5 class="mt-3 text-center">STORE LOCATIONS</h5>

        <div class="row mt-0 mb-5" style="background-color: whitesmoke;">
            <!-- Start Row -->

            <div class="col-md-12 d-flex justify-content-center">
                <!-- Start Col -->

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                    </ol>

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="d-block" src="image/storelocations/ANGELES.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <!-- <button data-pop="#pop1" class="popup_open btn btn-outline-light">View Information</button> -->
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">ANGELES
                                    PAMPANGA BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop1">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/BALAYAN.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <!-- <button class="modal-open" data-model="modal1">View Information</a> -->
                                <!-- <a class="btn btn-outline-light" data-target="#myModal2" data-toggle="modal">View Information 2</a> -->
                                <!-- <a href="#" data-pop="#pop2" class="popup_open">View Information 2</a> -->
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">BALAYAN
                                    BATANGAS BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop2">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/BIGA II.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">BIGA II
                                    BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop3">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/BUCAL.jpg" alt="Fourth slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">BUCAL
                                    BATANGAS BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop4">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/CALACA.jpg" alt="Fifth slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">CALACA
                                    BATANGAS BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop5">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/NASUGBU.jpg" alt="Sixth slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">NASUGBU
                                    BATANGAS BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop6">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/P&P LIPA.jpg" alt="Seventh slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">P&P LIPA
                                    BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop7">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-blok " src="image/storelocations/PALANAS.jpg" alt="Eight slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">PALANAS
                                    BATANGAS BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop8">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/PUTING KAHOY.jpg" alt="Ninth slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">PUTING
                                    KAHOY SILANG CAVITE BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop9">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/STA. RITA.jpg" alt="Eleventh slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">STA. RITA
                                    BATANGAS BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop10">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="image/storelocations/TILES R US KAWIT.jpg" alt="Twelveth slide">
                            <div class="carousel-caption d-none d-md-block pb-5">
                                <h2 class="text-white" style="border: 2px solid white; border-radius: 20px;">TILES R US
                                    KAWIT CAVITE BRANCH</h2>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                    data-target="#pop11">
                                    CHECK INFORMATION
                                </button>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Modal 1 -->
                <!-- <div class="modal fade" id="pop1"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel" style="color: #161C33; font-weight: 600;">Store | Angeles Pampanga</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <center>
                    <h4 class="text-danger"><i class="bi bi-geo"></i> Pinned Location</h4>
                    <iframe class="container" style="height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.781547571647!2d121.0236682!3d14.207565599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf864c8efa779128!2sJohn%20%26%20Carl%20Trading!5e0!3m2!1sen!2sph!4v1611560119186!5m2!1sen!2sph" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                  </center>
                  <div class="modal-footer">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12"><i class="bi bi-bag"></i> Shopping Hours </div>
                        <div class="modal-footer"></div>
                        <div class="col-md-4">
                        Monday<br>
                        Tuesday<br>
                        Wednesday<br>
                        Thursday<br>
                        Friday<br>
                        Saturday<br>
                        Sunday	 
                        </div>
                        <div class="col-md-8">
                        8:00 AM - 7:00 PM<br>
                        8:00 AM - 7:00 PM<br>
                        8:00 AM - 7:00 PM<br>
                        8:00 AM - 7:00 PM<br>
                        8:00 AM - 7:00 PM<br>
                        8:00 AM - 7:00 PM<br>
                        8:00 AM - 7:00 PM
                        </div>

                      </div>
                    </div>         
                  </div>
                  <div class="modal-footer">
                    <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4"><i class="bi bi-geo-alt-fill"></i> Location: </div>
                      <div class="col-md-8">Maria Teresa St, Angeles, 2009 Pampanga</div>
                      <div class="col-md-4"><i class="bi bi-phone-fill"></i> Contact No: </div>
                      <div class="col-md-8" style="color: #161C33; font-weight: 600;">0977 024 5716</div>
                      <div class="col-md-4"><i class="bi bi-envelope"></i> Email Address: </div>
                      <div class="col-md-8">johnandcarlangeles@gmail.com</div>
                      <div class="col-md-4"><i class="bi bi-telephone-forward"></i> Direct Line: </div>
                      <div class="col-md-8" style="color: #161C33; font-weight: 600;">(02) 6849-5310</div>
                    </div>
                    </div>         
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                  
                  </div>
                </div>
            </div>
          </div> -->

            </div> <!-- End Col -->

        </div> <!-- End Row -->

    </div> <!-- End Container -->

    <!--- Footer -->
    <footer>
        <div class="container-fluid-6 p-5">
            <div class="row text-left">
                <div class="col-md-3">

                    <img src="image/logo.png" class="footerLogo" >

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
                    <h5 class="h51">Navigate</h5>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script for real time date & time clock --------------------------------->
    <script type="text/javascript" src="js/clock.js"></script>

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