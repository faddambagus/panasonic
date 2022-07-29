<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>HI_CLEAN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<!-- CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="assets/css/jquery.timepicker.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<!-- CSS end-->

<body>
	<!-- Header Teks -->
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 phone pl-md-2">
						<a href="#" class="mr-2">Tempat Terbaik Untuk Mencuci Sepatu Kesayanganmu</a>

					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Teks end-->
	</head>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="">Hi <span>Clean</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<ul class="nav navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a href="<?= base_url('home_user'); ?>" class="nav-link">Home</i></a>
						</li>
						<li class="nav-item dropdown">
							<a href="<?= base_url(); ?>services" class="nav-link">Services</i></a>
						</li>
						<li class="nav-item dropdown">
							<a href="<?= base_url('order'); ?>" class="nav-link">Order</i></a>
						</li>

						<li class="nav-item dropdown">
							<a href="<?= base_url(); ?>report" class="nav-link">Report</i></a>
						</li>

						<li class="nav-item dropdown active">
							<a href="<?= base_url(); ?>profile_user" class="nav-link">Profile</i></a>
						</li>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div id="navbar-collapse" class="collapse navbar-collapse">
							<ul class="nav navbar-nav ml-auto align-items-center">
								<li class="header-get-a-quote">
									<a class="btn btn-primary" href="<?= base_url(); ?>logout">Logout</a>
								</li>
							</ul>
						</div>
					</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<br>
	<section id="main-container" class="main-container pb-4">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-12">
					<h3 class="section-sub-title"><strong>Profil Saya</strong></h3>
				</div>
			</div>
			<!--/ Title row end -->
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-3 col-sm-6 mb-5">
					<div class="ts-team-wrapper">
						<div class="team-img-wrapper">
							<img loading="lazy" src="assets/images/user1.png" class="img-fluid" alt="team-img">
						</div>
						<form method="post" action="edit_profile" role="form" enctype="multipart/form-data">
							<div class="ts-team-content-classic">
								<h3 class="ts-name"><?= $user->name; ?></h3>
								<p class="ts-designation">Username: <?= $user->username; ?></p>
								<p class="ts-designation">E-mail: <?= $user->email; ?></p>
								<div class="team-social-icons">
									<button type="submit" href="" class="btn btn-link fa-solid fa-pen " style="color: black;"></i></button>
								</div>
							</div>
						</form>
					</div>
					<!--/ Team wrapper 1 end -->

				</div><!-- Col end -->


			</div><!-- Content row end -->

		</div><!-- Container end -->
	</section><!-- Main container end -->
	</div><!-- Banner area end -->
	<br>
	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
					<h2 class="footer-heading">Harga</h2>
					<div class="block-23 mb-3">
						<ul>
							<li></span><span class="text">RP50K/Sepatu</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
					<h2 class="footer-heading">Hubungi Kami</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map"></span><span class="text">JL Raya Bogor KM 59</span></li>
							<li><span class="icon fa fa-phone"></span><span class="text">+62 851 2241 2312</span></li>
							<li><span class="icon fa fa-paper-plane"></span><span class="text">hi_clean@gmail.com</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-12 text-center">

					<p class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> Hi Clean</i></a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end-->

	<!-- Script -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	<script src="https://kit.fontawesome.com/a6e3e1cfd9.js" crossorigin="anonymous"></script>
	<!-- Script -->
</body>

</html>