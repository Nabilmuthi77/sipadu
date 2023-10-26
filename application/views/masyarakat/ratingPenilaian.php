<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <style>
    a {
        text-decoration: none;
        color: white;
    }

    .radio-group {
        display: flex;
        justify-content: center;
    }

    .star-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
    text-align: center; /* Untuk mengatur teks ke tengah */
}

.star-label {
    color: green;
    font-size: 20px; /* Ubah ukuran font label sesuai kebutuhan */
    cursor: pointer;
    margin-top: 5px; /* Jarak antara bintang dan label */
}


/* Style for radio buttons, you can use images for stars */
input[type="radio"] {
    display: none;
    /* Sembunyikan tombol radio default */
}

input[type="radio"]+label::before {
    content: "★";
    font-size: 80px; /* Ubah ukuran bintang sesuai kebutuhan */
    color: green;
    /* Ubah warna bintang sesuai kebutuhan */
}


    /* Style untuk label tombol radio yang terpilih */
    input[type="radio"]:checked+label::before {
        color: gold;
        /* Ubah warna bintang yang terpilih */
    }
    </style>
</head>

<body>
    <section class="container bg-dark vh-100">
        <div class="row bg-danger mx-auto vh-100">
            <div class="col-lg-7 bg-success mx-auto d-flex align-items-center">
                <div class="card border-success mb-3 mx-auto">
                    <div class="card-header bg-transparent border-success">
                        <h2 class="text-center">Kasih Rating Penilaian?</h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="#">
                            <div class="radio-group">
                                <div class="star-container">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5" class="star-label">Sangat Puas</label>
                                </div>

                                <div class="star-container">
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4" class="star-label">Cukup Puas</label>
                                </div>

                                <div class="star-container">
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" class="star-label">Puas</label>
                                </div>

                                <div class="star-container">
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2" class="star-label">Tidak Puas</label>
                                </div>

                                <div class="star-container">
                                    <input type="radio" id="star1" name="rating" value="2" />
                                    <label for="star1" class="star-label">Kurang Puas</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-success text-center">
                        <button type="submit" class="btn btn-success w-50">Kirim Penilaian</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>