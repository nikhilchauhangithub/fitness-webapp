<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>StickyMobile BootStrap</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">
<div class="header header-fixed header-logo-center">
<a href="#" class="header-title">Steps Tracker</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->

<!--datamenu-->
<?php include('data-menu.php');?>
<!--data-menu-->
<div class="page-content header-clear">
    <br>
    <a data-card-height="175" class="card card-style">
<div class="card-center text-center">
<span class="text-center color-blue-dark"><i class="fa fa-road fa-3x"></i></span>
<h1 class="color-teal mb-n1">Steps</h1>
<p class="color-teal opacity-80 mb-0">
Old Roads are always beautiful.
</p>
</div>
<div class="card-overlay bg-black opacity-0"></div>
</a>
<div class="card card-style"><br>
<div class="tab-controls">
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="weight">
<span class="d-block font-30 pt-2"><i class="fa fa-fire color-orange-dark"></i></span>
<p class="font-14 d-block mb-n2 pt-2">Calories</p>
<p class="font-16 d-block mt-n2 color-orange-dark"><?php echo $weight?> Burnt</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="height">
<span class="d-block font-30 pt-2"><i class="fas fa-road color-green-dark"></i></span>
<p class="font-14 d-block mb-n2 pt-2">Distance</p>
<p class="font-16 d-block mt-n2 color-green-dark"><?php echo $height?> Km</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="water">
<span class="d-block font-30 pt-2"><i class="fa fa-bolt color-blue-light"></i></span>
<p class="font-14 d-block mb-n2 pt-2">Avg Speed</p>
<p class="font-16 d-block mt-n2 color-blue-dark"><?php echo $water?> km/h</p>
</a>
</div>


<div class="card card-style">
<div class="content mb-0">
<h3>Graph Projection</h3>
<p class="mt-n2 mb-4">
We Care for you!
</p>
<div class="row mb-0">
<div class="col-4 pe-1">
<a href="#" class="btn shadow-bg shadow-bg-m btn-m btn-full mb-3 rounded-s text-uppercase font-900 shadow-s bg-teal-light">Day</a>

</div>
<div class="col-4 pe-1 ps-1">
<a href="#" class="btn shadow-bg shadow-bg-m btn-m btn-full mb-3 rounded-s text-uppercase font-900 shadow-s bg-teal-dark">Week</a>

</div>
<div class="col-4 ps-1">
<a href="#" class="btn shadow-bg shadow-bg-m btn-m btn-full mb-3 rounded-s text-uppercase font-900 shadow-s bg-teal-light">Month</a>

</div>
</div>


</div>
</div>
</div>




</div>









</div>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
