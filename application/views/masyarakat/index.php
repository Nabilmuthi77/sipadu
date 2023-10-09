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

<body>

    <section class="container-fluid text-white mx-auto text-center py-4 element-dengan-background">

        <img src="<?= base_url("/assets/gambar/icon_login.png"); ?>" class="img-thumbnail mb-3" width="200px">
        <h1><b> SIPADU </b></h1>
        <h2>Sistem Informasi Pelayanan Pengaduan</h2> <br>
        <h4>Balai Besar Pengujian Standar Instrument Padi</h4>
        <hr>
        <h5>Menampung Berbagai Aspirasi, Kritik, Saran Maupun Pengaduan Terhadap Pelayanan Balai Besar Pengujian Standar
            Instrument Padi </h5>
        <hr>
        <a class="mt-5 btn btn-dark w-25" href="#formulir" style="border: 2px solid white;">Formulir Pengaduan</a> <a class="mt-5 btn btn-dark  w-25" href="<?= base_url('Masyarakat/kelolaPengaduan'); ?>" style="border: 2px solid white;">Kelola Pengaduan</a>

    </section>

    <section class="container mt-3  px-5 py-2">
            <div class="row container-fluid py-2">
            <div class="col-lg-7 p-4 bg-secondary mx-auto rounded-3 mb-4" id="formulir" style="border: 5px solid black;">
                <h2 class="text-center text-white">FORMULIR PENGADUAN MASYARAKAT</h2>
                <div class="form-group mb-2">
                    <label for="" class="text-white py-1 text-left"> JUDUL *</label>
                    <input class="form-control py-2" type="text" placeholder="Tulis Judul Pengaduan....." name="username">
                </div>
                <div class="form-group mb-2">
                    <label for="" class="text-white py-1 text-left"> ISI ASPIRASI/KRITIK/SARAN/PENGADUAN *</label>
                    <textarea name="" row="8" col="20" placeholder="Tulis Isi Pengaduan....." class="form-control text-black"></textarea>
                </div>
                <a class="btn btn-primary w-100 mt-2">KIRIM</a>
            </div>
    </section>




    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>