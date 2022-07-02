<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'data1';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM gatepass";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Student record</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
            background-color:rgb(270,160,50)
		}
        body{
            background-color:rgb(150,200,200)
        }

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}

	</style>
</head>

<body>
	<section>
        <h1>Request at Hod</h1>
		<h1>Student Data</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>student name</th>
				<th>rolno</th>
				<th>phone number </th>
				<th>email</th>
                <th>reason</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['rolno'];?></td>
				<td><?php echo $rows['phonenumber'];?></td>
				<td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['reason'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
    <form action='gatekeeper.html' align="center">
        <button type="submit">accept</button>
    </form><br>
    <form action='hodrej.html' align="center">
        <button type="submit">Reject</button>
    </form>
</body>

</html>
