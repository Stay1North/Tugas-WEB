<?php  
include "koneksi.php";

//deklarasi variabel daftarsiswa
$vnama = $_POST['nama'];
$vkelas = $_POST['kelas'];
$valamat = $_POST['alamat'];

//deklarasi query untuk memasukkan data
$sql = "INSERT tb_siswa SET nama='$vnama', kelas='$vkelas', alamat='$valamat'";

//ekesekusi query pada database
mysqli_query($conn, $sql) or die(mysqli_error($conn));

//menutup database
mysqli_close();

//redirect reportdataexcel.php
header("location: reportdataexcel.php");

?>