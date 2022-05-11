<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$server = "localhost";
		$user = "root";
		$pass = "";
		$db = "db_emp";

		$nama = trim(strip_tags($_POST['nama']));
		$email = trim(strip_tags($_POST['email']));
		$jobid = trim(strip_tags($_POST['jobid']));
		$age = trim(strip_tags($_POST['age']));

		// Connect Database
		$conn = mysqli_connect($server, $user, $pass, $db);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO employees
		VALUES(NULL, '$nama', '$email', '$jobid','$age')";

		if (mysqli_query($conn, $sql)) {
			echo "<center>Data inserted successfully";
		} else {
			echo "<center>Error insert data: " . mysqli_error($conn);
		}
	?>
	<button><a href="home.php">HOME</a></button>
</body>
</html>