
<!DOCTYPE html>
<html>
<head>
	<title>KESAN DAN PESAN</title>
</head>
<body>

	<div align="center">
		<h2>KESAN DAN PESAN</h2>
	</div>

	<div style="background-color: green; color: white;">
		<h3>Output Kesan dan Pesan</h3>
	</div>

	<?php 
		$vkesan = $_POST['kesan'];
		$vpesan = $_POST['pesank'];

		echo "<center>".$vkesan."<center>";
		echo "<center>".$vpesan."<center>";
		echo "<br><br>";
	?>
	<a href="kesan.php"><input type="button" name="kembali" value="KEMBALI"></a>


</body>
</html>