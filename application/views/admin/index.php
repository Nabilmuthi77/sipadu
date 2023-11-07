<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
	<style>
		.todo .container {
    height: 100%; /* Mengisi seluruh tinggi kontainer */
}
	</style>
	<title><?= $title; ?></title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin Sipadu</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="<?= base_url('Admin'); ?>">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('Admin/dataMasyarakat'); ?>">
					<i class='bx bxs-group' ></i>
					<span class="text">Data Masyarakat</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('Admin/dataValidasiMasyarakat'); ?>">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Data Validasi Masyarakat</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('Admin/dataPengaduanMasyarakat'); ?>">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Data Pengaduan Masyarakat</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="<?= base_url('Admin/setting'); ?>">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('AuthAdmin/logout'); ?>" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form action="#">
				<div class="form-input" style="display: none;">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a> -->
			<a href="#" class="profile">
				<img src="<?= base_url("/assets/gambar/people.png"); ?>">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Dashboard</a>
						</li>
					</ul>
				</div>
			</div>

			

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?= $cm; ?></h3>
						<p>Data Masyarakat</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-low-vision' ></i>
					<span class="text">
						<h3><?= $dt; ?></h3>
						<p>Data Pengaduan Ditinjau</p>
					</span>
				</li>				
				<li>
					<i class='bx bxs-time' ></i>
					<span class="text">
						<h3><?= $dp; ?></h3>
						<p>Data Pengaduan Diproses</p>
					</span>
				</li>	
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Rate Voting Masyarakat</h3>
					</div>
					<div class="container">
    					<canvas id="myChart"></canvas>
  					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?= base_url('assets/js/script.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
	//chart Bar
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php
            if (count($graph) > 0) {
                foreach ($graph as $data) {
                    echo "'" . $data->pelayanan . "',";
                }
            }
            ?>
        ],
        datasets: [{
            label: 'Rating Masyarakat',
            backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)'
			],
            borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(153, 102, 255)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)'
			],
			borderWidth: 1,
            data: [
                <?php
                if (count($graph) > 0) {
                    foreach ($graph as $data) {
                        echo $data->total . ", ";
                    }
                }
                ?>
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});

</script>

</body>
</html>