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

    <section class="container-fluid mt-3  py-2 mb-5">
            <div class="row container mx-auto">
            <div class="col-lg-7 p-3 bg-white mx-auto rounded-3" id="formulir" style="box-shadow: -1px -1px 6px rgba(57, 57, 57, .3), 8px 8px 8px rgb(225, 225, 225);">
                <hr>
                <h2 class="text-center" >FORMULIR PENGADUAN <br> MASYARAKAT</h2>
                <hr>
                <form method="post" action="<?= base_url('Masyarakat') ?>">
                <div class="form-group my-3">
                    <label for="" class="text-dark py-1 text-left"> JUDUL *</label>
                    <input class="form-control py-2" type="text" placeholder="Tulis Judul Pengaduan....." name="judul" value="<?= set_value('judul'); ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3"> <i>', '</i> </small>'); ?>
                </div>
                <div class="form-group mb-2">
                    <label for="" class="text-dark py-1 text-left"> ISI SARAN/KRITIK/PENGADUAN *</label>
                    <textarea name="isi" row="8" col="20" placeholder="Tulis Isi Pengaduan....." class="form-control text-black"><?= set_value('isi'); ?></textarea>
                    <?= form_error('isi', '<small class="text-danger pl-3"> <i>', '</i> </small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">KIRIM</button>
            </div>
            </form>
    </section>




    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>