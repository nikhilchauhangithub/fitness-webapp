<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Mindfullness</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">

<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->

<div class="page-content">
    <div class="content notch-clear">
<div class="d-flex pt-2">
<div class="align-self-center me-auto">
<strong class="text-uppercase opacity-60 font-12">What Brings You Here</strong>
<h1 class="mt-n2 font-27"><?php echo $user_name;?></h1>
</div>
<div class="align-self-center ms-auto">
<a href="#" class="d-block" data-menu="menu-events"><img src="<?php echo $user_pic;?>" class="img-fluid shadow-xl rounded-circle" width="52"></a>
</div>
</div>
</div>

<!-- <div class="splide double-slider slider-no-dots text-center visible-slider" id="double-slider-1">
<div class="splide__track">
<div class="splide__list">
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<img src="https://ouch-cdn2.icons8.com/LvN2ov8OWfkUYKIKe9nbh4KInBPo00YcXy0KyydPff8/rs:fit:256:144/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvNTYx/L2FlODhjMzNmLTg2/NWUtNDQ5ZS05NDJk/LTU0MzU1NTVkZjMy/YS5zdmc.png">
<h4 class="pt-3 pb-3">All</h4>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<i class="fa fa-running color-highlight fa-2x mt-4"></i>
<h4 class="pt-3 pb-3">Meditation</h4>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<i class="fab fa-android color-green-dark fa-2x mt-4"></i>
<h4 class="pt-3 pb-3">Sleep</h4>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<i class="fa fa-star color-yellow-dark fa-2x mt-4"></i>
<h4 class="pt-3 pb-3">Focus</h4>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<i class="fab fa-android color-green-dark fa-2x mt-4"></i>
<h4 class="pt-3 pb-3">Profile</h4>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<i class="fab fa-android color-green-dark fa-2x mt-4"></i>
<h4 class="pt-3 pb-3">Work</h4>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<i class="fab fa-android color-green-dark fa-2x mt-4"></i>
<h4 class="pt-3 pb-3">Self Guide</h4>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style me-2 my-0 mt-n3">
<i class="fab fa-android color-green-dark fa-2x mt-4"></i>
<h4 class="pt-3 pb-3">Chakra</h4>
</div>
</a>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-6">
    <a href="#" class="mx-3">
<div class="card card-style my-0 me-0 ms-3 py-2 mt-n3">
<div class="d-flex">
<div class="align-self-center">
<i class="fa fa-cog fa-2x px-3 color-red-dark"></i>
</div>
<div class="align-self-center pe-3">
<h5>Tech</h5>
<p class="mb-0 font-11 mt-n2">24 Events</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-6">
    <a href="#" class="mx-3">
<div class="card card-style my-0 me-0 ms-3 py-2 mt-n3">
<div class="d-flex">
<div class="align-self-center">
<i class="fa fa-cog fa-2x px-3 color-red-dark"></i>
</div>
<div class="align-self-center pe-3">
<h5>Tech</h5>
<p class="mb-0 font-11 mt-n2">24 Events</p>
</div>
</div>
</div>
</a>
</div>
</div> -->




<div class="row mb-0">
<div class="col-6 pe-0">
<a href="#" class="card card-style mb-2" data-card-height="135" style="background-image: url(data:image/jpeg;base64,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);">
    <div class="card-bottom">
<h1 class="color-white text-center mb-1">Sleep</h1>
</div>
</a>
<a href="#" class="card card-style mb-2" data-card-height="135" style="background-image: url(https://cdn.wallpapersafari.com/83/63/jVNUhG.jpg);">
    <div class="card-bottom">
<h1 class="color-white text-center mb-1">Focus</h1>
</div>
</a>
</div>
<div class="col-6 ps-0">
<a href="#" class="card card-style ms-0" data-card-height="280" style="background-image: url(https://i.pinimg.com/736x/03/4c/31/034c31db02941bfeeff775ff7615ec48--wallpaper-for-iphone-mobile-wallpaper.jpg);">
      <div class="card-bottom">
<h1 class="color-white text-center mb-1">Relax</h1>
</div>
</a>
</div>
</div>

<div class="row mb-0 mt-n3">
<div class="col-6 pe-0">
<a href="#" class="card card-style" data-card-height="280" style="background-image: url(https://i.pinimg.com/564x/e7/ea/04/e7ea0451b2fabe943a77d795be2093ca.jpg);">
      <div class="card-bottom">
<h1 class="color-white text-center mb-1">Meditation</h1>
</div>
</a>
</div>
<div class="col-6 ps-0">
<a href="#" class="card ms-0 card-style mb-2" data-card-height="135" style="background-image: url(https://i.pinimg.com/736x/70/55/5a/70555a630bdb07bdcba98bde768ee4c5.jpg);">
      <div class="card-bottom">
<h1 class="color-white text-center mb-1">Anxiety</h1>
</div>
</a>
<a href="#" class="card ms-0 card-style mb-2" data-card-height="135" style="background-image: url(data:image/jpeg;base64,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);">

      <div class="card-bottom">
<h1 class="color-white text-center mb-1">Chakra</h1>
</div>
</a>
</div>
</div>
<!-- <a href="#" class="card card-style bg-26 mt-n2" data-card-height="200">
<div class="card-top text-end">
<span class="badge bg-pink2-dark px-2 py-1 color-white m-3">FOR YOU NOW!</span>
</div>
<div class="card-bottom p-3">
<h4 class="color-white font-500">
Sticky Mobile gets another absolutely awesome update for customers.
</h4>
</div>
<div class="card-overlay bg-gradient"></div>
</a> -->

</div>
</div>

<!-- data-menu -->
<?php include 'data-menu.php';?>
<!-- data-menu -->

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
