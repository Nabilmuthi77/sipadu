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
    flex-direction: column; /* Mengatur tampilan menjadi kolom */
    align-items: center;
    margin: 10px;
    margin-top: 0;
    text-align: center;
}

.star-label {
    color: green;
    font-size: 20px;
    cursor: pointer;
    /* min-width: 100px; */
}


input[type="radio"] {
    display: none;
}

input[type="radio"]+label::before {
    content: "★";
    font-size: 80px; 
    color: green;
}


    input[type="radio"]:checked+label::before {
        color: red;
    }
    </style>
</head>

<body>
    <section class="container vh-100">
        <div class="row mx-auto vh-100">
            <div class="col-lg-7 mx-auto d-flex align-items-center">
                <div class="card border-success mb-3 mx-auto">
                    <div class="card-header bg-transparent border-success">
                        <h2 class="text-center">Kasih Rating Penilaian?</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Masyarakat/penilaian'); ?>" method="post"  style="width: 100%;">
                            <?= form_error('rating', '<small  style="background-color: lightsalmon; border-radius: 5px; padding: 4px 10px; text-align: center; color: white;"> <i>', '</i> </small>'); ?> <br>
                            <div class="radio-group">
                                <div class="star-container">
                                    <input type="radio" id="star5" name="rating" value="1" />
                                    <label for="star5" class="star-label">
                                        <span>Sangat Puas</span>
                                    </label>
                                </div>
                                <div class="star-container">
                                    <input type="radio" id="star4" name="rating" value="2" />
                                    <label for="star4" class="star-label">
                                        <span>Cukup Puas</span>
                                    </label>
                                </div>

                                <div class="star-container">
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" class="star-label">
                                        <span>Puas</span> 
                                    </label>
                                </div>

                                <div class="star-container">
                                    <input type="radio" id="star2" name="rating" value="4" />
                                    <label for="star2" class="star-label">
                                        <span>Tidak Puas</span> 
                                    </label>
                                </div>

                                <div class="star-container">
                                    <input type="radio" id="star1" name="rating" value="5" />
                                    <label for="star1" class="star-label">
                                        <span>Kurang Puas</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-success text-center">                        
                            <button type="submit" class="btn btn-success w-50 my-3">Kirim Penilaian</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>