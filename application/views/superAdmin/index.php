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
                        <li><a href="#daftarAdmin" class="text-dark"> Lihat Daftar Admin </a></li>
                        <li>
                            <p type="button" class="" data-bs-toggle="modal" data-bs-target="#saModal">
                                Tambah Admin Baru</p>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="badge bg-dark text-white w-75 mb-2">Logout</a>
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
                            <td style="border-bottom: none;">2</td>
                            <td style="border-bottom: none;">Rindang2</td>
                            <td style="border-bottom: none;">31214162625456</td>
                            <td style="border-bottom: none;">Pengolah Data</td>
                            <td style="border-bottom: none;"><a href="#" class="badge bg-danger">Hapus Admin</a></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="saModal" tabindex="-1" aria-labelledby="saModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="saModalLabel">Tambah Admin Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="" class="py-1"> NIK *</label>
                        <input class="form-control py-2" type="text" placeholder="Nomor Induk Kependudukan" name="username">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="py-1"> Nama *</label>
                        <input class="form-control py-2" type="text" placeholder="Input Nama Lengkap" name="username">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="py-1"> Jabatan *</label>
                        <input class="form-control py-2" type="text" placeholder="Input Jabatan" name="username">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="py-1"> NIP *</label>
                        <input class="form-control py-2" type="text" placeholder="Nomor Induk Pegawai" name="username">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="py-1"> Password *</label>
                        <input class="form-control py-2" type="password" placeholder="Password Default : BBP4D1" name="username">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambah Admin</button>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>