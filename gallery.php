<!DOCTYPE html>
<html lang="en">

<head>
	<title>Prince Education Group </title>
	<meta content="" name="keywords">
	<meta content="" name="description">
	<?php include 'head.php' ?>
</head>



<body>
	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
	</div>
	<!-- Spinner End -->

	<!-- Topbar Start -->
	<?php include 'topbar.php' ?>
	<!-- Topbar End -->

	<!-- Navbar Start -->
	<?php include 'navbar.php' ?>
	<!-- Navbar End -->

	<!-- Projects Start -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
				<p class="fs-5 fw-bold text-primary">Our Photo Gallery</p>
				<h1 class="display-5 mb-5">Some Of Our valuable Moments</h1>
			</div>
			<div class="row wow fadeInUp" data-wow-delay="0.3s">
				<div class="col-12 text-center">
					<ul class="list-inline rounded mb-5" id="portfolio-flters">
						<li class="mx-2 active" data-filter="*">All</li>
						<li class="mx-2" data-filter=".first">Library</li>
						<li class="mx-2" data-filter=".second">Program</li>
						<li class="mx-2" data-filter=".second">Workshop</li>
					</ul>
				</div>
			</div>
			<div class="row g-4 portfolio-container">
				<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
					<div class="portfolio-inner rounded">
						<img class="img-fluid" src="img/1.jpg" alt="">
						<div class="portfolio-text">
							<h4 class="text-white mb-4">Annual Program</h4>
							<div class="d-flex">
								<a class="btn btn-lg-square rounded-circle mx-2" href="img/1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
								<a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
					<div class="portfolio-inner rounded">
						<img class="img-fluid" src="img/2.jpg" alt="">
						<div class="portfolio-text">
							<h4 class="text-white mb-4">Opening Ceremony</h4>
							<div class="d-flex">
								<a class="btn btn-lg-square rounded-circle mx-2" href="img/2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
								<a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
					<div class="portfolio-inner rounded">
						<img class="img-fluid" src="img/3.jpg" alt="">
						<div class="portfolio-text">
							<h4 class="text-white mb-4">Accepting Award</h4>
							<div class="d-flex">
								<a class="btn btn-lg-square rounded-circle mx-2" href="img/3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
								<a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
					<div class="portfolio-inner rounded">
						<img class="img-fluid" src="img/4.jpg" alt="">
						<div class="portfolio-text">
							<h4 class="text-white mb-4">Prize Giving</h4>
							<div class="d-flex">
								<a class="btn btn-lg-square rounded-circle mx-2" href="img/4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
								<a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
					<div class="portfolio-inner rounded">
						<img class="img-fluid" src="img/5.jpg" alt="">
						<div class="portfolio-text">
							<h4 class="text-white mb-4">Enriched Library</h4>
							<div class="d-flex">
								<a class="btn btn-lg-square rounded-circle mx-2" href="img/5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
								<a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
					<div class="portfolio-inner rounded">
						<img class="img-fluid" src="img/6.jpg" alt="">
						<div class="portfolio-text">
							<h4 class="text-white mb-4">Exam Hall</h4>
							<div class="d-flex">
								<a class="btn btn-lg-square rounded-circle mx-2" href="img/6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
								<a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Projects End -->

	<!-- Footer Start -->
	<?php include 'footer.php' ?>