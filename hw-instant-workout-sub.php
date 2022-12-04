
<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Plan Index</title>
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

<div class="page-content header-clear-small">
        
          <?php
    $workout_id=$_GET['workout_id'];
$instant_slidek_query=mysqli_query($cn,"select * from hw_instant_workout where workout_id='$workout_id'");
$data_rowk=mysqli_fetch_assoc($instant_slidek_query);
$plan_name=$data_rowk['body_part'];
?>
        
           <div class="content mt-0 mb-4">
<div class="d-flex">
<div class="align-self-center me-auto">
<strong class="text-uppercase opacity-60 font-12">Let's Workout</strong>
<h1 class="mt-n2 font-28"><?php echo $plan_name;?></h1>
</div>
<!--<div class="align-self-center ms-auto mt-1">-->
<!--<a href="#" class="d-block"><img src="<?php echo $user_pic;?>" class="img-fluid shadow-xl rounded-circle" width="52" alt="img"></a>-->
<!--</div>-->
</div>
</div>
    

    <?php
    $workout_id=$_GET['workout_id'];
$instant_slide_query=mysqli_query($cn,"select * from hw_ins_wor_all where ins_cat_id='$workout_id'");
while($row_instant_slider=mysqli_fetch_array($instant_slide_query))
{
    ?>
    
    
    
    <a href="https://e-trainerapp.in/hw-instant-exercise-list.php?ins_wor_id=<?php echo $row_instant_slider['ins_wor_id'];?>">
    
    <div class="card card-style" data-card-height="170" style="background-image:url(<?php echo $row_instant_slider['img_url'];?>)">
<div class="card-top p-2">

</div>
<div class="card-top p-2 no-click">
<div class="float-end text-end">
<span class="color-black bg-white px-2 py-1 rounded-xs font-10"><i class="fa fa-fire color-orange-dark pe-2"></i><?php echo $row_instant_slider['level'];?></span>
<br>
<span class="color-black bg-white px-2 py-1 rounded-xs font-10"><i class="fa fa-clock color-blue-dark pe-2"></i><?php echo $row_instant_slider['time'];?></span>
</div>
</div>
<div class="card-bottom p-3">
<h1 class="color-white mb-n1"><?php echo $row_instant_slider['workout_title'];?></h1>
<p class="color-white mb-0 opacity-60">Professional Level - 11 Exercises</p>
</div>
<div class="card-overlay bg-gradient"></div>
</div>
</a>
    
    
<!--<div class="col-6 pe-2">-->
<!--<a href="https://e-trainerapp.in/hw-instant-exercise-list.php?ins_wor_id=<?php echo $row_instant_slider['ins_wor_id'];?>">-->
<!--    <div class="card card-style mx-0 mb-3">-->
<!--<div class="card-top m-2 text-end">-->
<!--<span class="bg-white color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl"><?php echo $row_instant_slider['time'];?></span>-->
<!--</div>-->
<!--<img src="<?php echo $row_instant_slider['img_url'];?>" alt="img" class="img-fluid">-->
<!--<div class="p-2">-->
<!--<p class="mb-0 font-10 opacity-90" align="center">-->
<!--<i class="fa color-dark-dark fa-dumbbell pe-1"></i><?php echo $row_instant_slider['level'];?>-->
<!--</p>-->
<!--<div class="divider mb-2 mt-1"></div>-->
<!--<h4 class="mb-2" style="font-size:11pt" align="center"><?php echo $row_instant_slider['workout_title'];?></h4>-->
<!--</div>-->
<!--</div>-->
<!--</a>-->
<!--</div>-->

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
