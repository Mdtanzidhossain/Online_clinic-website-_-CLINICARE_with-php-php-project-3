<?php
  include "inc/connection.php";
  ob_start();
  session_start();


  $query="select * from prescription";
  $connect=mysqli_query($db,$query);
  $data=mysqli_fetch_assoc($connect);
  $num=mysqli_num_rows($connect);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Patient Prescriptions</title>

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

	<h3>Patient Prescriptions :</h3>
	<br>

	<table border="1">
		
		<tr>
			<th>Patient name</th>
			<th>Patient contact_no</th>
			<th>Prescription</th>
		</tr>

		<?php 


			if($num>1){

				while ($data=mysqli_fetch_assoc($connect)) 
				{
					echo "

						<tr>

						 <td>".$data['name']."</td>
						 <td>".$data['phone']."</td>
						 <td><img src='".$data['prescription']."' height='400' width='280'/></td>
						
						 

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