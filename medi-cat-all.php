<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Medi-cat</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">
<div class="header header-fixed header-logo-center header-auto-show">
<a href="#" class="header-title">Relax</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->
<div class="page-content" style="background: url(https://cdn.dribbble.com/users/288987/screenshots/13934731/media/a15fd1dd31526c212dfb34d4ce1d7f8d.mp4);">
<div class="content notch-clear">
<div class="d-flex pt-2">
<div class="align-self-center me-auto">
<strong class="text-uppercase opacity-60 font-12">We wish for your health</strong>
<h1 class="mt-n2 font-27"><?php echo $user_name;?></h1>
</div>
<div class="align-self-center ms-auto">
<a href="https://e-trainerapp.in/scanner.php" data-menu="menu-add-funds" class="icon icon-m gradient-blue color-white rounded-m shadow-l rounded-m ms-2"><i class="fas fa-parachute-box font-24"></i></a>

</div>
</div>
</div>


<div class="splide tripple-slider slider-no-arrows slider-no-dots mb-4 me-n3" id="single-slider-3" data-splide='{"type":"loop","perPage":3}'>
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from medi_home_slider_plans");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=<?php echo $row_slider['slider_id'];?>" class="card card-style text-center mb-0 py-2 me-0">
<h1 class="font-30 py-2"><img src="<?php echo $row_slider['image_url'];?>"/></h1>
<h4 class="mt-n2 font-14"><?php echo $row_slider['category_name'];?></h4>
</a>
</div>


    <?php
}

?>

</div>
</div>
</div>







<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Guided Meditation</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-1">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='1' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['category_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>


<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Sleep</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide double-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-7">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='2' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['category_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>







<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Motivation</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-3a">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='8' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>


<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Work</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-3b">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='4' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>


<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Anxiety & Stress</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide double-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-3c">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='3' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>


<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Sounds</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-4">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_name='Soundscape' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style bg-14" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>


<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Wisdom</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide double-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-3d">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='5' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>


<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Anger</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-3e">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='6' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>


<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Manifestation</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-3f">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='7' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>




<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Chakra</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-5">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='9' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style bg-14" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>

<div class="d-flex px-3 mb-n3">
<div class="align-self-center">
<h4 class="mb-0">Relax</h4>
</div>
<!--<div class="align-self-center ms-auto">-->
<!--<a href="#" class="font-12">View All</a>-->
<!--</div>-->
</div>
<br>
<div class="splide double-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-6">
<div class="splide__track">
<div class="splide__list">

<?php
$recommed_slide_query=mysqli_query($cn,"select * from Med_All WHERE Cat_id='10' LIMIT 5");
while($row_slider=mysqli_fetch_array($recommed_slide_query))
{
    ?>

<div class="splide__slide">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_slider['Master_id'];?>" class="card card-style bg-14" data-card-height="200" style="background-image:url(<?php echo $row_slider['m_img'];?>);">
<!--<div class="card-top m-3">-->
<!--<span class="bg-theme color-theme px-2 py-2 rounded-sm font-10">-->
<!-- <i class="fa fa-heart color-red-dark pe-1"></i> -->
<!--<?php echo $row_slider['duration'];?>-->
<!--</span>-->
<!-- </div>-->

<div class="card-bottom mb-3 px-3">
<span class="badge bg-highlight text-uppercase color-white px-2 py-1"><?php echo $row_slider['Cat_name'];?></span>
<h5 class="color-white" style="font-family: arial;"><?php echo $row_slider['Audio_name'];?> </h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

    <?php
}

?>

</div>
</div>
</div>








<!-- <h6 class="text-uppercase font-700 px-3 font-14 mb-n1">Categories</h6>
<div class="splide double-slider slider-no-dots visible-slider" id="double-slider-1">
<div class="splide__track">
<div class="splide__list">
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style my-0 me-0 ms-3 py-2 mt-n3">
<div class="d-flex">
<div class="align-self-center">
<i class="fa fa-car fa-2x px-3 color-green-dark"></i>
</div>
<div class="align-self-center pe-3">
<h5>Racing</h5>
<p class="mb-0 font-11 mt-n2">24 Events</p>
</div>
</div>
</div>
</a>
</div>
<div class="splide__slide">
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
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style my-0 me-0 ms-3 py-2 mt-n3">
<div class="d-flex">
<div class="align-self-center">
<i class="fab fa-apple fa-2x px-3 color-gray-dark"></i>
</div>
<div class="align-self-center pe-3">
<h5>Releases</h5>
<p class="mb-0 font-11 mt-n2">24 Events</p>
</div>
</div>
</div>
</a>
</div>
<div class="splide__slide">
<a href="#" class="mx-3">
<div class="card card-style my-0 me-0 ms-3 py-2 mt-n3">
<div class="d-flex">
<div class="align-self-center">
<i class="fa fa-utensils fa-2x px-3 color-brown-dark"></i>
</div>
<div class="align-self-center pe-3">
<h5>Cooking</h5>
<p class="mb-0 font-11 mt-n2">24 Events</p>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
</div> -->

<div class="card card-style">
<div class="content">
<h3 class="color-blue-dark text-center">Browse by Category</h3>

 <p class="boxed-text-xl color-highlight">
Find what you love in our categories.
</p>
<div class="divider"></div>

<div class="row mb-0 text-center">
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=1" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/color/48/000000/meditation-guru.png"/></i>
<p class="font-11 font-700 text-uppercase">Meditation</p>
</a>
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=2" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/color/48/000000/sleep.png"/></i>
<p class="font-11 font-700 text-uppercase">Sleep</p>
</a>
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=3" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/48/000000/external-anxiety-psychology-flaticons-flat-flat-icons.png"/></i>
<p class="font-11 font-700 text-uppercase">Anxiety</p>
</a>
<div class="w-100 mb-3 mt-3"></div>
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=4" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/48/000000/external-focus-home-based-business-flaticons-flat-flat-icons-2.png"/></i>
<p class="font-11 font-700 text-uppercase">Work Focus</p>
</a>
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=8" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/48/000000/external-motivation-lifestyles-flaticons-flat-flat-icons.png"/></i>
<p class="font-11 font-700 text-uppercase">Motivation</p>
</a>
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=7" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/48/000000/external-pennant-international-day-of-peace-smashingstocks-circular-smashing-stocks.png"/></i>
<p class="font-11 font-700 text-uppercase">Manifest</p>
<div class="w-100 mb-3 mt-3"></div>
<a href="https://e-trainerapp.in/breathing-anim.php" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/external-others-inmotus-design/48/000000/external-Oxygen-round-icons-others-inmotus-design-6.png"/>

</i>
<p class="font-11 font-700 text-uppercase">Breathe</p>
</a>
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=5" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/48/000000/external-spiritual-religion-flaticons-flat-flat-icons-2.png"/></i>
<p class="font-11 font-700 text-uppercase">Wisdom</p>
</a>
<a href="https://e-trainerapp.in/medi-sub-category.php?main_cat_id=6" class="col-4">
<i class="font-30"><img src="https://img.icons8.com/clouds/48/000000/angry.png"/></i>
<p class="font-11 font-700 text-uppercase">Anger</p>
</a>
</a>
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
