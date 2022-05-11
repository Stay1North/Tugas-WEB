<!DOCTYPE html>
<html>
<head>
	<title>INSERT DB_EMP</title>
</head>
<body>
	<form method="POST" action="insertAct.php">
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
				<td width="130">Job_ID</td>
				<td><input type="text" name="jobid"></td>
			</tr>
			<tr>
				<td width="130">Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnInsert" value="Insert">
					<input type="reset" name="reset" value="reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>