<?php 

include ('koneksicovid.php');

$label = ["India", "S.Korea", "Turkey", "Vietnam", "Japan", "Iran", "Indonesia", "Malaysia", "Thailand", "Israel"];

for ($count=1; $count < 11 ; $count++) 
{ 
	$query = mysqli_query($conn, "SELECT SUM(newrecover) as newrecover from tb_recover WHERE id='$count'");
	$query1 = mysqli_query($conn, "SELECT SUM(newcases) as newcases from tb_recover WHERE id='$count'");
	$query2 = mysqli_query($conn, "SELECT SUM(newdeath) as newdeath from tb_recover WHERE id='$count'");
	$row = $query->fetch_array();
	$row1 = $query1->fetch_array();
	$row2 = $query2->fetch_array();
	$jumlah_produk[] = $row['newrecover'];
	$jumlah_kasus[] = $row1['newcases'];
	$jumlah_mati[] = $row2['newdeath'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="chart.js"></script>
</head>
<body>

		<div style="width: 800px; height: 800px;">
			<canvas id="myChart"></canvas>
		</div>

		<a href="negaraterkecil.php"><input type="button" name="Terkecil" value="TERKECIL"></a>

		<script type="text/javascript">
			
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: <?php echo json_encode($label); ?>,
					datasets:[{
						label: 'Tambahan Kesembuhan',
						data: <?php echo json_encode($jumlah_produk); ?>,
						backgroundColor: 'rgba(255, 99, 132, 0.2)',
						borderColor: 'rgba(255, 99, 132, 1)',
						borderWidth: 1
					}, {
						label: 'Tambahan Kasus',
						data: <?php echo json_encode($jumlah_kasus); ?>,
						backgroundColor: 'rgba(150, 300, 82, 0.2)',
						borderColor: 'rgba(150, 300, 82, 1)',
						borderWidth: 1
					}, {
						label: 'Tambahan Kematian',
						data: <?php echo json_encode($jumlah_mati); ?>,
						backgroundColor: 'rgba(90, 50, 300, 0.2)',
						borderColor: 'rgba(90, 50, 300, 1)',
						borderWidth: 1
					}]
				},
				options:{
					scales:{
						yAxes:[{
							ticks:{
								beginAtZero:true
							}
						}]
					}
				}
			});

		</script>

</body>
</html>