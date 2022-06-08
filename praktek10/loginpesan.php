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

	header("location: pesan.php?user=".$loguser."");

}

/*buat variabel dari value post
$loguser = $_POST['username'];
$logpass = $_POST['password'];

//buat query untuk cek data
$sql = "SELECT * FROM alumni WHERE username='$loguser' AND password='$logpass'";
$query = mysqli_query($conn, $sql);
$cek = mysqli_num_rows($query);*/

//mengecek data
/*if ($cek) {
	header("location: pesan.php");
} else {
	echo "Login Failed";
}*/
?>