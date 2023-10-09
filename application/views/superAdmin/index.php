<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <style>
    a {
        text-decoration: none;
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
    <div class="row d-flex justify-content-center py-2">
    <div class="col-lg-3 mb-2">
            <div class="bg-white p-1 text-start rounded-4">
                <h2 class="text-center">Navigasi</h2>
                <ul>
                    <li>Lihat Daftar Admin</li>
                    <li>Tambah Admin Baru</li>
                    <li>Logout</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="bg-white p-2 rounded-4  mb-2">
                <h2>Daftar Admin</h2>
                <p>Berikut Daftar Admin SIPADU :</p>
                    <table class="table bg-dark text-white text-center rounded-4" >
                        <tr class="">
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Rindang1</td>
                        <td>31214162625456</td>
                        <td>Pengolah Data</td>
                        <td><a href="#" class="badge bg-danger">Hapus Admin</a></td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Rindang2</td>
                        <td>31214162625456</td>
                        <td>Pengolah Data</td>
                        <td><a href="#" class="badge bg-danger">Hapus Admin</a></td>
                        </tr>
                    </table>
            </div>
        </div>
        
    </div>
</section>


<script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>
</html>