<?php
  include "inc/connection.php";
  ob_start();
  session_start();


  $query="select * from patient";
  $connect=mysqli_query($db,$query);
  $data=mysqli_fetch_assoc($connect);
  $num=mysqli_num_rows($connect);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>patient data</title>

	<style type="text/css">
		
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		
		body{

			width: 100%;
			min-height: 100vh;
			box-sizing: border-box;

		}
		.container{

			max-width: 900px;
			margin: 100px auto;
			width: 100%;
		}
		table{

			border-collapse: collapse;
			width: 100%;
			/* ;*/
		}

		table th{

			background-color: red;
			color: #fff;
			padding: 10px;
		}

		table td{
			padding: 12px;
			color: #000;
			font-size: 1em;
			text-align: center;


		}
		table tr:nth-child(odd){

			background-color: #797976;

		}





	</style>


</head>
<body>

<div class="container">

	<h3>All Patient data :</h3>
	<br>

	<table border="1">
		
		<tr>
			<th>First name</th>
			<th>patient id</th>
			<th>DOB</th>

			<th>Last name</th>
			<th>phone</th>
			<th>email</th>

			<th>NID/B.C</th>
			<th>location_id</th>	
			<th>prescription</th>		
		</tr>

		<?php 

			if($num>0){

				while ($data=mysqli_fetch_assoc($connect)) 
				{
					echo "

						<tr>

						 <td>".$data['first_name']."</td>
						 <td>".$data['patient_id']."</td>
						 <td>".$data['DOB']."</td>

						 <td>".$data['last_name']."</td>
						 <td>".$data['phone']."</td>
						 <td>".$data['email']."</td>

						 <td>".$data['NID_Birth_certific']."</td>
						 <td>".$data['location_id']."</td>
						 <td><img src='".$data['prescription_upload']."' height='400' width='280'/></td>

						</tr>


					";
				}
			}


		?>

	</table>
</div>










	<?php 
		ob_end_flush();
	?>

</body>
</html>