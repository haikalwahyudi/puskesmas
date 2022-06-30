<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Puskesmas SESELA</title>
</head>

<body>
    <!-- Hero -->
    <div class="hero">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light px-5">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-4">
                        <a class="nav-link text-white" href="<?= base_url(); ?>/puskesmas">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php if (session()->get('log_in') == true) { ?>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white" href="<?= base_url(); ?>/puskesmas/daftar">Daftar</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white" href="<?= base_url(); ?>/puskesmas/antrian">Antrian</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white" href="<?= base_url() ?>/login" onclick="return confirm('Untuk Daftar anda harus login dahulu');">Daftar</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item mr-4">
                        <a class="nav-link text-white" href="#">Kontak</a>
                    </li>
                    <?php if (session()->get('log_in') == 0) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url(); ?>/login">Login</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url(); ?>/login/logout">Logout</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <!-- End Of Navbar -->
        <hr class="nav-divider">

        <div class="container py-5">
            <?php if (session()->get('log_in')) { ?>
                <h2 class="text-center">Selamat datang <?= session()->get('nama'); ?></h2>
            <?php } ?>
            <div class="row align-items-end">
                <div class="col-sm">
                    <h1 class="hero-title text-white mt-5">PUSKESMAS SESELA</h1>

                    <div class="hero-poli d-flex justify-content-around mt-4">
                        <div class="hero-icon">
                            <img src="./images/1.png" alt="Hero Icon 1">
                        </div>

                        <div class="hero-icon">
                            <img src="./images/2.png" alt="Hero Icon 2">
                        </div>

                        <div class="hero-icon">
                            <img src="./images/3.png" alt="Hero Icon 3">
                        </div>

                        <div class="hero-icon">
                            <img src="./images/4.png" alt="Hero Icon 4">
                        </div>
                    </div>

                    <div class="hero-description mt-4">
                        <p class="text-white">Puskesmas (Indonesian: Pusat Kesehatan Masyarakat,
                            English: Community Health Centre) are government-mandated
                            community health clinics located across Indonesia.
                            They are overseen by the Indonesian
                        </p>
                    </div>

                    <div class="read-more mt-4">
                        <?php if (session()->get('log_in') == true) { ?>
                            <a href="<?= base_url(); ?>/puskesmas/daftar" class="btn-read">
                                DAFTAR
                            </a>
                        <?php } else { ?>
                            <a href="<?= base_url() ?>/login" onclick="return confirm('Untuk Daftar anda harus login dahulu');" class="btn-read">
                                DAFTAR
                            </a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="hero-image text-center">
                        <img src="./images/dokter.png" alt="Dokter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Hero Section -->

    <div class="list-container mt-5">
        <div class="list-poli">
            <div class="container">
                <div class="list-header text-center">
                    <h3 class="list-title">Puskesmas SESELA menyediakan berbagai macam pelayanan untuk anda.</h1>
                        <p class="list-description mt-4">Kami memiliki beberapa pelayanan yang dapat anda manfaatkan.</p>
                        <hr class="list-divider mt-4">
                </div>

                <div class="poli-category text-center mt-5">
                    <div class="row">
                        <div class="col-sm">
                            <div class="category-icon">
                                <img src="./images/Poli Dalam.png" alt="Poli Dalam Icon">
                            </div>

                            <h5 class="category-title mt-4">POLI DALAM</h5>
                            <p class="category-description mt-3">
                                Puskesmas (Indonesian: Pusat Kesehatan Masyarakat, English: Community Health Centre)
                                are government-mandated community health clinics located across Indonesia.
                                They are overseen by the Indonesian
                            </p>
                        </div>

                        <div class="col-sm">
                            <div class="category-icon">
                                <img src="./images/Poli Gigi.png" alt="Poli Dalam Icon">
                            </div>

                            <h5 class="category-title mt-4">POLI GIGI</h5>
                            <p class="category-description mt-3">
                                Puskesmas (Indonesian: Pusat Kesehatan Masyarakat, English: Community Health Centre)
                                are government-mandated community health clinics located across Indonesia.
                                They are overseen by the Indonesian
                            </p>
                        </div>

                        <div class="col-sm">
                            <div class="category-icon">
                                <img src="./images/Poli Anak.png" alt="Poli Dalam Icon">
                            </div>

                            <h5 class="category-title mt-4">POLI ANAK</h5>
                            <p class="category-description mt-3">
                                Puskesmas (Indonesian: Pusat Kesehatan Masyarakat, English: Community Health Centre)
                                are government-mandated community health clinics located across Indonesia.
                                They are overseen by the Indonesian
                            </p>
                        </div>

                        <div class="col-sm">
                            <div class="category-icon">
                                <img src="./images/UGD.png" alt="Poli Dalam Icon">
                            </div>

                            <h5 class="category-title mt-4">UNIT GAWAT DARURAT</h5>
                            <p class="category-description mt-3">
                                Puskesmas (Indonesian: Pusat Kesehatan Masyarakat, English: Community Health Centre)
                                are government-mandated community health clinics located across Indonesia.
                                They are overseen by the Indonesian
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <div class="register-poli text-center mt-4">
                    <a href="#" class="btn-register text-center">DAFTAR</a>
                </div> -->
            </div>
        </div>
    </div>
    <footer style="background-color:green;">
        <center><strong>Copyright &copy; 2022</strong></center>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>