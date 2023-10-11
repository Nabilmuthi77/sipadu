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


<section class="container bg-danger p-2 vh-100">
    <div class="col-lg-7 bg-warning p-2 mx-auto my-auto">
<form method="post" action="<?= base_url('home'); ?>">
                    <div class="form-group mb-3">
                        <input class="form-control py-2" type="text" placeholder="Nomor Induk Pegawai"
                            name="nip" value="<?= set_value('nip'); ?>">
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
</div>
</section>


<script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>