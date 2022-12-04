<?php include('data-con/connection.php');?>



<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Body Size</title>
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
<strong class="text-uppercase opacity-60 font-12">Body Size</strong>
<h1 class="mt-n2 font-28"><?php echo $user_name;?></h1>
</div>
<div class="align-self-center ms-auto mt-1">
<a href="#" class="d-block"><img src="<?php echo $user_pic;?>" class="img-fluid shadow-xl rounded-circle" style="height:65px;width:65px" alt="img"></a>
</div>
</div>
</div>

<div class="card card-style">
<div class="tab-controls">
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="chest">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/chest.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Chest</p>
<p class="font-16 d-block mt-n2 color-green-dark"><?php echo $chest;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Bicep_R">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/b_r.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Bicep-R</p>
<p class="font-16 d-block mt-n2 color-yellow-dark"><?php echo $Bicep_R;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Bicep_L">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/b_l.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Bicep-L</p>
<p class="font-16 d-block mt-n2 color-blue-dark"><?php echo $Bicep_L;?> inches</p>
</a>
</div>
</div>

<div class="card card-style mx-0 mb-3">
<div class="tab-controls">
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="neck">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/neck.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Neck</p>
<p class="font-16 d-block mt-n2 color-green-dark"><?php echo $neck;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Thighs_R">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/t_r.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Thighs_R</p>
<p class="font-16 d-block mt-n2 color-yellow-dark"><?php echo $Thighs_R;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Thigh_L">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/t_l.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Thigh_L</p>
<p class="font-16 d-block mt-n2 color-blue-dark"><?php echo $Thigh_L;?> inches</p>
</a>
</div>
</div>

<div class="card card-style mx-0 mb-3">
<div class="tab-controls">
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="waist">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/waist.png"></span>
<p class="font-14 d-block mb-n2 pt-2">waist</p>
<p class="font-16 d-block mt-n2 color-green-dark"> <?php echo $waist;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Forearm_R">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/f_r.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Forearm_R</p>
<p class="font-16 d-block mt-n2 color-yellow-dark"><?php echo $Forearm_R;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Forearm_L">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/f_l.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Forearm_L</p>
<p class="font-16 d-block mt-n2 color-blue-dark"><?php echo $Forearm_L;?> inches</p>
</a>
</div>
</div>

<div class="card card-style mx-0 mb-3">
<div class="tab-controls">
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Hips">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/hips.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Hips</p>
<p class="font-16 d-block mt-n2 color-green-dark"><?php echo $Hips;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Calves_R">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/calves.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Calves_R</p>
<p class="font-16 d-block mt-n2 color-yellow-dark"><?php echo $Calves_R;?> inches</p>
</a>
<a href="#" class="no-effect font-15 font-600 py-2 border-0" data-menu="Calves_L">
<span class="d-block font-30 pt-2"><img src="https://e-trainerapp.in/micons/calves.png"></span>
<p class="font-14 d-block mb-n2 pt-2">Calves_L</p>
<p class="font-16 d-block mt-n2 color-blue-dark"><?php echo $Calves_L;?> inches</p>
</a>
</div>
</div>








</div>






</div>
<?php include('data-menu.php');?>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>