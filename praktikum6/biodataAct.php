<?php  

$time = date('l, d-m-Y H:i:s');

if (empty($_POST['name'])) {
	header("Location:kosongs.php");
} else {
	echo "<center> BIODATA FORM";
	echo "<br><br>";
	echo "<center> Nama : ".$_POST['name']." <center><br>";
	echo "<center> TTL : ".$_POST['tempat']." <center><br>";
	echo "<center> Umur : ".$_POST['umur']." <center><br>";
	echo "<center> Alamat : ".$_POST['alamat']." <center><br>";
	echo "<center> Pekerjaan : ".$_POST['pekerjaan']." <center><br>";
	echo "<center> No.HP : ".$_POST['nomer']." <center><br>";
	echo "<center> Gol.Darah : ".$_POST['darah']." <center><br>";
	echo "<center> Dibuat pada :  ".$time."<center><br>";
}

?>