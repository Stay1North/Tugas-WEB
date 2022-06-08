<?php  
include "koneksi.inc.php";

$datenow = date("d-m-Y");

$conn = mysqli_connect($host, $user, $pass, $db);

$vnama = $_POST['nama'];
$valamat = $_POST['alamat'];
$vemail = $_POST['email'];
$vlulus = $_POST['lulus'];
$vpekerjaan = $_POST['pekerjaan'];
$vpesan = $_POST['pesan'];


$sql = "INSERT pesanalumni SET Posted='$datenow', Name='$vnama',  Email='$vemail', Address='$valamat', Lulus='$vlulus', Pekerjaan='$vpekerjaan', Message='$vpesan'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

mysqli_close($conn);

header("Location: cetakpesan.php");
?>