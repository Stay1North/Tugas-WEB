<!DOCTYPE html>
<html>
<head>
	<title>PESAN ALUMNI</title>
</head>
<body>

<?php  

$user = $_GET['user'];

$datenow = date("D, d-M-y");

echo "<center>Selamat Datang ".$user." pada ".$datenow."<center>";
echo "<center>Silahkan Masukkan Pesan Anda<center>";
?>

<!-- label, textbox, dan button -->
<form method="POST" action="simpan_pesan.php">
	
	<table width="400" cellpadding="2" cellspacing="2">
		<tr>
			<td width="150">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="150">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td width="150">Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td width="150">Tahun Lulus</td>
			<td><input type="text" name="lulus"></td>
		</tr>
		<tr>
			<td width="150">Pekerjaan</td>
			<td><input type="text" name="pekerjaan"></td>
		</tr>
		<tr>
			<td width="150">Pesan</td>
			<td><textarea name="pesan"></textarea></td>
		</tr>
		<tr>
			<td width="200">
				<input type="submit" name="submit" value="SUBMIT">
				<a href="cetakpesan.php"><input type="button" name="list" value="LIST PESAN"></a>
			</td>
		</tr>


	</table>

</form>



</body>
</html>