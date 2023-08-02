<!DOCTYPE html>
<html lang="en">

<head>
	<title>Prince Education Group </title>
	<meta content="" name="keywords">
	<meta content="" name="description">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	
	<!-- Main css -->
	<link rel="stylesheet" href="css/form.css" />

	<?php include 'head.php' ?>
	<style>
		.valid {
			border: 1px solid green;
		}
	</style>

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
				<p class="fs-5 fw-bold text-primary">Online Admission</p>
				<h1 class="display-5 mb-5">Some Of Our valuable Moments</h1>
			</div>


			<div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
				<div class="col-lg-8 col-md-8 offset-md-2">
					<form method="POST" id="signup-form" class="signup-form">


						<h3>
							<span class="title_text">Personal Information</span>
						</h3>
						<fieldset>

							<div class="fieldset-content">
								<div class="form-group">
									<label for="name" class="form-label">Full name</label>
									<input class="form-control" value="Nion Roy" type="text" name="name" id="name" placeholder="Enter Full Name" />
								</div>
								<div class="form-group">
									<label for="email" class="form-label">Email Address</label>
									<input class="form-control" type="email" value="nion.roy22@gmail.com" name="email" id="email" placeholder="Enter Email" />
								</div>
								<div class="form-group">
									<label for="selfcontact" class="form-label">Your Contact</label>
									<input class="form-control" type="number" name="selfcontact" id="phone" min="0" placeholder="+8801XXXXXXXXX" />
								</div>
								<div class="form-group">
									<label for="guardian" class="form-label">Guardian Contact</label>
									<input class="form-control" type="number" name="guardian" id="guardian" min="0" placeholder="+8801XXXXXXXXX" />
								</div>
							</div>

							<div class="fieldset-footer">
								<span>Step 2 of 3</span>
							</div>

						</fieldset>



						<h3>
							<span class="title_text">Course Infomations</span>
						</h3>
						<fieldset >
							<div class="fieldset-content">
								<div class="form-group">
									<label for="Course" class="form-label">Chose Course</label>
									<select class="form-select m-0">
										<option selected>-- selected --</option>
										<option value="1">Diploma in CSE</option>
										<option value="2">Diploma in EEE</option>
										<option value="3">Diploma in Nursing</option>
									</select>
								</div>

							</div>
							<div class="fieldset-footer">
								<span>Step 1 of 3</span>
							</div>
						</fieldset>



						<h3>
							<span class="title_text">Payment Details</span>
						</h3>
						<fieldset>
							<div class="fieldset-content">
								<div class="form-radio">
									<label for="payment_type">Payment Type</label>
									<div class="form-radio-flex">
										<input class="form-control" type="radio" name="payment_type" id="payment_visa" value="payment_visa" checked="checked" />
										<label for="payment_visa">Bkash </label>

										<input class="form-control" type="radio" name="payment_type" id="payment_master" value="payment_master" />
										<label for="payment_master">Rocket </label>

										<input class="form-control" type="radio" name="payment_type" id="payment_paypal" value="payment_paypal" />
										<label for="payment_paypal">Nagad </label>
									</div>
								</div>
								<div class="form-group">
									<label for="transaction" class="form-label">Transaction Number</label>
									<input class="form-control" type="number" name="transaction" id="transaction" placeholder="AGHXXXXXXXXX" />
								</div>
							</div>

							<div class="fieldset-footer">
								<span>Step 3 of 3</span>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Projects End -->

	<!-- Footer Start -->
	<?php include 'footer.php' ?>


	<!-- JS -->
	<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
	<script src="vendor/jquery-steps/jquery.steps.min.js"></script>
	<script src="vendor/minimalist-picker/dobpicker.js"></script>
	<script src="vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
	<script src="vendor/main.js"></script>