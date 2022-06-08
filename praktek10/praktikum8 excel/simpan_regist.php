<?php  
include "registAct.php";

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "registrasi_pendik";

	$status1 = "";
	$status2 = "";
	$status3 = "";
	$status4 = "";

	//create connection
	$conn = mysqli_connect($server, $user, $pass, $db);

	//check connection
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	//insert data pendaftaran
	$sql1 = "INSERT INTO pendaftaran VALUES ('$nmrujian','$nis','$daftar','$tglmasuk','$paud','$tk','$skhu','$ijazah','$hobi','$cita')";

	if (mysqli_query($conn,$sql1)) {
		$status1 = "Data pendaftaran inserted successfully";
	} else {
		$status1 = "Error insert data: ".mysqli_error($conn);
	}


	//insert data pendik
	$sql2 = "INSERT INTO pendik VALUES ('$nama','$jkelamin','$nisn','$nik','$tmptlahir','$tgllahir','$agama','$kebutuhan','$alamat','$kodepos','$tinggal','$transportasi','$hp','$telp','$email','$statuskip','$kip','$warga')";

	if (mysqli_query($conn,$sql2)) {
		$status2 = "Data pendik inserted successfully";
	} else {
		$status2 = "Error insert data: ".mysqli_error($conn);
	}

	//insert data ayah
	$sql3 = "INSERT INTO ayah VALUES ('$ayah','$tahun_ayah','$pendik_ayah','$pekerjaan_ayah','$hasil_ayah','$kebutuhan_ayah')";

	if (mysqli_query($conn,$sql3)) {
		$status3 = "Data ayah inserted successfully";
	} else {
		$status3 = "Error insert data: ".mysqli_error($conn);
	}

	//insert data ibu
	$sql4 = "INSERT INTO ibu VALUES('$ibu','$tahun_ibu','$pendik_ibu','$pekerjaan_ibu','$hasil_ibu','$kebutuhan_ibu')";

	if (mysqli_query($conn,$sql4)) {
		$status4 = "Data ibu inserted successfully";
	} else {
		$status4 = "Error insert data: ".mysqli_error($conn);
	}

	echo "Status Input: <br>";
	echo "Tabel pendaftaran = ".$status1."<br>";
	echo "Tabel pendik = ".$status2."<br>";
	echo "Tabel ayah = ".$status3."<br>";
	echo "Tabel ibu = ".$status4."<br>";

mysqli_close($conn);

?>