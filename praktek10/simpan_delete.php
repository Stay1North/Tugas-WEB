<?php  
include "koneksi.inc.php";

$conn = mysqli_connect($host, $user, $pass, $db);

$vnama = $_POST['hapusnama'];

$sql = "DELETE FROM pesanalumni WHERE Name='$vnama'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

mysqli_close($conn);

header("Location: cetakpesan.php");

?>