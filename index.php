<?php
require('koneksi.php');
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Guest</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<style>
		.aktif {
			color: #03a9f4;
		}

		.blue-text {
			color: #03a9f4;
		}

		.main-menu a:hover {
			color: #03a9f4;
		}

		.subtitle {
			color: #03a9f4;
		}

		span {
			color: #03a9f4;
		}
	</style>
</head>

<body>

	<!--PreLoader-->
	<!-- <div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div> -->
	<!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="imagefrom/Logo2.png" alt="ini Logo" width="78px" id="logo">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index.php">Home</a>
								</li>
								<li><a href="activity.php">Activity</a>
								</li>
								<li><a href="#about">About</a>
								</li>
								<li><a href="contact.php">Contact</a>
								</li>
								<?php
								if (isset($_SESSION['user'])) {
								?>
									<li><a href="logout.php">logout</a></li>
									<li>
										<a href="profile.php" class="mainmenubtn"><?php echo $_SESSION['user']['nama_lengkap'] ?> <img src="icons/person-circle.svg" alt="Profil" style="width: 25px; color:white;"></a>
									</li>
								<?php
								} else {
								?>
									<li><a href="login.php">Login</a></li>
								<?php
								}
								?>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- hero area -->
	<div class="hero-area vision-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Book and Manage your appoinment!</p>
							<?php if (isset($_SESSION['user'])) { ?>
								<h2 style="color: white;">Welcome, <span><?php echo $_SESSION['user']['nama_lengkap'] ?></span>
								</h2>
							<?php } else { ?>
								<h1>Guest</h1>
								<div class="hero-btns">
									<a href="login.php" class="boxed-btn">LOGIN</a>
									<!-- <a href="contact.html" class="bordered-btn">Contact Us</a> -->
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 mb-0 text-center">
					<div class="section-title">
						<h3><span class="blue-text">Layanan</span> Kami</h3>
						<p>Silahkan membuat jadwal janji temu Anda secara online</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6 text-center">
					<div class="single-product-item">
						<!-- <div class="product-image"> -->
						<a href="reservasi.php"><img src="imagefrom/Pic_1.png" alt=""></a>
						<!-- </div> -->
						<!-- <h3>Reservasi</h3> -->
						<a href="reservasi.php" class="cart-btn"><i class="fas fa-book-reader"></i>Reservasi</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="single-product-item">
						<!-- <div class="product-image"> -->
						<a href="jadwal.php"><img src="imagefrom/Pic_2.png" alt=""></a>
						<!-- </div> -->
						<!-- <h3>Jadwal</h3> -->
						<a href="jadwal.php" class="cart-btn"><i class="fas fa-book-reader"></i>Jadwal</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="single-product-item">
						<!-- <div class="product-image"> -->
						<a href="activity.php"><img src="imagefrom/Pic_3.png" alt=""></a>
						<!-- </div> -->
						<!-- <h3>Reservasi</h3> -->
						<a href="activity.php" class="cart-btn"><i class="fas fa-book-reader"></i>Reschedule</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="single-product-item">
						<!-- <div class="product-image"> -->
						<a href="activity.php"><img src="imagefrom/Pic_4.png" alt=""></a>
						<!-- </div> -->
						<a href="activity.php" class="cart-btn"><i class="fas fa-book-reader"></i>Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- footer -->
	<div class="footer-area" id="about">
		<div class="container">
			<div class="row text-center align-items-center">
				<div class="col-lg-8 col-md-6" style="margin: 0 auto;">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2022 - Guest<br>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end copyright -->

	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>

</html>