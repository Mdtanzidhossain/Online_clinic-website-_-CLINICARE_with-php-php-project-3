<?php
  include "inc/connection.php";
  ob_start();
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Appoinment</title>

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

.submitfiles {

  padding-bottom: 30px;
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
              <h2 class="text-uppercase text-center mb-5">Make an Appoinment</h2>

              <form  method="POST" enctype="multipart/form-data">

                <div class="form-outline mb-4">
                  <input type="text" name="DOS" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Date</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="Time" id="form3Example1cg" class="form-control form-control-lg" />
                  <a href="doc_list.php"><label  class="form-label" for="form3Example1cg">Time :</label> veiw</a>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="doctor_name" id="form3Example1cg" class="form-control form-control-lg" />
                  <a href="doc_list.php"><label  class="form-label" for="form3Example1cg">Doctor name :</label> veiw</a>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="doctor_speciality" id="form3Example1cg" class="form-control form-control-lg" />
                  <a href="doc_list.php"><label  class="form-label" for="form3Example1cg">Doctor speciality :</label> veiw</a>
                </div>


                <div class="submitfiles">
                  
                  For previous prescriptions file to upload please select:
                  <input type="file" name="uploadfile" value="">
                  
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

                      $DOS            = mysqli_real_escape_string ($db,$_POST['DOS']);
                      $Time           = mysqli_real_escape_string ($db,$_POST['Time']);
                      $doctor_name     = mysqli_real_escape_string ($db,$_POST['doctor_name']);
                   $doctor_speciality  = mysqli_real_escape_string ($db,$_POST['doctor_speciality']);

                      $password        = mysqli_real_escape_string ($db,$_POST['password']);
                      $confirmpassword = mysqli_real_escape_string ($db,$_POST['confirmpassword']);

                      $filename = $_FILES["uploadfile"] ["name"];
                      $tempname = $_FILES["uploadfile"] ["tmp_name"];
                      $folder="documentimg/".$filename;
                      move_uploaded_file($tempname,$folder);






                      if($password == $confirmpassword)
                      {

                        //$hassPass = sha1($password);

                      $regQuery = "INSERT INTO newappoinment (Dos,timetable,uploads,doctor_name,doctor_department) VALUES ('$DOS','$Time','$folder','$doctor_name','$doctor_speciality')";
                      //$clinicQuery = "INSERT INTO clinic (clinic_id,branch_name) VALUES ('$clinicid','$branch')";

                      $regresult = mysqli_query($db,$regQuery);
                      //$clinicresult = mysqli_query($db,$clinicQuery);

                          if($regresult)
                          {

                            header('location: patient_profile.php');

                          } else{

                            die("reg error" .mysqli_error($db));
                          }

                      }

                      else{

                          echo '<span class="alert alert-danger">password wrong</span>';

                      }


                      $loginQuery = "SELECT * FROM newappoinment ";
                      $loginResult = mysqli_query($db, $loginQuery);

                      while($row = mysqli_fetch_assoc($loginResult))
                  {
                 
                    $_SESSION['Dos']                    = $row['Dos'];
                    $_SESSION['timetable']              = $row['timetable'];
                    $_SESSION['ticket_id']              = $row['ticket_id'];
                    $_SESSION['doctor_name']            = $row['doctor_name'];
                    $_SESSION['doctor_speciality']      = $row['doctor_department'];

                    
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