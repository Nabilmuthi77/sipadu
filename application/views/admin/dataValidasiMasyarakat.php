<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i> 
			<span class="text">Admin Sipadu</span>
		</a>
		<ul class="side-menu top">
			<li>
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
			<li class="active">
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
				<a href="#" class="logout">
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
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
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
					<h1>Validasi Masyarakat</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Data Validasi Masyarakat</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Kelola Validasi Masyarakat</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
						<tr>
								<th width="110px">Nama</th>
								<th style="padding-left: 20px;">NIK</th>
								<th width="100px">Bukti KTP</th>
								<th style="padding-left: 20px;">Jenis Kelamin</th>
								<th style="padding-left: 20px;">Nomor WA</th>
								<th style="padding-left: 20px;">Validasi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nabil Muthi Maulani</td>
								<td style="padding-left: 20px;">3210909090999</td>
								<td>
								<div style="padding-left: 15px;">
								<img src="<?= base_url("/assets/gambar/nabil.jpg"); ?>">
								</div>
							</td>
								<td style="padding-left: 20px;">Laki-laki</td>
								<td style="padding-left: 20px;">082258941501</td>
								<td><span class="status completed">Terima</span> <span class="status pending">Tolak</span></td>
							</tr>
							<tr>
								<td>Rio Adrian Putra</td>
								<td style="padding-left: 20px;">3210909090999</td>
								<td>
								<div style="padding-left: 15px;">
								<img src="<?= base_url("/assets/gambar/hj.jpeg"); ?>">
								</div>
							</td>
								<td style="padding-left: 20px;">Laki-laki</td>
								<td style="padding-left: 20px;">082258941501</td>
								<td><span class="status completed">Terima</span> <span class="status pending">Tolak</span></td>
							</tr>
							<tr>
								<td>Ayu Adriana Putri</td>
								<td style="padding-left: 20px;">3210909090999</td>
								<td>
								<div style="padding-left: 15px;">
								<img src="<?= base_url("/assets/gambar/hj.jpeg"); ?>">
								</div>
							</td>
								<td style="padding-left: 20px;">Perempuan</td>
								<td style="padding-left: 20px;">082258941501</td>
								<td><span class="status completed">Terima</span> <span class="status pending">Tolak</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?= base_url('assets/js/script.js'); ?>"></script>
</body>
</html>