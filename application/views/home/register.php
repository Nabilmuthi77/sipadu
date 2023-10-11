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

    <section class="container-fluid fixed-top" style="z-index: 1;">

        <div class="header p-4">
            <a href="https://sitabah.kesrajabar.id">
                <img src="<?= base_url("/assets/gambar/logo.png"); ?>" width="200">
            </a>
        </div>

    </section>

    <div class="container">
        <div class="row vh-100">
            <div class="col-lg-8 mx-auto my-auto">
                <div class="card" style="background-color: rgba(249, 249, 252, .2);">
                    <div class="card-header text-white">
                        <b> Registration Form </b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                            <form class="user" method="post" action="<?= base_url('home/register'); ?>" enctype="multipart/form-data">
                                <div class="form-group mb-2">
                                    <label for="nama" class="text-white py-1"> Nama Lengkap *</label>
                                    <input class="form-control py-2" type="text" placeholder="Nama Lengkap"
                                        name="nama" id="nama">
                                        <?= form_error('nama', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="nik" class="text-white py-1"> NIK *</label>
                                    <input class="form-control py-2" type="text"
                                        placeholder="Nomor Induk Kependudukan" name="nik" id="nik">
                                        <?= form_error('nik', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="wa" class="text-white py-1"> Nomor WhatsApp *</label>
                                    <input class="form-control py-2" type="text" placeholder="Nomor WhatsApp (Aktif)"
                                        name="wa" id="wa">
                                        <?= form_error('wa', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="password" class="text-white py-1"> Buat Kata Sandi *</label>
                                    <input class="form-control py-2" type="password" placeholder="Masukkan Kata Sandi"
                                        name="password">
                                        <?= form_error('password', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                            </div>



                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="camera" class="text-white py-1"> Upload Foto Selfie dengan KTP * </label>
                                    <input type="file" accept="image/*;capture=gallery" class="form-control text-black mb-1" id="camera" name="selfie" required>
                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="date" class="text-white py-1"> Tanggal Lahir *</label>
                                    <input class="form-control py-2" type="date" id="date" name="tgl_lahir">
                                    <?= form_error('tgl_lahir', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group mb-2 text-white">
                                    <label for="jk" class="py-1">Jenis Kelamin * </label> <br>
                                    <input type="radio" name="jenisKelamin" value="Laki-Laki" id="jk"
                                        class="form-check-input"> Laki-Laki
                                    <input type="radio" name="jenisKelamin" value="Perempuan"
                                        class="form-check-input"> Perempuan <br>
                                    <?= form_error('jenisKelamin', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group mb-2 text-white">
                                    <label for="alamat" class="py-1">Alamat * </label>
                                    <textarea name="alamat" row="5" col="20" id="alamat"
                                        class="form-control text-black" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
                                    <?= form_error('alamat', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-100">Daftar Aplikasi</button>
                        </div>
                    </form>
                        <p class="py-1 text-white text-center pb-2"> Sudah Mempunyai Akun ? <a href="<?= base_url(); ?>"
                                class="text-white text-mobile"><b>Login Akun !</b></a></p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <footer class="container-fluid fixed-bottom" style="z-index: 1;">
        <div class="text-white p-4">
            <img src="https://sitabah.kesrajabar.id/assets/images/jabar.png" width="25">
            Copyright © 2023 Biro Kesra Pemerintahan Provinsi Jawa Barat .
        </div>
    </footer>
</body>