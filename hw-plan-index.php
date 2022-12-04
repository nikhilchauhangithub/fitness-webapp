<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>HW Plan Index</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">
<div class="header header-fixed header-logo-center header-auto-show">
<a href="#" class="header-title">Plan Index</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->

<?php
    $plan_id=$_GET['plan_id'];
$instant_slide_query=mysqli_query($cn,"select * from hw_plans_table where plan_id='$plan_id'");
while($row_instant_slider=mysqli_fetch_array($instant_slide_query))
{
    $plan_title=$row_instant_slider['plan_title'];
    $plan_duration=$row_instant_slider['duration'];
    $plan_time=$row_instant_slider['time'];
    $plan_level=$row_instant_slider['level'];
    $days_per_week=$row_instant_slider['days_per_week'];
    $img_url=$row_instant_slider['img_url'];
    
    
    
}
    
    ?>
    
    
    




<div class="card-top no-click">
</div>
<div class="card card-style position-fixed w-100 mx-0 rounded-0" data-card-height="450" style="background-image:url(<?php echo $img_url;?>)">
<div class="card-bottom mb-2">
<div class="content">
    <h3 style="text-transform: uppercase;color: #fff;"><?php echo $plan_title;?></h3>
<div class="row mb-3">
<div class="col-6">
<div class="d-flex">
<div class="align-self-center">
<i style="width:20px" class="fa fa-calendar color-blue-dark font-23 me-3 text-center"></i>
</div>
<div class="align-self-center">
<span class="d-block font-10 mb-n3 pb-1 color-white opacity-70">Program Duration</span>
<strong class="d-block font-12 pb-1 color-white"><?php echo $plan_duration;?></strong>
</div>
</div>
</div>
<div class="col-6">
<div class="d-flex">
<div class="align-self-center">
<i style="width:20px" class="fa fa-clock color-red-dark font-23 me-3 text-center"></i>
</div>
<div class="align-self-center">
<span class="d-block font-10 mb-n3 pb-1 color-white opacity-70">Time</span>
<strong class="d-block font-12 pb-1 color-white"><?php echo $plan_time;?></strong>
</div>
</div>
</div>
<div class="col-12 mb-2"></div>
<div class="col-6">
<div class="d-flex">
<div class="align-self-center">
<i style="width:20px" class="fa fa-dumbbell color-yellow-dark font-23 me-3 text-center"></i>
</div>
<div class="align-self-center">
<span class="d-block font-10 mb-n3 pb-1 color-white opacity-70">Training Level</span>
<strong class="d-block font-12 pb-1 color-white"><?php echo $plan_level;?></strong>
</div>
</div>
</div>
<div class="col-6">
<div class="d-flex">
<div class="align-self-center">
<i style="width:20px" class="fa fa-solid fa-calendar-day color-green-dark font-23 me-3 text-center"></i>
</div>
<div class="align-self-center">
<span class="d-block font-10 mb-n3 pb-1 color-white opacity-70">Days per week</span>
<strong class="d-block font-12 pb-1 color-white"><?php echo $days_per_week;?></strong>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card-overlay bg-gradient rounded-0"></div>
</div>
<div class="card card-style mx-0 shadow-0 bg-transparent no-click" data-card-height="400"></div>
<div class="page-content pb-0">
<div class="card card-style">
<div class="divider mx-auto mt-3 bg-gray-dark opacity-30 rounded-s mb-n1" style="height:5px; width:50px;"></div>
<div class="content">


<?php
$tk=0;
    $plan_id=$_GET['plan_id'];
$finalpo_query=mysqli_query($cn,"select * from hw_final_videos where plan_id='$plan_id'");
while($row_print_slider=mysqli_fetch_array($finalpo_query))
{
    $tk=$tk+1;
    ?>
    
<a href="https://e-trainerapp.in/hw-exercise-static.php?parent_cat=<?php echo $row_print_slider['plan_id'];?>&days=<?php echo $tk;?>">
<div class="form-check interest-check">
<input class="form-check-input">
<label class="form-check-label rounded-m" for="check1"><?php echo $row_print_slider['day_name'];?></label>
<i class="fa fa-check-circle color-white font-18"></i>
<i class="fa fa-solid fa-medal font-17 color-red-dark"></i>
</div></a>




    <?php
}

?>



</div>


</div>
</div>







</div>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
