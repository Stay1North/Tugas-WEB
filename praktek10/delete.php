<!DOCTYPE html>
<html>
<head>
	<title>DELETE DATA</title>
</head>
<body>

	<div align="center">
		<h2>DELETE DATA</h2>
	</div>

	<div style="background-color: red; color: white;">
		<h3>Masukkan Nama yang Ingin Dihapus</h3>
	</div>

	<form method="POST" action="simpan_delete.php">
		
		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="hapusnama">
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