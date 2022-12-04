<?php include('data-con/connection.php');?>



<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>User Activity</title>
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


<div class="page-content header-clear-small">
<div class="content mt-0 mb-4">
<div class="d-flex">
<div class="align-self-center me-auto">
<strong class="text-uppercase opacity-70 font-12">Journey</strong>
<h1 class="mt-n2 font-28"><?php echo $user_name;?></h1>
</div>
<div class="align-self-center ms-auto mt-1">
<a href="#"  class="d-block"><img src="<?php echo $user_pic;?>" class="img-fluid shadow-xl rounded-circle" style="height:65px;width:65px" alt="img"></a>
</div>
</div>
</div>


<div class="card card-style ms-2 mb-3">
<div class="tab-controls">
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="weight">
<span class="d-block font-30 pt-2"><i class="fa fa-weight color-green-dark"></i></span>
<p class="font-14 d-block mb-n2 pt-2">Weight</p>
<p class="font-16 d-block mt-n2 color-green-dark"><?php echo $weight?> kg</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="height">
<span class="d-block font-30 pt-2"><i class="fas fa-heading color-pink-dark"></i></span>
<p class="font-14 d-block mb-n2 pt-2">Height</p>
<p class="font-16 d-block mt-n2 color-pink-dark"><?php echo $height?> cm</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="water">
<span class="d-block font-30 pt-2"><i class="fa fa-water color-blue-light"></i></span>
<p class="font-14 d-block mb-n2 pt-2">Water</p>
<p class="font-16 d-block mt-n2 color-blue-dark"><?php echo $water?> Glass</p>
</a>
</div>
</div>






<div class="row text-center mb-3">

	<a href="https://e-trainerapp.in/body-size.php">
<div class="card card-style ms-2 mb-3">
<i class="fa fa-bed color-orange-dark fa-3x mt-4 pt-2"></i>
<h1 class="pt-4">Body Calculator</h1>
<p class="font-11 opacity-70 mt-n2 mb-3 pb-1">Manage your Exercises</p>
<p class="mb-0 pb-0 font-10 opacity-50">Tap to see</p>
</div>
</a>

<a href="https://e-trainerapp.in/bmi.php" class="col-6 pe-0">
<div class="card card-style me-2 mb-3">
<i class="fa fa-chart-bar color-green-dark fa-3x mt-4 pt-2"></i>
<h1 class="pt-4">BMI</h1>
<p class="font-11 opacity-70 mt-n2 mb-3 pb-1">Check your Progress</p>
<p class="mb-0 pb-0 font-10 opacity-50">Tap to View</p>
</div>
</a>
<a href="https://e-trainerapp.in/bmr.php" class="col-6 ps-0">
<div class="card card-style ms-2 mb-3">
<i class="fa fa-weight color-yellow-dark fa-3x mt-4 pt-2"></i>
<h1 class="pt-4">BMR</h1>
<p class="font-11 opacity-70 mt-n2 mb-3 pb-1">Crush your Goals </p>
<p class="mb-0 pb-0 font-10 opacity-50">Tap to Expand</p>
</div>
</a>
<a href="https://e-trainerapp.in/1rm.php">
<div class="card card-style ms-2 mb-3">
<i class="fa fa-dumbbell color-blue-dark fa-3x mt-4 pt-2"></i>
<h1 class="pt-4">1RM</h1>
<p class="font-11 opacity-70 mt-n2 mb-3 pb-1">Crush your Goals </p>
<p class="mb-0 pb-0 font-10 opacity-50">Tap to Expand</p>
</div>
</a>


</div>

</div>

<?php include('data-menu.php');?>




</div>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>