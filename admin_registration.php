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
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="id" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">ID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="nid" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">NID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="clinicid" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Clinic ID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="branch" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Branch</label>
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

                      $name         = mysqli_real_escape_string ($db,$_POST['name']);
                      $id           = mysqli_real_escape_string ($db,$_POST['id']);
                      $nid          = mysqli_real_escape_string ($db,$_POST['nid']);

                      $clinicid     = mysqli_real_escape_string ($db,$_POST['clinicid']);
                      $branch       = mysqli_real_escape_string ($db,$_POST['branch']);




                      $password        = mysqli_real_escape_string ($db,$_POST['password']);
                      $confirmpassword = mysqli_real_escape_string ($db,$_POST['confirmpassword']);

                      if($password == $confirmpassword)
                      {

                        //$hassPass = sha1($password);

                      $regQuery = "INSERT INTO newadmin (staff_Name,staff_id,NID,password) VALUES ('$name','$id','$nid','$password')";
                      //$clinicQuery = "INSERT INTO clinic (clinic_id,branch_name) VALUES ('$clinicid','$branch')";

                      $regresult = mysqli_query($db,$regQuery);
                      //$clinicresult = mysqli_query($db,$clinicQuery);

                          if($regresult)
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