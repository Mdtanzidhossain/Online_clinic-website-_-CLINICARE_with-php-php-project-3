<?php
  include "inc/connection.php";
  ob_start();
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <title>Patient profile</title>

    <!-- Basic -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/s4.png" type="image/x-icon">

    <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
                <!--USER-->
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/users.css" rel="stylesheet" /><!--USER--> 


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">



<style type="text/css">
    


body {
    background-color: #ffffff;
}


.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient linear, left top, right top, from #5ae7ee, to #63f282 ;
    background: linear-gradient(to right, #5ae7ee, #63f282);
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}


.patientbtn{

    border: none;
    background-color: #ffffff;
    border-radius: 10px;
    margin-bottom: 10px;
    padding: 5px;
    margin-right: 3px;
    font-weight: 500;
}

.patientbtn:hover{

    border: none;
    background-color: black;
    color: #ffffff;
    border-radius: 10px;
    margin-bottom: 10px;
    padding: 10px;
    margin-right: 3px;
    font-weight: 800;
}

/*payemnt*/







.btn.btn-primary {
    background-color: #ddd;
    color: black;
    box-shadow: none;
    border: none;
    font-size: 20px;
    width: 100%;
    height: 100%
}

.btn.btn-primary:focus {
    box-shadow: none
}

.container .card .img-box {
    width: 80px;
    height: 50px
}

.container .card img {
    width: 100%;
    object-fit: fill
}

.container .card .number {
    font-size: 24px
}

.container .card-body .btn.btn-primary .fab.fa-cc-paypal {
    font-size: 32px;
    color: #3333f7
}

.fab.fa-cc-amex {
    color: #1c6acf;
    font-size: 32px
}

.fab.fa-cc-mastercard {
    font-size: 32px;
    color: red
}

.fab.fa-cc-discover {
    font-size: 32px;
    color: orange
}

.c-green {
    color: green
}

.box {
    height: 40px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ddd
}

.btn.btn-primary.payment {
    background-color: #1c6acf;
    color: white;
    border-radius: 0px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 24px
}

.form__div {
    height: 50px;
    position: relative;
    margin-bottom: 24px
}

.form-control {
    width: 100%;
    height: 45px;
    font-size: 14px;
    border: 1px solid #DADCE0;
    border-radius: 0;
    outline: none;
    padding: 2px;
    background: none;
    z-index: 1;
    box-shadow: none
}

.form__label {
    position: absolute;
    left: 16px;
    top: 10px;
    background-color: #fff;
    color: #80868B;
    font-size: 16px;
    transition: .3s;
    text-transform: uppercase
}

.form-control:focus+.form__label {
    top: -8px;
    left: 12px;
    color: #1A73E8;
    font-size: 12px;
    font-weight: 500;
    z-index: 10
}

.form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
    top: -8px;
    left: 12px;
    font-size: 12px;
    font-weight: 500;
    z-index: 10
}

.form-control:focus {
    border: 1.5px solid #1A73E8;
    box-shadow: none
}


.bikash{

    width: 250px;
    margin-top: 350px;
}







    
</style>








</head>











<body>


<!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            
              <h3>clini<span id="ccolor">c</span>are</h3>
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="cover.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cover.php#about"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cover.php#service"> Services </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cover.php#login"> login </a>
              </li>
            </ul>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </nav>
      </div>
    </header>



