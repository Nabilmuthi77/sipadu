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
        <a class="mt-5 btn btn-dark w-25" href="<?= base_url('Masyarakat'); ?>"
            style="border: 2px solid white;">Formulir Pengaduan</a> <a class="mt-5 btn btn-dark  w-25" href="#kelola"
            style="border: 2px solid white;">Kelola Pengaduan</a>

    </section>

    <section class="container mt-3 text-center" id="kelola">
        <div class="row d-flex justify-content-center py-2">
            <div class="col-lg-3 mb-2 text-white">
                <div class="bg-secondary p-1 text-start rounded-4">
                    <h2 class="text-center">Navigasi</h2>
                    <ul>
                        <li><a href="#kelola" class="text-white">Lihat Daftar Pengaduan </a></li>
                        <li><a href="<?= base_url('Masyarakat'); ?>" class="text-white">Buat Pengaduan Baru</a></li>
                        <li>Logout</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 text-white">
                <div class="bg-secondary p-2 rounded-4  mb-2" id="kelola">
                    <h2>Daftar Pengaduan</h2>
                    <p>Berikut Daftar Laporan Pengaduan Anda :</p>
                    <hr>
                    <table class="table bg-dark text-white text-center rounded-4">
                        <tr>
                            <td width="120px">Tanggal</th>
                            <td>-/-/-</td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>Example</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>Example</td>
                        </tr>
                        <tr>
                            <td>Konten / isi</td>
                            <td>Example</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-end" style="border-bottom: none; "><a href="#" class="badge bg-danger"> Hapus
                                    Pengaduan</a></td>
                        </tr>
                    </table>
                    <hr>
                    <table class="table bg-dark text-white text-center rounded-4">
                        <tr class="">
                            <td width="120px">Tanggal</td>
                            <td>-/-/-</td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>Example</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>Example</td>
                        </tr>
                        <tr>
                            <td>Konten / isi</td>
                            <td>Example</td>
                        </tr>
                        <tr>
                        <td colspan="2" class="text-end" style="border-bottom: none; "><a href="#" class="badge bg-danger"> Hapus
                                    Pengaduan</a></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </section>




    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>