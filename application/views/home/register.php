<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                                <div class="form-group mb-2">
                                    <label for="" class="text-white py-1"> Nama Lengkap *</label>
                                    <input class="form-control py-2" type="text" placeholder="Nama Lengkap"
                                        name="username">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="text-white py-1"> NIK *</label>
                                    <input class="form-control py-2" type="password"
                                        placeholder="Nomor Induk Kependudukan" name="username">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="text-white py-1"> Nomor WhatsApp *</label>
                                    <input class="form-control py-2" type="text" placeholder="Nomor WhatsApp (Aktif)"
                                        name="username">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="text-white py-1"> Buat Kata Sandi *</label>
                                    <input class="form-control py-2" type="password" placeholder="Masukkan Kata Sandi"
                                        name="username">
                                </div>
                            </div>



                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="pict" class="text-white py-1"> Upload Foto Selfie dengan KTP * </label>
                                    <input type="file" class="form-control text-black mb-1" id="pict" name="gambar">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="text-white py-1"> Tanggal Lahir *</label>
                                    <input class="form-control py-2" type="date" name="username">
                                </div>

                                <div class="form-group mb-2 text-white">
                                    <label for="jk" class="py-1">Jenis Kelamin * </label> <br>
                                    <input type="radio" name="rdjeniskelamin" value="Laki-Laki" id="jk"
                                        class="form-check-input"> Laki-Laki
                                    <input type="radio" name="rdjeniskelamin" value="Perempuan"
                                        class="form-check-input"> Perempuan <br>
                                    <?= form_error('rdjeniskelamin', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group mb-2 text-white">
                                    <label for="alamat" class="py-1">Alamat * </label>
                                    <textarea name="txtalamat" row="5" col="20" id="alamat"
                                        class="form-control text-black" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
                                    <?= form_error('txtalamat', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>

                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-primary w-100">Daftar Aplikasi</a>
                        </div>
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