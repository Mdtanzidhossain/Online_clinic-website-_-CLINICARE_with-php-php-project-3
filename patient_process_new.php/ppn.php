<?php 


	$email= $_POST['email'];
	$pasword = $_POST['pasword'];

	$email= stripcslashes($email);
	$pasword = stripcslashes($pasword);
	$email= mysql_real_escape_string($email);
	$pasword = mysql_real_escape_string($password);


	mysql_connect("localhost","root", "");
	mysql_select_db("community_clinic_management_system");


	$result = mysql_query("select * from patient where email ='$email' and pasword ='$pasword'")
	or die("failed to query database ". mysql_error());

	$row = mysql_fetch_array($result);

	if($row['email']== $email && $row['pasword'] == $pasword )
	{

		echo "login success".$row['username'];
	}

	else{

		echo "failed to login ";
	}


?>