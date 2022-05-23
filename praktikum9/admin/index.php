<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LOGIN</title>
	<style type="text/css">
		*{
			font-family: fantasy;
		}
	</style>
</head>
<body>
	<!--Header tulisan -->
	<div align="center">
		<h2>LOGIN FORM</h2>
	</div>

	<!-- Header biru -->
	<div style="background-color: skyblue; ">
		<h3>Masukkan Data Anda</h3>
	</div>

	<form method="POST" action="masuk_login.php">
		
		<!-- label & textbox -->
		<table width="400" cellpadding="2" cellspacing="2">
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
					Password
				</td>
				<td>
					<input type="text" name="pass">
				</td>
			</tr>
		</table>

		<!-- button -->
		<div>
			<input type="submit" name="submit" value="SUBMIT">
			<a href="kontak.php"><input type="button" name="kontak" value="REGIST"></a>
		</div>
	</form>
</body>
</html>