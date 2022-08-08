<?= $this->include('FirstDistrict/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('FirstDistrict/include/nav')?>
  <?= $this->include('FirstDistrict/include/sidebar')?>


	<body>
		<div class="container">
			<div id="columnGraph" style="height: 600px; width: 100%"></div>
		</div>


		<script>
			google.charts.load('visualization', "1", {
				packages: ['corechart']
			});

			function initGraph() {
				var data = google.visualization.arrayToDataTable([
					['Day', 'Client count'],
					<?php foreach($usersData as $row) {
						echo "['".$row['month']."',".$row['town']."],";
					} ?>
				]);

				var options = {
					title: 'Client by Municipality per Month',
					isStacked: true
				};

				var chart = new google.visualization.ColumnChart(document.getElementById('columnGraph'));
				chart.draw(data, options);
			}
			google.charts.setOnLoadCallback(initGraph);
		</script>

	</body>


	<?= $this->include('FirstDistrict/include/end') ?>
