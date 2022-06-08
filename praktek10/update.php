<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DATA</title>
</head>
<body>

	<div align="center">
		<h2>UPDATE DATA</h2>
	</div>

	<div style="background-color: orange; color: white">
		<h3>Masukkan Nama Lengkap</h3>
	</div>

	<form method="POST" action="simpan_update.php">
		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td width="100">Nama</td>
				<td>
					<input type="text" name="namalengkap">
				</td>
			</tr>
		</table>

		<div style="background-color: orange; color: white;">
			<h3>Masukkan Data Baru</h3>
		</div>

		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="ubahnama">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="ubahemail">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="ubahalamat">
				</td>
			</tr>
			<tr>
				<td>Tahun Lulus</td>
				<td>
					<input type="text" name="ubahlulus">
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>
					<input type="text" name="ubahkerja">
				</td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td>
					<textarea name="ubahpesan"></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="SUBMIT"></td>
				<td>
					<input type="reset" name="reset" value="RESET">
					<a href="cetakpesan.php"><input type="button" name="pesan" value="LIST PESAN"></a>
				</td>
			</tr>
		</table>
	</form>

	

</body>
</html>