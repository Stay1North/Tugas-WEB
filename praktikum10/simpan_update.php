<?php  
include "koneksi.inc.php";

$conn = mysqli_connect($host, $user, $pass, $db);

$datenow = date("d-m-Y");

$vnamalengkap = $_POST['namalengkap'];
$vnama = $_POST['ubahnama'];
$vemail = $_POST['ubahemail'];
$valamat = $_POST['ubahalamat'];
$vlulus = $_POST['ubahlulus'];
$vkerja = $_POST['ubahkerja'];
$vpesan = $_POST['ubahpesan'];

$sql = "UPDATE pesanalumni SET Posted='$datenow', Name='$vnama', Email='$vemail', Address='$valamat', Lulus='$vlulus', Pekerjaan='$vkerja', Message='$vpesan' WHERE Name='$vnamalengkap'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

mysqli_close($conn);

header("Location: cetakpesan.php");

?>