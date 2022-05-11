<?php  
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_emp";

	$nama = trim(strip_tags($_POST['nama']));

	// Connect Database
	$conn = mysqli_connect($server, $user, $pass, $db);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "DELETE FROM employees WHERE name = '$nama'";

	if (mysqli_query($conn, $sql)) {
		echo "<center>Data deleted successfully ";
	} else {
		echo "<center>Error delete data: " . mysqli_error($conn);
	}

	echo "<button><a href='home.php'>HOME</a></button>";
?>