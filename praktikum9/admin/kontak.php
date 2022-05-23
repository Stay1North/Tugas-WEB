<!DOCTYPE html>
<html>
<head>
	<title>KONTAK</title>
	<style type="text/css">
		* {
			font-family: fantasy;
		}
	</style>
</head>
<body>
	
	<!-- Header tulisan -->
	<div align="center">
		<h2>FORM CONTACT</h2>
	</div>

	<!-- Header hitam -->
	<div style="background-color: black; color: white;">
		<h3>Isi Form Registrasi Di Bawah Ini</h3>
	</div>

	<form method="POST" action="simpan_kontak.php">
		
		<!-- label & textbox -->
		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td width="150">
					Nama
				</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td width="150">
					Jenis Kelamin
				</td>
				<td>
					<select name="jkel">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="150">
					Email
				</td>
				<td>
					<input type="text" name="email">
				</td>
			</tr>
			<tr>
				<td width="150">
					Alamat
				</td>
				<td>
					<input type="text" name="alamat">
				</td>
			</tr>
			<tr>
				<td width="150">
					Kota
				</td>
				<td>
					<input type="text" name="kota">
				</td>
				<td width="200">
					*digunakan sebagai password
				</td>
			</tr>
			<tr>
				<td width="150">
					Pesan
				</td>
				<td>
					<input type="text" name="pesan">
				</td>
			</tr>
		</table>

		<!-- button -->
		<div> 
			<input type="submit" name="submit" value="SUBMIT">
			<input type="reset" name="reset" value="RESET">
			<a href="index.php"><input type="button" name="login" value="LOGIN"></a>
		</div>
	</form>

</body>
</html>