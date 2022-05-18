<?php 
	//variabel untuk validasi error
	$error_nis = "";
	$error_nmrujian = "";
	$error_skhu = "";
	$error_ijazah = "";
	$error_nama = "";
	$error_nisn = "";
	$error_nik = "";
	$error_kodepos = "";
	$error_hp = "";
	$error_telp = "";
	$error_kip = "";
	$error_ayah = "";
	$error_ibu = "";

	//variabel registrasi peserta didik
	$daftar = "";
	$tglmasuk = "";
	$nis = ""; //hanya angka
	$nmrujian = ""; //hanya angka
	$paud = "";
	$tk = "";
	$skhu = ""; //hanya angka
	$ijazah = ""; //hanya angka
	$hobi = "";
	$cita = "";

	//variabel data pribadi
	$nama = "";
	$jkelamin = "";
	$nisn = ""; //hanya angka
	$nik = ""; //hanya angka
	$tmptlahir = "";
	$tgllahir = "";
	$agama = "";
	$kebutuhan = "";
	$alamat = "";
	$kodepos = ""; //hanya angka
	$tinggal = "";
	$transportasi = "";
	$hp = ""; //hanya angka
	$telp = ""; //hanya angka
	$email = "";
	$statuskip = "";
	$kip = ""; //hanya angka
	$warga = "";

	//data ayah kandung
	$ayah = "";
	$tahun_ayah = "";
	$pendik_ayah = "";
	$pekerjaan_ayah = "";
	$hasil_ayah = "";
	$kebutuhan_ayah = "";

	//data ibu kandung
	$ibu = "";
	$tahun_ibu = "";
	$pendik_ibu = "";
	$pekerjaan_ibu = "";
	$hasil_ibu = "";
	$kebutuhan_ibu = "";


	function cek_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	//validasi data
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		//validasi registrasi peserta didik
		$daftar = cek_input($_POST['daftar']);
		$tglmasuk = cek_input($_POST['tglmasuk']);
		
		//cek nis adalah angka
		$nis = cek_input($_POST['nis']);
		if (!is_numeric($nis)) {
			$error_nis = "NIS hanya boleh angka"; 
		}
		
		//cek nomor ujian
		if (empty($_POST['nmrujian'])) {
			$error_nmrujian = "Nomor ujian tidak boleh kosong";
		} else {
			$nmrujian = cek_input($_POST['nmrujian']);
			if (!is_numeric($nmrujian)) {
				$error_nmrujian = "Nomor ujian harus angka"; 
			}
		}
		
		$paud = cek_input($_POST['paud']);
		$tk = cek_input($_POST['tk']);
		
		//cek nomor skhu adalah angka
		$skhu = cek_input($_POST['skhu']);
		if (!is_numeric($skhu)) {
			$error_skhu = "Nomor SKHU hanya boleh angka"; 
		}
		
		//cek nomor ijazah adalah angka
		$ijazah = cek_input($_POST['ijazah']);
		if (!is_numeric($ijazah)) {
			$error_ijazah = "Nomor ijazah hanya boleh angka"; 
		}
		
		$hobi = cek_input($_POST['hobi']);
		$cita = cek_input($_POST['cita']);

		//validasi data pribadi
		//cek nama
		if (empty($_POST['nama'])) {
			$error_nama = "Nama tidak boleh kosong";
		} else {
			$nama = cek_input($_POST['nama']); 
		}
		
		$jkelamin = cek_input($_POST['jkelamin']);
		
		//cek nisn adalah angka
		$nisn = cek_input($_POST['nisn']);
		if (!is_numeric($nisn)) {
			$error_nisn = "NISN hanya boleh angka"; 
		}

		//cek nik adalah angka
		$nik = cek_input($_POST['nik']);
		if (!is_numeric($nik)) {
			$error_nik = "NIK hanya boleh angka"; 
		}

		$tmptlahir = cek_input($_POST['tmptlahir']);
		$tgllahir = cek_input($_POST['tgllahir']);
		$agama = cek_input($_POST['agama']);
		$kebutuhan = cek_input($_POST['kebutuhan']);
		$alamat = cek_input($_POST['alamat']);

		//cek kodepos adalah angka
		$kodepos = cek_input($_POST['kodepos']);
		if (!is_numeric($kodepos)) {
			$error_kodepos = "Kode pos hanya boleh angka";
		}

		$tinggal = cek_input($_POST['tinggal']);
		$transportasi = cek_input($_POST['transportasi']);

		//cek nomer HP adalah angka
		$hp = cek_input($_POST['hp']);
		if (!is_numeric($hp)) {
			$error_hp = "Nomor HP hanya boleh angka";
		}

		//cek nomer telp adalah angka
		$telp = cek_input($_POST['telepon']);
		if (!is_numeric($telp)) {
			$error_telp = "Nomor Telp hanya boleh angka";
		}

		$email = cek_input($_POST['email']);
		$statuskip = cek_input($_POST['statuskip']);

		//cek kip adalah angka
		$kip = cek_input($_POST['kip']);
		if (!is_numeric($kip)) {
			$error_kip = "Nomor KIP hanya boleh angka";
		}

		$warga = cek_input($_POST['warga']);

		//validasi data ayah kandung
		if (empty($_POST['ayah'])) {
			$error_ayah = "Nama ayah tidak boleh kosong";
		} else {
			$ayah = cek_input($_POST['ayah']);
		}

		$tahun_ayah = cek_input($_POST['tahun_ayah']);
		$pendik_ayah = cek_input($_POST['pendik_ayah']);
		$pekerjaan_ayah = cek_input($_POST['pekerjaan_ayah']);
		$hasil_ayah = cek_input($_POST['hasil_ayah']);
		$kebutuhan_ayah = cek_input($_POST['kebutuhan_ayah']);

		//validasi data ibu kandung
		if (empty($_POST['ibu'])) {
			$error_ibu = "Nama ibu tidak boleh kosong";
		} else {
			$ibu = cek_input($_POST['ibu']);
		}

		$tahun_ibu = cek_input($_POST['tahun_ibu']);
		$pendik_ibu = cek_input($_POST['pendik_ibu']);
		$pekerjaan_ibu = cek_input($_POST['pekerjaan_ibu']);
		$hasil_ibu = cek_input($_POST['hasil_ibu']);
		$kebutuhan_ibu = cek_input($_POST['kebutuhan_ibu']);
	}

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