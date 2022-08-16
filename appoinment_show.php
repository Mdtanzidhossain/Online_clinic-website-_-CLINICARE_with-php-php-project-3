<?php
  include "inc/connection.php";
  ob_start();
  session_start();


  $query="select * from newappoinment";
  $connect=mysqli_query($db,$query);
  $data=mysqli_fetch_assoc($connect);
  $num=mysqli_num_rows($connect);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Appoinment data</title>

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

	<h3>All Appoinments :</h3>
	<br>

	<table border="1">
		
		<tr>
			<th>Ticket ID</th>
			<th>DOS</th>
			<th>Time-Table</th>
			<th>Uploaded Document</th>
		</tr>

		<?php 

			if($num>=0){

				while ($data=mysqli_fetch_assoc($connect)) 
				{
					echo "

						<tr>

						 <td>".$data['ticket_id']."</td>
						 <td>".$data['Dos']."</td>
						 <td>".$data['timetable']."</td>
						 <td><img src='".$data['uploads']."' height='400' width='280'/></td>
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