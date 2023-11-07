<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/modal.css'); ?>">

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
					<?= $this->session->flashdata('message'); ?>
					<div class="head">
						<h3>Kelola Validasi Masyarakat</h3>
					</div>
					<table>
						<thead>
						<tr>
								<th width="110px">Nama</th>
								<th style="padding-left: 20px;">NIK</th>
								<th width="100px">Bukti KTP</th>
								<th style="padding-left: 20px;">Gender</th>
								<th style="padding-left: 20px;">Nomor WA</th>
								<th style="padding-left: 20px;">Validasi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$dataKosong = true;
							 	foreach ($masyarakat as $m) { 
									if($m['status'] == 'unverified') {
										$dataKosong = false;
							?>
    						<tr>
        						<td><?= $m['nama']; ?></td>
        						<td style="padding-left: 20px;"><?= $m['nik']; ?></td>
        						<td>                               
            						<!-- Trigger the Modal -->
            						<img class="myImg" src="<?= base_url("/assets/gambar/". $m['selfie']); ?>" style="width:80%;max-width:300px;">

            						<!-- The Modal -->
            						<div class="modal">
                						<!-- The Close Button -->
                						<span class="close">X</span>
                						<!-- Modal Content (The Image) -->
                						<img class="modal-content">
            						</div>
        						</td>
        						<td style="padding-left: 20px;"><?= $m['gender']; ?></td>
        						<td style="padding-left: 20px;"><?= $m['wa']; ?></td>
        						<td>
									<a href="<?= base_url('Admin/terima/') . $m['id']; ?>" class="status completed">Terima</a>
									<a href="<?= base_url('Admin/tolak/') . $m['id']; ?>" class="status pending">Tolak</a>
        						</td>
    						</tr>
    						<?php }} ?>
							
							<?php if ($dataKosong) { ?>
								<tr>
            						<th colspan="6" style="text-align: center; padding: 20px;"><h1>Data Kosong!</h1></th>
        						</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?= base_url('assets/js/script.js'); ?>"></script>
	<script src="<?= base_url('assets/js/modal.js'); ?>"></script>
</body>
</html>