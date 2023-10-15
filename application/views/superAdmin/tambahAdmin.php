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

    <div class="container">
        <div class="row vh-100">
            <div class="col-lg-5 mx-auto my-auto">
                <div class="card bg-dark">
                    <div class="card-header text-white">
                        <b> Tambah Admin Form </b>
                    </div>
                    <div class="card-body">
                            <form class="user" method="post" action="<?= base_url('SuperAdmin/tambahAdmin'); ?>">
                                <div class="form-group mb-2">
                                    <label for="nama" class="text-white py-1"> Nama Lengkap *</label>
                                    <input class="form-control py-2" type="text" placeholder="Nama Lengkap"  name="nama" id="nama" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="nik" class="text-white py-1"> NIK *</label>
                                    <input class="form-control py-2" type="text"
                                        placeholder="Nomor Induk Kependudukan" name="nik" id="nik" value="<?= set_value('nik'); ?>">
                                        <?= form_error('nik', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="jabatan" class="text-white py-1"> Jabatan *</label>
                                    <input class="form-control py-2" type="text" placeholder="Jabatan" name="jabatan" id="jabatan" value="<?= set_value('jabatan'); ?>">
                                        <?= form_error('jabatan', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="nip" class="text-white py-1"> NIP *</label>
                                    <input class="form-control py-2" type="text"
                                        placeholder="Nomor Induk Pegawai" name="nip" id="nip" value="<?= set_value('nip'); ?>">
                                        <?= form_error('nip', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="password" class="text-white py-1"> Buat Kata Sandi *</label>
                                    <input class="form-control py-2" type="password" placeholder="Masukkan Kata Sandi"
                                        name="password">
                                        <?= form_error('password', '<small class="text-white pl-3">', '</small>'); ?>
                                </div>
                        <div class="mt-5 mb-2">
                            <button type="submit" class="btn btn-primary w-100">Tambah Admin</button>
                        </div>
                    </form>
                    </div>
            </div>


        </div>
    </div>
</body>