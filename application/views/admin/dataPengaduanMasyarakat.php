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
			<li>
				<a href="<?= base_url('Admin/dataValidasiMasyarakat'); ?>">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Data Validasi Masyarakat</span>
				</a>
			</li>
			<li class="active">
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
					<h1>Data Pengaduan Masyarakat</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Data Pengaduan Masyarakat</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List Data Pengaduan</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
						<tr>
								<th width="110px">Nama</th>
								<th style="padding-left: 20px;">Judul Pengaduan</th>
								<th style="padding-left: 20px;">Isi Pengaduan</th>
								<th style="padding-left: 20px;">Status</th>
								<th style="padding-left: 20px;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nabil Muthi Maulani</td>
								<td style="padding-left: 20px;">Benih Padi diserang Hama</td>
								<td style="padding-left: 20px;">ssimos, ipsam adipisci necessitatibus ab consectetur magnam earum ipsa ea consequuntur, id beatae.</td>
								<td style="padding-left: 20px;"><span class="status process">Diproses</span></td>
								<td style="padding-left: 20px;"><span class="status completed">Selesai</span></td>
							</tr>
							<tr>
								<td>Rio Adrian Putra</td>
								<td style="padding-left: 20px;">Benih Padi Hancur</td>								
								<td style="padding-left: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati culpa minima iste non, earum hic quibusdam vitia.</td>
								<td style="padding-left: 20px;"><span class="status process">Diproses</span></td>
								<td style="padding-left: 20px;"><span class="status completed">Selesai</span></td>
							</tr>
							<tr>
								<td>Ayu Adriana Putri</td>
								<td style="padding-left: 20px;">Sawah Hijau Kuning</td>
								<td style="padding-left: 20px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. ti! Ipsa qui distinctio dolores nam optio. Voluptate temporibus facilis incidunt aliquid.</td>
								<td style="padding-left: 20px;"><span class="status process">Diproses</span></td>
								<td style="padding-left: 20px;"><span class="status completed">Selesai</span></td>
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