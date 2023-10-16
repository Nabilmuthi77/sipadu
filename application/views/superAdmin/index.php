<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <style>
        a {
            text-decoration: none;
            color: black;
        }
        .hitam a:hover {
            color: grey;
        }
        /* background-image: url(<?= base_url('assets/gambar/bg.jpg'); ?>); */
        .element-dengan-background {
            background-image: url('https://sitabah.kesrajabar.id/assets/images/bg.png');
            background-size: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>

<body class="element-dengan-background">

    <section class="container mt-3 text-center" id="kelola">
        <div class="row w-50 mx-auto">
        <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="row d-flex justify-content-center py-2">
            <div class="col-lg-3 mb-2">
                <div class="bg-white p-1 text-start rounded-4">
                    <h2 class="text-center">Navigasi</h2>
                    <ul class="hitam">
                        <li><a href="#daftarAdmin"> Lihat Daftar Admin </a></li>
                        <li>
                            <a href="<?= base_url('SuperAdmin/tambahAdmin'); ?>">
                                Tambah Admin Baru</a>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="<?= base_url('AuthAdmin/logout'); ?>" class="badge bg-dark text-white w-75 mb-2">Logout</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white p-2 rounded-4 mb-2" id="daftarAdmin">
                    <h2>Daftar Admin</h2>
                    <p>Berikut Daftar Admin SIPADU :</p>
                    <table class="table bg-dark text-white text-center rounded-4">
                        <tr class="">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                        $no = 1;
                        foreach($administrator as $admin) { 
                        if ($admin['role'] == 'admin') {?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $admin['nama']; ?></td>
                            <td><?= $admin['jabatan']; ?></td>
                            <td><a href="<?= base_url('SuperAdmin/hapusAdmin/') . $admin['id']; ?>" class="badge bg-danger">Hapus Admin</a></td>
                        </tr>
                        <?php }} ?>
                    </table>
                </div>
            </div>

        </div>
    </section>


    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>