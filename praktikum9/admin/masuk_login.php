<?php 
include "koneksi.inc.php";

//variabel connect database
$conn = mysqli_connect($host, $user, $pass, $db);

//buat variabel dari value post
$email = $_POST['email'];
$pass = $_POST['pass'];

//buat query untuk cek data
$sql = "SELECT * FROM kontak WHERE Email='$email' AND Kota='$pass'";
$query = mysqli_query($conn, $sql);
$cek = mysqli_num_rows($query);

//mengecek data
if ($cek) {
	header("Location: cetak.php");
} else {
	header("Location: kontak.php");
}
?>
