<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-Complaint</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/') ?>icon.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/vendor/fontawesome/css/solid.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/template/BizLand/') ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="<?= base_url('welcome') ?>">E-Complaint<span>.</span></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url('welcome/#hero') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('welcome/#faq') ?>">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('welcome/#contact') ?>">Contact</a></li>

                    <li>
                        <div class="btn-wrap">
                            <?php
                            if ($user) {
                            ?>
                                <a href="<?= base_url('User') ?>"><button class="btn btn-outline-primary"><?= $user['username'] ?> </button></a>
                            <?php } else { ?>
                                <a href="<?= base_url('Auth_user') ?>"><button class="btn btn-outline-primary">Sign In </button></a>
                            <?php } ?>
                        </div>
                    </li>



                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>S & K</h2>
                    <h3>Syarat dan<span> Ketentuan</span></h3>
                    <p>Dengan menggunakan layanan kami, berarti anda telah setuju dengan syarat dan ketentuan yang kami tentukan. Anda bisa melihat syarat dan ketentuan secara lengkap di halaman ini. Kami memiliki hak untuk melakukan peruba
                        han sewaktu-waktu. Kami menyarankan anda untuk membaca syarat dan ketentuan ini dengan sebaik-baiknya untuk melihat perubahan-perubahan yang kami buat.
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h4>User Conduct</h4>
                        <p>
                            1. Anda setuju untuk menggunakan website sesuai dengan syarat dan ketentuan dan tidak melanggar hukum
                            dan regulasi yang berlaku.<br>
                            2. Anda setuju untuk tidak melakukan reproduksi, duplikasi, menjual ataupun mengeksploitasi website kami untuk
                            segala keperluan komersial, kecuali bila diperbolehkan oleh kami.<br>
                            3. Anda setuju jika data-data pribadi anda kami simpan, seperti alamat, nomor telepon, dan yang lainnya untuk kepentingan kami.<br>
                            4. Sesuai dengan hukum yang berlaku, kami berhak untuk menolak pengaduan ataupun akun untuk alasan apapun.

                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h4>Kebijakan Privasi</h4>
                        <p>
                            Kami berkomitmen untuk melindungi privasi para pengguna. Kebijakan privasi ini berlaku untuk semua informasi pribadi yang dikumpulkan oleh kami atau dikirimkan kepada kami
                            baik melalui website.
                            Apabila anda tidak setuju dengan ketentuan dalam kebijakan privasi ini, harap agar tidak menggunakan website kami.
                        </p>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="section-title2 mt-3">
                        <h4>Informasi pribadi</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3 footer-contact">
                        <p>
                            <b> Informasi apa saja yang kami kumpulkan?</b><br>
                            1. Nama <br>
                            2. NIK <br>
                            3. Nomor telepon <br>
                            4. Alamat email <br>
                            5. Informasi keseluruhan <br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4></h4>
                        <p>
                            <b>Bagaimana kami mengumpulkan informasi?</b><br>

                            1. Kami dapat mengumpulkan informasi anda melalui website kami, seperti saat a menghubungi
                            layanan kami.<br>
                            2. Kami dapat mengumpulkan informasi anda pada data admin saat anda mengisi form register yang ada di website kami <br> <br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">

                        <p>
                            <b> Untuk apa kami mengumpulkan informasi?</b><br>
                            1. Untuk mengirimkan informasi administratif seperti saat adanya perubahan mengenai ketentuan dan syarat kebijakan kami<br>
                            2. Untuk memproses pengaduan anda<br>
                            3. Untuk memberikan informasi terkait pengaduan yang anda berikan, dan sebagainya yang berkaitan dengan data yang lainnya.<br>
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>E-Complaint<span>.</span></h3>
                        <p>
                            <?= $contact['location'] ?>
                            <br>
                            <strong>Phone:</strong> <?= $contact['telp'] ?><br>
                            <strong>Email:</strong> <?= $contact['email'] ?><br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/#hero') ?>">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/#faq') ?>">FAQ</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/#contact') ?>">Contact</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome/snk') ?>">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>E-Complaint</h4>
                        <p><?= $profile['footer'] ?></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>E-Complaint</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Agis Sukmayadi</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script defer src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/fontawesome/js/brands.js"></script>
    <script defer src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/fontawesome/js/solid.js"></script>
    <script defer src="<?= base_url('assets/template/BizLand/') ?>assets/vendor/fontawesome/js/fontawesome.js"></script>
    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/template/BizLand/') ?>assets/js/main.js"></script>

</body>

</html>