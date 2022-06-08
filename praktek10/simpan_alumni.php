<?php 
include "koneksi.inc.php";

$conn = mysqli_connect($host, $user, $pass, $db);

$vnama = $_POST['nama'];
$valamat = $_POST['alamat'];
$vemail = $_POST['email'];
$vangkatan = $_POST['angkatan'];
$vjurusan = $_POST['jurusan'];
$vuser = $_POST['user'];
$vpass = $_POST['pass'];


$sql = "INSERT alumni SET Name='$vnama', Address='$valamat', Email='$vemail', Angkatan='$vangkatan', Jurusan='$vjurusan', Username='$vuser', Password='$vpass'";

mysqli_query($conn, $sql) or die("Failed Insert Data");

mysqli_close($conn);

header("Location: login.php");
?>