<?php  
		$server = "localhost";
		$user = "root";
		$pass = "";
		$db = "db_emp";

		$nama = trim(strip_tags($_POST['nama']));
		$namab = trim(strip_tags($_POST['namab']));
		$email = trim(strip_tags($_POST['email']));
		$jobid = trim(strip_tags($_POST['jobid']));
		$age = trim(strip_tags($_POST['age']));

		// Connect Database
		$conn = mysqli_connect($server, $user, $pass, $db);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "UPDATE employees SET name='$namab', email='$email', job_id='$jobid', age='$age' WHERE name='$nama'";

		if (mysqli_query($conn, $sql)) {
			echo "<center>Data updated successfully";
		} else {
			echo "<center>Error update data: " . mysqli_error($conn);
		}
		echo "<button><a href='home.php'>HOME</a></button>";
	?>