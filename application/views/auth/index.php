<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
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




    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-7 vh-100">

                <section class="container-fluid fixed-top" style="z-index: 1;">

                    <div class="header p-4">
                        <a href="https://sitabah.kesrajabar.id">
                            <img src="<?= base_url("/assets/gambar/logo.png"); ?>" width="200">
                        </a>
                    </div>

                </section>


                <section class="d-flex justify-content-center align-items-center vh-100">

                    <div class="header p-4 mt-5">
                        <h3 class="text-white"> Selamat Datang Di Aplikasi SIPADU ! </h3>
                        <br>
                        <h5 class="text-white">
                            Sistem Tata Kelola Hibah (SIPADU) adalah suatu sistem informasi berbasis web yang memerlukan
                            layanan internet untuk menjalankan fungsi sebagai sistem informasi yang mengelola data hibah
                            di lingkungan Pemerintah Provinsi Jawa Barat.
                        </h5>
                    </div>

                </section>


                <footer class="container-fluid fixed-bottom" style="z-index: 1;">
                    <div class="text-white p-4">
                        <img src="https://sitabah.kesrajabar.id/assets/images/jabar.png" width="25">
                        Copyright © 2023 Biro Kesra Pemerintahan Provinsi Jawa Barat .
                    </div>
                </footer>

            </div>





            <div class="col-lg-5  vh-100" style="z-index: 2; background-color: rgba(249, 249, 252, .2);">

                <section class="container mt-5 py-2">

                    <div class="d-flex justify-content-center mt-2 py-4">
                        <img src="<?= base_url("/assets/gambar/icon_login.png"); ?>" width="150">
                    </div>

                    <div class="text-white text-center py-1">
                        <h5><b> Aplikasi Sistem Informasi Pelayanan Pengaduan (SIPADU) </b></h5>
                    </div>
                    <?= $this->session->flashdata('message'); ?>

                </section>


                <section class="container py-2 mb-4">
                <form method="post" action="<?= base_url('Auth'); ?>">
                    <div class="form-group mb-3">
                        <input class="form-control py-2" type="text" placeholder="Nomor Induk Kependudukan"
                            name="nik" value="<?= set_value('nik'); ?>">
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-5">
                        <input class="form-control py-2" type="password" placeholder="Kata Sandi"
                            name="password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mt-3">
                    <button type="submit" class="btn btn-primary w-100 text-white">Login Aplikasi</button>
                    </div>
                    </form>
                    <p class="py-1 text-white text-center pb-2"> Belum Mempunyai Akun ? <a href="<?= base_url('Auth/register'); ?>" class="text-white text-mobile"><b>Pendaftaran Akun !</b></a></p>
                </section>

            </div>







        </div>
    </div>



    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>