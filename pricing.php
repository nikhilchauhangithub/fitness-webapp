<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Pricing</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">
<div class="header header-fixed header-logo-center">
<a href="#" class="header-title">Pricing</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->

<!--datamenu-->


<?php include 'data-menu.php';?>

<!--data-menu-->
<div class="page-content header-clear-medium">

<div class="splide single-slider slider-no-arrows slider-has-dots mb-4 pb-4" id="slider-photos-2">
<div class="splide__track">
<div class="splide__list">
<div class="splide__slide">
<div class="pricing-1 rounded-m shadow-s bg-theme">
<h1 class="pricing-icon text-center"><i class="pricing-icon fa fa-star color-yellow-light"></i></h1>
<h1 class="pricing-title text-center text-uppercase">1 Month</h1>
<h2 class="pricing-subtitle text-center">All the essential features</h2>
<ul class="pricing-list text-center mb-4">

<li>Home Workout</li>
<li>Gym Workout</li>
<li>Meditation</li>
<li>Monitoring</li>
</ul>
<h3 class="pricing-value text-center color-green-dark mb-5">Coins</h3>
<a href="#" class="btn bg-green-dark btn-m btn-center-m text-uppercase font-900">Purchase</a>
</div>
</div>
<div class="splide__slide">
<div class="pricing-1 rounded-m shadow-s bg-theme">
<h1 class="pricing-icon text-center"><i class="pricing-icon fa fa-star color-blue-light"></i></h1>
<h1 class="pricing-title text-center text-uppercase">6 Month</h1>
<h2 class="pricing-subtitle text-center">All the essential features<br> and email support</h2>
<ul class="pricing-list text-center mb-4">
<li>No Ads</li>
<li>Home Workout</li>
<li>Gym Workout</li>
<li>Meditation</li>
<li>Monitoring</li>

</ul>
<h3 class="pricing-value text-center color-green-dark mb-5">5999</h3>
<a href="#" class="btn bg-green-dark btn-m btn-center-m text-uppercase font-900">Purchase</a>
</div>
</div>
<div class="splide__slide">
<div class="pricing-1 rounded-m shadow-s bg-theme">
<h1 class="pricing-icon text-center"><i class="pricing-icon fa fa-star color-green-light"></i></h1>
<h1 class="pricing-title text-center text-uppercase">12 Month</h1>
<h2 class="pricing-subtitle text-center">All the essential features<br> and email support</h2>
<ul class="pricing-list text-center mb-4">
<li>Free Install</li>
<li>Product Guide</li>
<li>Lifetime Updates</li>
</ul>
<h3 class="pricing-value text-center color-green-dark mb-5">10,499</h3>
<a href="#" class="btn bg-green-dark btn-m btn-center-m text-uppercase font-900">Purchase</a>
</div>
</div>
</div>
</div>
</div>


<div class="card card-style">
<div class="content mb-2">
<h3>Discount Code</h3>
<p class="mb-0">
Have a discount code? Apply it below to use it.
</p>
<div class="d-flex">
<div class="align-self-center w-100">
<div class="input-style has-borders validate-field mt-3">
<input type="name" class="form-control validate-name" id="form1" placeholder="Enter Code">
<label for="form1" class="color-highlight">Enter Code</label>
<i class="fa fa-times disabled invalid color-red-dark"></i>
<i class="fa fa-check disabled valid color-green-dark"></i>
</div>
</div>
<div class="align-self-center ms-auto">
<a href="#" class="btn btn-full bg-green-dark btn-m text-uppercase font-800 rounded-sm mb-0 ms-3">Apply</a>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- data-menu -->

<?php include 'data-menu.php';?>

<!-- data-menu -->
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
