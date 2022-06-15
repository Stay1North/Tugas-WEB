<?php  

include ('koneksicovid.php');

$country = mysqli_query($conn, "SELECT * from tb_recover");

while ($row = mysqli_fetch_array($country)) {
	$nama_negara[] = $row['country'];

	$query = mysqli_query($conn, "SELECT SUM(newcases) as newcases from tb_recover WHERE id='".$row['id']."'");
	$row = $query->fetch_array();
	$baru_kasus[] = $row['newcases'];
}

?>

<!doctype html>
<html>
 
<head>
	<title>Pie Chart</title>
	<script type="text/javascript" src="chart.js"></script>
</head>
 
<body>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($baru_kasus); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(260, 99, 132, 0.2)',
					'rgba(70, 162, 235, 0.2)',
					'rgba(275, 206, 86, 0.2)',
					'rgba(95, 192, 192, 0.2)',
					'rgba(235, 99, 132, 0.2)',
					'rgba(64, 162, 235, 0.2)',
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(260, 99, 132, 1)',
					'rgba(70, 162, 235, 1)',
					'rgba(275, 206, 86, 1)',
					'rgba(95, 192, 192, 1)',
					'rgba(235, 99, 132, 1)',
					'rgba(64, 162, 235, 1)',
					],
					label: 'Presentase Kasus Baru Covid'
				}],
				labels: <?php echo json_encode($nama_negara); ?>},
			options: {
				responsive: true
			}
		};
 
		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
 
	</script>
</body>
 
</html>