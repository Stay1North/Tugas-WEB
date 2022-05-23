<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include "koneksi.inc.php";

	//variabel connect database
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	//memindahkan nilai data form
	$vnama = $_POST['nama'];
	$vjkel = $_POST['jkel'];
	$vemail = $_POST['email'];
	$valamat = $_POST['alamat'];
	$vkota = $_POST['kota'];
	$vpesan = $_POST['pesan'];

	//memasukkan data ke tabel
	$sql = "INSERT kontak SET nama='$vnama', jkel='$vjkel', email='$vemail', alamat='$valamat', kota='$vkota', pesan='$vpesan'";

	//mengeksekusi query
	mysqli_query($conn, $sql) or die("Failed insert data");
	
	mysqli_close($conn);
	header("Location: index.php");
	?>

</body>
</html>