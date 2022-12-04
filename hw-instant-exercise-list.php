<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>HW Instant Exercise page</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">
    <?php
    
     $ins_wor_id=$_GET['ins_wor_id'];
$finalpok_query=mysqli_query($cn,"select * from hw_ins_wor_all where ins_wor_id='$ins_wor_id'");
$rows_title=mysqli_fetch_assoc($finalpok_query);
$title=$rows_title['workout_title'];

    ?>
<div class="header header-fixed header-logo-center">
<a href="#" class="header-title">Workout Title</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->
<div class="page-content header-clear-medium">

<?php
      $ins_wor_id=$_GET['ins_wor_id'];
    $ip=0;
$finalpo_query=mysqli_query($cn,"select * from master_hw_instant where ins_wor_id='$ins_wor_id'");
while($row_print_slider=mysqli_fetch_array($finalpo_query))
{
    $ip=$ip+1;
    
    ?>




<div class="card card-style">
<div class="content">


<div class="d-flex">
<div class="pe-3 w-75">
    <a href="#" data-menu="play-video<?php echo $ip;?>">
<div class="card card-style m-0" data-card-height="100" style="width: 8rem;" >
    <video src="<?php echo $row_print_slider['Video_Link'];?>"></video>
<div class="card-center text-center">


</div>

</div>
</div>
<div class="w-100">
<h5 class="color-blue-dark"><?php echo $row_print_slider['Video_Name'];?></h5>
<div class="row mb-0 pt-2">
<div class="col-5">
<a href="#" class="d-block font-10 color-theme"><span class="color-theme opacity-70 font-800">Sets:</span> <span class="font-600 opacity-50"><?php echo $row_print_slider['Sets'];?></span></a>
<a href="#" class="d-block font-10 color-theme"><span class="color-theme opacity-70 font-800">Rest:</span> <span class="font-600 opacity-50">45 sec</span></a>
</div>
<div class="col-7 ps-0">
<a href="#" class="d-block font-10 color-theme"><span class="color-theme opacity-70 font-800">Rep</span> <span class="font-600 opacity-50"><?php echo $row_print_slider['Reps'];?></span>
<a href="#" class="d-block font-10 color-theme"><i class="fa-solid fa-glass-water color-theme opacity-70"></i> <span class="font-800 opacity-70 color-blue-dark">Stay Hydrated</span></a>
</div>
</div>

</div>
</div></a>


</div>
</div></a>





    <?php
    
}
    ?>

</div>
</div>

<?php
    $ins_wor_id=$_GET['ins_wor_id'];
    $ip=0;
$finalpo_query=mysqli_query($cn,"select * from master_hw_instant where ins_wor_id='$ins_wor_id'");
while($row_print_slider=mysqli_fetch_array($finalpo_query))
{
    $ip=$ip+1;
    
    ?>


    <!-- play video -->

<div id="play-video<?php echo $ip;?>" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">

<div class="content mb-0 mt-2">
    <video autoplay loop controls src="<?php echo $row_print_slider['Video_Link'];?>" style="width:100%"></video>


</div>
</div>
<!-- Play video -->

<?php
}
?>

<!-- data-menu -->

<?php include 'data-menu.php';?>

<!-- data-menu -->

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
