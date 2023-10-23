<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

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
			<li class="active">
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
					<h1>Account Settings</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Admin </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Settings</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
				<?= $this->session->flashdata('message'); ?>
					<div class="head">
						<h3>Account Information</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<tr>
							<td>Nama</td>
							<td width="20px">:</td>
							<td><?= $compareData["nama"]; ?></td>
						</tr>
						<tr>
							<td>NIP</td>
							<td>:</td>
							<td><?= $compareData["nip"]; ?></td>
						</tr>
						<tr>
							<td>NIK</td>
							<td>:</td>
							<td><?= $compareData["nik"]; ?></td>
						</tr>
						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td><?= $compareData["jabatan"]; ?></td>
						</tr>
						<tr>
							<td>Role</td>
							<td>:</td>
							<td><?= $compareData["role"]; ?></td>
						</tr>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Change Password?</h3>
						<i class='bx bx-edit' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="body">
					<form action="<?= base_url('Admin/setting'); ?>" method="post">
                                    <label for="password"> Kata Sandi Lama *</label> <br>
                                    <input style="border: none; border-radius: 5px; width: 100%; padding: 10px; background-color: lavender;" type="password"
                                        name="password" id="password">
                                        <?= form_error('password', '<small style="color: red;"><i>', '</i></small>'); ?>  <br> <br>
									<label for="password1"> Kata Sandi Baru *</label> <br>
                                    <input style="border: none; border-radius: 5px; width: 100%; padding: 10px; background-color: lavender;" type="password"
                                        name="password1" id="password">  
                                        <?= form_error('password1', '<small style="color: red;"><i>', '</i></small>'); ?> <br> <br>
									<label for="password2"> Ulangi Kata Sandi Baru *</label> <br>
									<input style="border: none; border-radius: 5px; width: 100%; padding: 10px; background-color: lavender;" type="password"
                                        name="password2" id="password">  <br> <br>
									<button type="submit" style="border: none; border-radius: 5px; width: 100%; padding: 10px; background-color: #3C91E6; color: white; font-size: 18px;"><b>Ganti Password</b></button>
          			</form>
                    </div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?= base_url('assets/js/script.js'); ?>"></script>
</body>
</html>