<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                   <h2 class="f-w-600">
                                    <?php 
                                     echo $_SESSION['first_name'];
                                    ?>
                                     </h2>
                                <p>Patient</p> 
                                <a href="appoinment_page.php"><button class="patientbtn">Book appoinment</button></a>
                                <a href="cover.php#service"><button class="patientbtn">Buy medicine</button></a>
                                <a href="ambulance/account.php"><button class="patientbtn">Book ambulance</button></a>
                                <a href="cover.php#service"><button class="patientbtn">Covid test & vaccine</button></a>
                                <a href="prescription_list.php"><button class="patientbtn">Download Prescription</button></a>
                                <a href="zoom_meeting_php/index.php" target="_blank"><button class="patientbtn">Video Call</button></a>
                                <a href="patient.php"><button class="patientbtn">LOGOUT</button></a>
                                <br>
                                <a href=""><img src="Coverimg/clinicareBikash.jpg" class="bikash"></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">First Name</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['first_name'];
                                             ?>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Last Name</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['last_name'];
                                            ?>  
                                       </h4>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">DOB</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['DOB'];
                                             ?>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Phone</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['phone'];
                                            ?>  
                                       </h4>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">NID/B.C</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['NID_Birth_certific'];
                                             ?>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Email</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['email'];
                                            ?>  
                                       </h4>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">dos</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                error_reporting(0);
                                                echo $_SESSION['Dos'];
                                             ?>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">time</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['timetable'];
                                            ?>  
                                       </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Ticket no</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['ticket_id'];
                                            ?>  
                                       </h4>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600"> Appointed Doctor</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['doctor_name'];
                                             ?>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Doctor speciality</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['doctor_speciality'];
                                            ?>  
                                       </h4>
                                    </div>
                                </div>
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600" style="margin-top:50px;">payment</h6>



                                <div class="row">
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt=""> </div>
                <div class="number"> <label class="fw-bold" for=""> </label> </div>
                
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png" alt=""> </div>
                <div class="number"> <label class="fw-bold"></label> </div>
                
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png" alt=""> </div>
                <div class="number"> <label class="fw-bold"></label> </div>
                
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <a href="https://www.bkash.com/bn/user"><img src="https://www.logo.wine/a/logo/BKash/BKash-bKash2-Logo.wine.svg" alt=""></a> </div>
                <div class="number"> <label class="fw-bold"></label> </div>
                
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <a href="https://vms.mynagad.com:8484/login"><img src="https://download.logo.wine/logo/Nagad/Nagad-Logo.wine.png" alt=""></a> </div>
                <div class="number"> <label class="fw-bold"></label> </div>
                
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <a href="https://rocketaccount.com/#/sign-in?redirect=https:%2F%2Fdashboard.rocketmortgage.com%3Fqls%3DQNS_20180523.0123456789&adobe_mc=MCMID%3D56112574355775187610787236198558883438%7CMCAID%3D%7CMCORGID%3D5D60123F5245B13E0A490D45@AdobeOrg%7CTS%3D1652903275"><img src="https://seeklogo.com/images/D/dutch-bangla-rocket-logo-B4D1CC458D-seeklogo.com.png" alt=""></a> </div>
                <div class="number"> <label class="fw-bold"></label> </div>
                
            </div>
        </div>




        <div class="col-12 mt-4">
            <div class="card p-3">
                <p class="mb-0 fw-bold h4">Payment Methods</p>
            </div>
        </div>
        <div class="col-12">
            <div class="card p-3">
                <div class="card-body border p-0">
                    <p> <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="https://www.paypal.com/bd/home" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">PayPal</span> <span class="fab fa-cc-paypal"></span> </a></p>
                    <div class="collapse p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-8">
                                <p class="h4 mb-0">Summary</p>
                                <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of product</span></p>
                                <p class="mb-0"><span class="fw-bold">Price:</span><span class="c-green">:$452.90</span></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border p-0">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="https://www.paypal.com/us/digital-wallet/ways-to-pay/credit-services" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Credit Card</span> <span class=""> <span class="fab fa-cc-amex"></span> <span class="fab fa-cc-mastercard"></span> <span class="fab fa-cc-discover"></span> </span> </a> </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Summary</p>
                                <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Visiting fee</span> </p>
                                <p class="mb-0"> <span class="fw-bold">Price:</span> <span class="c-green">:100tk</span> </p>
                                
                            </div>
                            <div class="col-lg-7">
                                <form action="" class="form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">Card Number</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">MM / yy</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="password" class="form-control" placeholder=" "> <label for="" class="form__label">cvv code</label> </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">name on the card</label> </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn btn-primary w-100">Sumbit</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="btn btn-primary payment"> Make Payment </div>
        </div>
    </div>







                                <div class="row">

                                    <div class="col-sm-6">
                                              <button style=" margin-top:70px;padding-left:30px;padding-right:30px;padding-top:10px;padding-bottom:10px; border:none; background-color:#3ad67b;color:#ffffff;"><a title="save" alt="save" onclick="window.print();" target="_blank" style="cursor:pointer; padding:5px;"> Save recept </a></button>
                                    </div>
                                </div>



                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <h5>
              QUICK LINKS
            </h5>
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="cover.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service"> Services </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#login"> User login </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_course">
            <h5>
              Clinicare
            </h5>
            <p>
              Your one stop medical solution along with medicine purchase and ambulance care service.
            </p>
          </div>
        </div>

        <div class="col-md-5 offset-md-1">
          <div class="info_news">
            <h5>
              FOR ANY QUERY, PLEASE WRITE TO US
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i> Location
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i> Clinicare@gmail.com
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i> Call : +880 1959-608444
              </a>
            </div>
            <form action="">
              <input type="text" placeholder="Enter Your email" />
              <button>
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


    <!-- whats app chat start-->

    <style>
      .whatsapp_float{
        position: fixed;
        bottom: 40px;
        right: 20px;
      }
    </style>
    <div class="whatsapp_float">
      
        <a href="https://wa.me/+8801521581815" target="_blank"><img src="Coverimg/whatsapp.png" width="50px" class="whatsapp_float_btn"></a>

    </div>

  <!-- whats app chat end-->


  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">@developers(TM)-Tanzid.Ridwan.Shaon.Omi</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->



  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->







    
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>




<?php 
ob_end_flush();
?>




</body>
</html>