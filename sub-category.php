
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
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
<div id="page">
<div class="header header-fixed header-logo-center header-auto-show">
<a href="#" class="header-title">Plan Index</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
<!-- footer -->

<?php include 'footer.php';?>

<!-- footer -->

<div class="card-top">

<div class="content mt-3 mb-n3">
    <div class="card" style="padding:10px;height:100vh">
        
        <?php
    
      $main_cat_id=$_GET['main_cat_id'];
$finalpok_query=mysqli_query($cn,"select * from plans_table where category_id='$main_cat_id'");
$rows_title=mysqli_fetch_assoc($finalpok_query);
$title=$rows_title['plan_title'];

    
    ?>
        
        <h3><?php echo $title;?> Plans</h3>
    
<div class="row">
    <?php
    $main_cat_id=$_GET['main_cat_id'];
$instant_slide_query=mysqli_query($cn,"select * from plans_table where category_id='$main_cat_id'");
while($row_instant_slider=mysqli_fetch_array($instant_slide_query))
{
    ?>
<div class="col-6 pe-2">
<a href="plan-index.php?plan_id=<?php echo $row_instant_slider['plan_id'];?>">
    <div class="card card-style mx-0 mb-3">
<div class="card-top m-2 text-end">
<!--<span class="bg-white color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl"><?php echo $row_instant_slider['time'];?></span>-->
</div>
<img src="<?php echo $row_instant_slider['m_img'];?>" alt="img" class="img-fluid">
<div class="p-2">
<p class="mb-0 font-10 opacity-70">
<i class="fa color-dark-dark fa-dumbbell pe-1"></i><?php echo $row_instant_slider['level'];?>
<i class="fa color-orange-dark fa-fire pe-1 ps-2"></i><?php echo $row_instant_slider['days_per_week'];?>
</p>
<div class="divider mb-2 mt-1"></div>
<h4 class="mb-2"><?php echo $row_instant_slider['plan_title'];?></h4>
</div>
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
