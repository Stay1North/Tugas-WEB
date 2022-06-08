<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

	<!-- Header Tulisan-->
	<div align="center">
		<h2>LOGIN</h2>
	</div>

	<!-- Header Blok -->
	<div style="background-color: black; color: white;">
		<h3>Silahkan Masukkan Data Anda</h3>
	</div>

	<form action="loginpesan.php" method="POST">
		
		<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td width="150">Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td width="150">Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="SUBMIT"> 
					
				</td>
				<td>
					<input type="reset" name="reset" value="RESET">
					<a href="index.php"><input type="button" name="register" value="REGISTER"></a>
				</td>
			</tr>
		</table>


	</form>

</body>
</html>