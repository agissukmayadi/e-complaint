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

	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= $contact['email'] ?>"><?= $contact['email'] ?></a></i>
				<i class="bi bi-phone d-flex align-items-center ms-4"><span><?= $contact['telp'] ?></span></i>
			</div>
		</div>
	</section>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="<?= base_url('welcome') ?>">E-Complaint<span>.</span></a></h1>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>

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

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container" data-aos="zoom-out" data-aos-delay="100">
			<h1>Welcome to <span>E-Complaint</span></h1>
			<h5><?= $profile['header'] ?></h5>
			<div class="d-flex">
				<a href="<?= base_url('Auth_user') ?>" class="btn-get-started">Get Started</a>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Featured Services Section ======= -->
		<section id="featured-services" class="featured-services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h3>ALUR PENGADUAN <span>MASYARAKAT</span></h3>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
							<div class="icon">
								<span style="font-size: 3rem;">
									<span style="color: #106EEA;">
										<i class="fas fa-inbox"></i>
									</span>
								</span>
							</div>
							<h4 class="title">Input Laporan</h4>
							<p class="description">Laporan pengaduan melalui E-complaint</p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
							<div class="icon">
								<span style="font-size: 3rem;">
									<span style="color: #106EEA;">
										<i class="fas fa-user-check"></i>
									</span>
								</span>
							</div>
							<h4 class="title">Verifikasi Laporan</h4>
							<p class="description">Verifikasi laporan yang relevan dan jelas oleh petugas</p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
							<div class="icon">
								<span style="font-size: 3rem;">
									<span style="color: #106EEA;">
										<i class="fas fa-users"></i>
									</span>
								</span>
							</div>
							<h4 class="title">Disposisi Laporan</h4>
							<p class="description">Disposisi Laporan dengan jelas oleh petugas</p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
							<div class="icon"><span style="font-size: 3rem;">
									<span style="color: #106EEA;">
										<i class="fas fa-poll-h"></i>
									</span>
								</span></div>
							<h4 class="title">Tindak Lanjut Laporan</h4>
							<p class="description">Menindak lanjuti laporan yang telah di laporkan oleh masyarakat</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Featured Services Section -->


		<!-- ======= Frequently Asked Questions Section ======= -->
		<section id="faq" class="faq section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>F.A.Q</h2>
					<h3>Frequently Asked <span>Questions</span></h3>
					<p>Pertanyaan yang sering di ajukan</p>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-10">
						<ul class="faq-list">
							<?php foreach ($faq as $faq) { ?>
								<li>
									<div data-bs-toggle="collapse" class="collapsed question" href="#faq<?= $faq['id_faq'] ?>"><?= $faq['question'] ?> <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
									<div id="faq<?= $faq['id_faq'] ?>" class="collapse" data-bs-parent=".faq-list">
										<p>
											<?= $faq['answer'] ?>
										</p>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>

			</div>
		</section><!-- End Frequently Asked Questions Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
					<h3><span>Contact Us</span></h3>
					<p>Kontak kami</p>
				</div>
				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-4 col-md-12">
						<div class="info-box mb-4">
							<i class="bx bx-map"></i>
							<h3>Our Address</h3>
							<p><?= $contact['location'] ?></p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-envelope"></i>
							<h3>Email Us</h3>
							<p><?= $contact['email'] ?></p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-phone-call"></i>
							<h3>Call Us</h3>
							<p><?= $contact['telp'] ?></p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

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
							<li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
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