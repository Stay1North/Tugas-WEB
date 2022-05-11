<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_emp";

	//Connect Database
	$conn = mysqli_connect($server, $user, $pass, $db);

	//Check Connection
	if (!$conn) {
		die("Connection failed : " . mysqli_connect_error());
	} 

	$sql = "SELECT * FROM employees";

	$query = mysqli_query($conn, $sql);

	if (!$query) {
		die ("SQL Error: " . mysqli_error($conn));
	}

	echo "<table width='800' align=center cellpadding='2' cellspacing='2'>
			<thead align=center>
				<tr>
					<th>EMPLOYEE_ID</th>
					<th>NAMA</th>
					<th>EMAIL</th>
					<th>JOB_ID</th>
					<th>UMUR</th>
				</tr>
			</thead>
			<tbody align=center>";
			
	while ($row = mysqli_fetch_array($query))
	{
		echo '<tr>
				<td>'.$row['emp_id'].'</td>
				<td>'.$row['name'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['job_id'].'</td>
				<td>'.$row['age'].'</td>
			</tr>';
	}
	echo '
		</tbody>
	</table>
	<br><br>';

	echo "<button><a href='home.php'>HOME</a></button>";

 ?>