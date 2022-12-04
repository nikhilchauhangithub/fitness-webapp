<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Gym Workout</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">

<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->

<div class="page-content">
    
<div class="content notch-clear mt-2">
<div class="d-flex pt-2">
<div class="align-self-center me-auto">
 <strong class="text-uppercase opacity-90 font-12">You are your best Investment</strong> 
 <h1 class="mt-n2 font-28"><?php echo $user_name;?></h1> 
</div>
<div class="align-self-center ms-auto">
<a href="https://e-trainerapp.in/scanner.php" data-menu="menu-add-funds" class="icon icon-m gradient-blue color-white rounded-m shadow-l rounded-m ms-2"><i class="fas fa-parachute-box font-24"></i></a>

</div>


</div>
</div>

<!--

<div class="d-flex px-3 mb-2">
<div class="align-self-center">
<h4 class="mb-0">Your Plan</h4>
</div>

</div>
<div class="card card-style" style="background-image:url(images/fitness/1m.jpg)" data-card-height="260">
<div class="card-top no-click p-2 m-1">
<h1 class="color-white font-19 mb-0">1500 kcal</h1>
<p class="color-white mb-0 mt-n2 font-9 line-height-xs">
1 Hour, 20 Minutes
</p>
</div>
<div class="card-top p-3">
<a href="#" class="btn btn-s bg-white color-black rounded-s scale-box font-700 text-uppercase float-end">Start Now</a>
</div>
<div class="card-bottom m-2">
<div class="d-block px-2 py-2 rounded-m">
<div class="pe-3">
<h1 class="color-white font-23 font-800 mb-0">Train like a Pro</h1>
<p class="color-white font-12 mb-0 line-height-s opacity-70">Heavy lifting followed by a grueling cardio session.</p>
</div>
</div>
</div>
<div class="card-overlay bg-gradient opacity-80"></div>
</div>
-->






<div class="d-flex px-3 mb-n3">
    
    
    
    
    
<div class="align-self-center">
<h4 class="mb-0">Recommended</h4>
 </div>
<div class="align-self-center ms-auto">

</div>
</div>
<div class="splide double-slider slider-no-dots visible-slider" id="double-slider-1a">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from home_slider_plans");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>
    <div class="splide__slide">
<a href="https://e-trainerapp.in/sub-category.php?main_cat_id=<?php echo $row_slider['slider_id'];?>" class="mx-3">
<div class="card card-style me-0 mb-0" style="background-image:url(<?php echo $row_slider['image_url'];?>);" data-card-height="250">

<div class="card-bottom p-2 px-3">
<h3 class="color-white line-height-s"><?php echo $row_slider['category_name'];?></h3>

</div>
<div class="card-overlay bg-gradient"></div>
</div>
</a>
</div>


    <?php
}

?>


</div>
</div>
</div>




<div class="d-flex px-3">
<div class="align-self-center">
<h4 class="mb-0">Instant Workout</h4>
</div>
<div class="align-self-center ms-auto">

</div>
</div>
<div class="content mt-2 mb-n3">
<div class="row">
    <?php
$instant_slide_query=mysqli_query($cn,"select * from instant_workout");
while($row_instant_slider=mysqli_fetch_array($instant_slide_query))
{
    ?>
<div class="col-6 pe-2">
<a href="https://e-trainerapp.in/instant-workout-sub.php?workout_id=<?php echo $row_instant_slider['workout_id'];?>" class="card card-style mx-0 mb-3">
<div class="card-top m-2 text-end">

</div>
<img src="<?php echo $row_instant_slider['image_url'];?>" alt="img" class="img-fluid">
<div class="p-2">
<p class="mb-0 font-10 opacity-70">
<i class="fa color-dark-dark fa-dumbbell pe-1"></i><?php echo $row_instant_slider['body_part'];?>
<i class="fa color-orange-dark fa-fire pe-1 ps-2"></i><?php echo $row_instant_slider['calory_burn'];?>kcal
</p>
<div class="divider mb-2 mt-1"></div>
<h4 class="mb-2" align="center"><?php echo $row_instant_slider['body_part'];?></h4>
</div>
</a>
</div>

<?php
}
?>















</div>
</div>

</div>

<!-- <script type="text/javascript">


$(document).ready(function (e){
$("#uploadForm").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "https://e-trainerapp.in/image-upload.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$("#targetLayer").html(data);

location.href="https://e-trainerapp.in/home-menu.php";
},
error: function(){} 	        
});
}));
});

</script> -->


<!-- data-menu -->

<?php include 'data-menu.php';?>

<!-- data-menu -->






<style>
            .menu-box-left.menu-box-detached{left:10px;top:10px!important;bottom:10px;height:calc(100% - 20px);transform:translateX(-120%)}.menu-box-right.menu-box-detached{right:10px;top:10px!important;bottom:10px;height:calc(100% - 20px);transform:translateX(120%)}.menu-box-left .android-switch,.menu-box-left .ios-switch{transform:scale(.7,.7) translateY(-7px) translateX(8px);margin-right:-35px}.sidebar-content{min-height:93%;display:flex;flex-direction:column}.badge-small{width:18px;height:18px;line-height:18px;text-align:center;padding:0!important}.menu-sidebar .list-custom-small{padding-top:5px}.menu-sidebar .list-custom-small a{border-bottom:0!important}.theme-light .menu-box-left{background-color:#f7f7f7}.menu-sidebar .list-custom-small i:first-child{width:27px!important;height:27px!important;line-height:27px!important}.menu-sidebar .list-custom-small img{margin-right:3px;transform:translateX(-2px)}
        </style>


<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>