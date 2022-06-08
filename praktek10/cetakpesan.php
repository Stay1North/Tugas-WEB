<?php 
	include "koneksi.inc.php";

	//variabel connect database
	$conn = mysqli_connect($host, $user, $pass, $db);

	//mengeksekusi query
	$sql = "SELECT * FROM pesanalumni ORDER BY id";
	$query = mysqli_query($conn, $sql) or die("Failed read data");

	//menampilkan hasil query dengan tabel
	echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>Posted</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Alamat</th>
		<th>Tahun Lulus</th>
		<th>Pekerjaan</th>
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
				<td>$hasil[7]</td>
				</tr>
		";
		$no++;
	}
	echo "</table>";
 ?>
 <a href="index.php"><input type="button" name="kembali" value="KEMBALI"></a>
 <a href="update.php"><input type="button" name="update" value="UPDATE"></a>
 <a href="delete.php"><input type="button" name="delete" value="DELETE"></a>
 <a href="kesan.php"><input type="button" name="kesan" value="KESAN & PESAN"></a>