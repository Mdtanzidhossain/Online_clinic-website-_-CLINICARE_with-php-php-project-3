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
    <title>doctor profile</title>


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


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">





<style type="text/css">
    


body {
    background-color: #f9f9fa
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
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
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

#rhover {

    margin: -30px;
    justify-items: center;

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
                <div class="" id="rhover">
                    <div class="row m-l-0 m-r-0" >
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                   <h2 class="f-w-600">
                                    <?php 
                                     echo $_SESSION['doc_Name'];
                                    ?>
                                     </h2>
                                <p>Doctor</p> 

                                <a href="appoinment_show.php"><button class="patientbtn">Appoinment list</button></a>
                                <a href="prescription_list.php"><button class="patientbtn">Prescription list</button></a>

                                <a href="zoom_meeting_php/index.php" target="_blank"><button class="patientbtn">Video Call</button></a>

                                <a href="patient.php"><button class="patientbtn">LOGOUT</button></a>



                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h1 class="m-b-20 p-b-5 b-b-default f-w-600"> Doctor Information</h1>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Name</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['doc_Name'];
                                             ?>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Email</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['doc_email'];
                                            ?>  
                                       </h4>
                                    </div>
                                </div>
                                

                                <div class="row">
                                   
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Phone</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['phone'];
                                            ?>  
                                       </h4>
                                    </div>

                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Licence Number</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                              echo $_SESSION['licence_num'];
                                            ?>  
                                       </h4>
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Department</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['doc_dept'];
                                             ?>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Speciality</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['doc_speciality'];
                                             ?>
                                        </h4>
                                    </div>
                                    
                                </div>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600">Shift time</h3>
                                        <h4 class="text-muted f-w-400">
                                            <?php 
                                                echo $_SESSION['shift_time'];
                                                  //echo $_SESSION['DOB'];
                                             ?>
                                        </h4>
                                    </div>
                                </div>



                    



                                
                            </div>

                                <div class="card-block">
                                <h1 class="m-b-20 p-b-5 b-b-default f-w-600"> Patient Prescription</h1>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <form method="POST" enctype="multipart/form-data">
                                          <h5 class="m-b-10 f-w-600">Name :</h5>
                                          <input type="text" id="patientname" name="patient_name" value=""><br>


                                          
                                          <h5 class="m-b-10 f-w-600">Phone Number :</h5>
                                          <input type="text" id="patientnumber" name="Phone" value="">
                                           


                                          <br>
                                          <h5 class="m-b-10 f-w-600" style="margin-top:25px;">Medicines:</h5>
                                          <textarea rows="20" cols="60"></textarea>
                                          <br>
                                          <div>
                                              <button><a title="save" alt="save" onclick="window.print();" target="_blank" style="cursor:pointer; padding:5px;"> Save </a></button>
                                          </div>
                                          <div class="submitfiles">
                  
                                              Upload prescriptions:
                                              <input type="file" name="uploadfile" value="">

                                          
                                          </div>
                                          <br>
                                          <button name="register" type="submit" >register</button>
                                        </form>
                                        <?php

                       if(isset($_POST['register'])){ 

                           //$patientContact    = mysqli_real_escape_string ($db,$_POST['phonenumber']);
                      $patient_name            = mysqli_real_escape_string ($db,$_POST['patient_name']);
                      
                      $Phone                   = mysqli_real_escape_string ($db,$_POST['Phone']);
                      
                              $filename = $_FILES["uploadfile"] ["name"];
                              $tempname = $_FILES["uploadfile"] ["tmp_name"];
                              $folder="prescriptionimg/".$filename;
                               move_uploaded_file($tempname,$folder);

                       if(isset($_POST["register"]) && !empty($_FILES["uploadfile"] ["name"]))
                       {

                        //SET @patientphn = '$patientContact' ;
                       $regQuery = "INSERT into prescription (name,phone,prescription) 
                       VALUES ('$patient_name','$Phone','$folder')";
                      

                      $regresult = mysqli_query($db,$regQuery);
                      

                          if($regresult)
                          {

                            header('location: doctor_profile.php');

                          } 
                          else
                          {

                            die("reg error" .mysqli_error($db));
                          }

                      }
                    }

                      
                    ?>                                   
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        
                                          <h5 class="m-b-10 f-w-600">Age :</h5>
                                          <input type="text" id="patientage" name="age" value="">
                                          <br>
                                          <br>
                                          <h5 class="m-b-10 f-w-600">Sex :</h5>
                                          <label><input type="radio" value="" name="sex" />Male</label>
                                          
                                          <label><input type="radio" value="" name="sex" />Female</label>
                                          <label><input type="radio" value="" name="sex" />Other</label>                                
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