<!DOCTYPE html>
<html>
<head>
	<title>BIODATA FORM</title>
	<style type="text/css">
		h2	{
			font-size: 30px;
			font-family: sans-serif;
			text-align: center;
		}
	</style>
</head>
<body>
	<form method="POST" action="biodataAct.php">
		<h2>BIODATA FORM</h2>
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td width="130">TTL</td>
				<td><input type="text" name="tempat"></td>
			</tr>
			<tr>
				<td width="130">Umur</td>
				<td><input type="text" name="umur"></td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td width="130">No.HP</td>
				<td><input type="text" name="nomer"></td>
			</tr>
			<tr>
				<td width="130">Gol.Darah</td>
				<td><input type="text" name="darah"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnSubmit" value="Submit">
					<input type="reset" name="Reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>