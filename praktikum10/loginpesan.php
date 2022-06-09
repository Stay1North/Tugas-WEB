<?php 
	include "koneksi.inc.php";

	//variabel connect database
	$conn = mysqli_connect($host, $user, $pass, $db);

	if (isset($_POST['submit'])) {
		$loguser = $_POST['username'];
		$logpass = $_POST['password'];

		//buat query untuk cek data
		$sql = "SELECT * FROM alumni WHERE username='$loguser' AND password='$logpass'";
		$query = mysqli_query($conn, $sql);
		$cek = mysqli_fetch_assoc($query);

		if ($cek) {
			header("location: pesan.php?user=".$loguser."");
		} else {
			echo "Login Failed";
		}
	}
	
?>