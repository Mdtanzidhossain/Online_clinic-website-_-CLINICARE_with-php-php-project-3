<? php 

$con = mysqli_connect("localhost","root","","community_clinic_management_system");


if(isset($_POST['login_submit']))
{

   $username=$_POST['username'];
   $password=$_POST['password'];

   $query="select *form patientlogin where username='$username' and password='$password'";

   $result=mysqli_query($con,$query);

   if(mysqli_num_rows($result)==1)
   {

   	header("Location:patient_assets.php");

   }

   else
   {

   	header("Location:patient.php");
   	

   }

}




?>