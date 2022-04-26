<?php  

$time = date('l, d-m-Y H:i:s', time());

if (empty($_POST['nama']) || empty($_POST['email'])) {
	header("Location:kosongs.php");
} else {
	echo "<center> LOGIN FORM";
	echo "<br><br>";
	echo "<center> Nama : ".$_POST['nama']." <center><br>";
	echo "<center> Email : ".$_POST['email']." <center><br>";
	echo "<center> Login pada :  ".$time."<center><br>";
}
?>