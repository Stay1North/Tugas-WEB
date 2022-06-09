<!DOCTYPE html>
<html>
<head>
	<title>KESAN & PESAN</title>
</head>
<body>

	<!-- Header Tulisan -->
	<div align="center">
		<h2>KESAN & PESAN</h2>
	</div>

	<!-- Header Blok -->
	<div style="background-color: green; color: white;">
		<h3>Silahkan Masukkan Pesan dan Kesan</h3>
	</div>

	<!-- label, textbox, dan button -->
	<form method="POST" action="cetak_kesan.php">
		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td>Kesan</td>
				<td>
					<textarea name="kesan"></textarea>
				</td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td>
					<textarea name="pesank"></textarea>
				</td>
			</tr>
			<tr>
				<td width="150">
					<input type="submit" name="submit" value="SUBMIT">
				</td>
				<td>
					<input type="reset" name="reset" value="RESET">
					<a href="cetakpesan.php"><input type="button" name="pesan" value="LIST PESAN"></a>
				</td>
			</tr>
		</table>


	</form>

</body>
</html>