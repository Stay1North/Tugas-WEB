<?php 
	include "koneksi.inc.php";

	//variabel connect database
	$conn = mysqli_connect($host, $user, $pass, $db);

	//mengeksekusi query
	$sql = "SELECT * FROM kontak ORDER BY id";
	$query = mysqli_query($conn, $sql) or die("Failed read data");

	//menampilkan hasil query dengan tabel
	echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Email</th>
		<th>Alamat</th>
		<th>Kota</th>
		<th>Pesan</th>";

	$no = 1;
	
	//memasukkan data dari database ke dalam tabel
	while ($hasil=mysqli_fetch_row($query)) {
		echo "<tr>
				<td>$no</td>
				<td>$hasil[0]</td>
				<td>$hasil[1]</td>
				<td>$hasil[2]</td>
				<td>$hasil[3]</td>
				<td>$hasil[4]</td>
				<td>$hasil[5]</td>
				<td>$hasil[6]</td>
				</tr>
		";
		$no++;
	}
	echo "</table>";
 ?>
 <a href="index.php"><input type="button" name="kembali" value="KEMBALI"></a>