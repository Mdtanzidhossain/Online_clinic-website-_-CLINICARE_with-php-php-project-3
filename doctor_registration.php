<?php
  include "inc/connection.php";
  ob_start();
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->





  <style type="text/css">
    

  .gradient-custom-3 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
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


 

<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form  method="POST">

                <div class="form-outline mb-4">
                  <input type="text" name="Name" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="Phone" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Phone</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="email" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">email</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="departmentname" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Department</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="Speciality" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">qualification</label>
                </div>

                
                
                <div class="form-outline mb-4">
                  <input type="text" name="Licence" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Licence</label>
                </div>

                
                <div class="form-outline mb-4">
                  <input type="text" name="Shift" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Shift</label>
                </div>
                




                
                







                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="confirmpassword" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                

                <div class="d-flex justify-content-center">
                  <button name="register" type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>

                 <!-- <input type="button" name="register" value="" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">-->
                </div>

                

              </form>



                <!-- registration backend php  -->


                <?php

                  if(isset($_POST['register'])){

                      $Name            = mysqli_real_escape_string ($db,$_POST['Name']);
                      $username        = mysqli_real_escape_string ($db,$_POST['email']);
                      $Phone           = mysqli_real_escape_string ($db,$_POST['Phone']);
                      $Speciality      = mysqli_real_escape_string ($db,$_POST['Speciality']);

                      $Licence         = mysqli_real_escape_string ($db,$_POST['Licence']);
                      $Shift           = mysqli_real_escape_string ($db,$_POST['Shift']);


                      $dep = mysqli_real_escape_string ($db,$_POST['departmentname']);





                      $password        = mysqli_real_escape_string ($db,$_POST['password']);
                      $confirmpassword = mysqli_real_escape_string ($db,$_POST['confirmpassword']);

                      if($password == $confirmpassword)
                      {

                        //$hassPass = sha1($password);

                      //$docregQuery = "INSERT INTO doctor(name,email,phone,qualification,licence_No,pass,pass,shift_name) VALUES('$Name',$username','$Phone','$Qualification','$Licence','$password','$Shift')";

                  //$docregQuery = "INSERT INTO newdoctor(doctor_name,email,phone,pass) VALUES('$Name',$username','$Phone','$password')";

                        $docregQuery = "INSERT INTO newdoctor(doc_Name,phone,doc_email,doc_dept,doc_speciality,pass,licence_num,shift_time) VALUES('$Name','$Phone','$username','$dep','$Speciality','$password','$Licence','$Shift')";

                      $depQuery = "INSERT INTO department(name) VALUES('$dep')";

                      //$shiftQuery = "INSERT INTO shift(shift_name) VALUES('$Shift')";

                      $docresult = mysqli_query($db,$docregQuery);
                      $depresult = mysqli_query($db,$depQuery);
                      //$shiftresult = mysqli_query($db,$shiftQuery);and $shiftresult

                          if($docresult && $depresult) 
                          {

                            header('location: cover.php');

                          } else{

                            die("reg error" .mysqli_error($db));
                          }

                      }

                      else{

                          echo '<span class="alert alert-danger">password wrong</span>';

                      }
 
                  }

                ?>



















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
        text-align: right;
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
      </div>
    </div>
  </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>





<?php 
ob_end_flush();
?>



</body>
</html>