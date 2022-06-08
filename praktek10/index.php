<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
</head>
<body>

	<!-- Header Tulisan -->
	<div align="center">
		<h2>SIGN UP</h2>
	</div>

	<!-- Header Blok-->
	<div style="background-color: skyblue; color: white;">
		<h3>Silahkan Isi Data Anda</h3>
	</div>

	<form method="POST" action="simpan_alumni.php">
		
		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td width="150">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="150">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="150">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="150">Angkatan</td>
				<td><input type="text" name="angkatan"></td>
			</tr>
			<tr>
				<td width="150">Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td width="150">Username</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td width="150">Password</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td width="200">
					<input type="submit" name="submit" value="SUBMIT">
					<input type="reset" name="reset" value="RESET">
					<a href="login.php"><input type="button" name="login" value="LOGIN"></a>
				</td>
			</tr>
		</table>

	</form>

</body>
</html>