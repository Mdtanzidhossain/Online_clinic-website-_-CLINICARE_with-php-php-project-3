<?php
  include "inc/connection.php";
  ob_start();
  session_start();

?>

<!DOCTYPE html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Doctor Login</title>
  </head>




  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>


  <body style="background:url('docimg/backgroundimg.jpeg'); background-size: cover;">



  <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="docimg/cardback.jpeg" class="card-img-top">
            <div class="card-body">
              <center>
              <h5>DOCTOR LOGIN</h5><br>
              <form class="form-group" method="POST">
                <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <a href="doctor_assets.php" <center><input type="submit" id="inputbtn" name="login" value="Login" class="btn btn-primary"></center></a>



                <a href="cover.php" class="back"> Back </a>

              </form>



              <?php

              if(isset($_POST['login']))
              {

                $username = $_POST['username'];
                $password = $_POST['password'];

                if(empty($username)){
                  echo "<span class='alert alert-danger'>username Field can't be empty!</span>";
                }
                if(empty($password)){
                  echo "<span class='alert alert-danger'>Password Field can't be empty!</span>";
                }

                if(!empty($username) && !empty($password)){

                  $loginQuery = "SELECT * FROM newdoctor WHERE doc_email='$username'";
                  $loginResult = mysqli_query($db, $loginQuery);

                  while($row = mysqli_fetch_assoc($loginResult))
                  {

                    $_SESSION['doc_Name']              = $row['doc_Name'];
                    $_SESSION['phone']                 = $row['phone'];
                    $_SESSION['doc_email']             = $row['doc_email'];

                    $_SESSION['doc_dept']              = $row['doc_dept'];
                    $_SESSION['doc_speciality']        = $row['doc_speciality'];

                    $_SESSION['licence_num']           = $row['licence_num'];
                    $_SESSION['shift_time']            = $row['shift_time'];
                    
                    
                   
                    

                    $pass                              = $row['pass'];
                  }

                  if($username == $_SESSION['doc_email'] && $password == $pass )
                  {

                      header('location: doctor_profile.php');

                  }

                  else if($username != $_SESSION['doc_email'] || $password != $pass)
                  {

                      header('location: doctor.php');

                  }

                  else
                  {
                    header('location: doctor.php');
                  }



                }



              }

               ?>






















            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>


</div>


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