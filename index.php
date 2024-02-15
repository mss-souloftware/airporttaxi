<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">
	<?php include './components/head-links.php'; ?>
	<title>Airport Taxi</title>

</head>

<body>

	<?php include './layouts/header.php'; ?>
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-6 col-md-6 ">
					<h6 class="text-white ">AIRPORT TAXI SERVICE</h6>
					<h1 class="text-uppercase">
						ONWARD TRAVEL SOLUTIONS
					</h1>
					<p class="pt-10 pb-10 text-white">
						We specialise in taxi transfers to and from all UK airports for both individuals and groups, with an emphasis on a courteous and thoroughly professional personal service at affordable prices. 24 hours a day. 7 days a week.
					</p>
					<a href="#" class="primary-btn text-uppercase">Live Chat</a>
					<a href="#" class="primary-btn text-uppercase">+44 (0)203 4788892</a>
				</div>
				<div class="col-lg-4  col-md-6 header-right">
					<?php include './components/booking-form.php'; ?>
				</div>
			</div>
		</div>
	</section>

	<?php include './layouts/fleet.php'; ?>
	<?php include './layouts/services.php'; ?>
	<?php include './layouts/locations.php'; ?>
	<?php include './layouts/footer.php'; ?>
	<?php include './components/body-scripts.php'; ?>
</body>
</html>