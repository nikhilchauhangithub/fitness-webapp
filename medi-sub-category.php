
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
<a href="#" class="header-title">Overthinking Hurts</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
 <!--footer -->

<?php include 'footer.php';?>

 <!--footer -->

<div class="card-top">

<div class="content mt-3 mb-n3">
    <div class="card" style="padding:10px;height:100vh">
        
        <?php
    
      $main_cat_id=$_GET['main_cat_id'];
$finalpok_query=mysqli_query($cn,"select * from Med_All where Cat_id='$main_cat_id'");
$rows_title=mysqli_fetch_assoc($finalpok_query);
$title=$rows_title['category_name'];

    
    ?>
        
        <h3><?php echo $title;?></h3>
    
<div class="row">
    <?php
    $main_cat_id=$_GET['main_cat_id'];
$instant_slide_query=mysqli_query($cn,"select * from Med_All where Cat_id='$main_cat_id'");
while($row_instant_slider=mysqli_fetch_array($instant_slide_query))
{
    ?>
    
<div class="col-6 pe-2">
<a href="https://e-trainerapp.in/audio-player.php?music_id=<?php echo $row_instant_slider['Master_id'];?>">

<div class="card card-style mx-0 mb-3" style="background-image:url(<?php echo $row_instant_slider['m_img'];?>);" data-card-height="200">
<div class="card-bottom p-3">
<h1 class="color-white mb-1 font-16"><?php echo $row_instant_slider['days_per_week'];?></h1>
<p class="color-white mb-n1 opacity-70 line-height-s">
<?php echo $row_instant_slider['Audio_name'];?>
</p>
</div>
<div class="card-overlay bg-gradient rounded-0"></div>
</div>
</a>



</div>

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
