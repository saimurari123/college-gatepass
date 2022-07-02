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
		}

		h1 {
			text-align: center;
			color:rgb(0,0,0);
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
        body{
            background-color:rgb(100,180,250)
        }
        table{
            background-color:rgb(0,200,100)
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
    <script>
        function proceed()
        {
            <h3 align="center"  bgcolor="yellow">Your request has been agreed by class teacher</h3>
        }
    </script>
</head>

<body>
    <h1 align="center">Request at class teacher
	<section>
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
    <br><BR>
    <form action='hod.php' align="center">
        <button type="submit" onclick="proceed()">accept</button>
    </form><br>
    <form action='classrej.html' align="center">
        <button type="submit" onclick="proceed()">Reject</button>
    </form>
</body>

</html>
