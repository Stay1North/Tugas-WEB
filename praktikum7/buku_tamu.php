<?php  
$server = "localhost";
$user = "root";
$pass = "";
$db = "myDB";

// Create Connection
$conn = mysqli_connect($server, $user, $pass, $db);

// Check Connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//Create Table
$table = "CREATE TABLE buku_tamu (
	id_bt int(10) AUTO_INCREMENT PRIMARY KEY,
	nama varchar(200) NOT NULL,
	email varchar(50) NOT NULL,
	isi text)";

if (mysqli_query($conn, $table)) {
	echo "Create Table Successfully";
} else {
	echo "Error Creating Table: ". mysqli_error($conn);
}

mysqli_close($conn);
?>