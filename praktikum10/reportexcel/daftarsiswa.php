<!DOCTYPE html>
<html>
<head>
	<title>FORM PENDAFTARAN SISWA</title>
</head>
<body>
	<!-- Header Tulisan -->
	<div align="center">
		<h2>PENDAFTARAN SISWA BARU</h2>
	</div>
	<!-- Header Blok Warna -->
	<div style="background-color: skyblue; color: black;">
		<h3>Silahkan Masukkan Data</h3>
	</div>
	<!-- label, textbox, dan button -->
	<form method="POST" action="simpansiswa.php">

		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="SUBMIT">
					<input type="reset" name="reset" value="RESET">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>