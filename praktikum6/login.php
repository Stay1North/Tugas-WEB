<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<style type="text/css">
		h2 {
			font-size: 30px;
			font-family: sans-serif;
		}
	</style>
</head>
<body>
	<form method="POST" action="loginAct.php">
		<h2 align="center">LOGIN FORM</h2>
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="Reset" value="Reset">
				</td>
				
			</tr>

		</table>
	</form>
</body>
</html>