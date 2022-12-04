<?php include('data-con/connection.php');?>

<!DOCTYPE HTML>
<html lang="en">

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>BMI</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">
<div class="header header-fixed header-logo-center">
<a href="#" class="header-title">BMI</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
<!-- footer -->
<?php include('footer.php');?>
<!-- footer close -->
<!-- data-menu -->

<!-- data menu end -->
<div class="page-content header-clear-medium">


<div class="card card-style">
<br>
<div class="card card-style gradient-green">
<div class="content">
<h2 class="color-white" id="result" align="center">Enter Value</h2>
<h3 class="color-white" id="category" align="center">Normal Weight</h3>

</div>
</div>

<div class="content mb-0">

<div class="row mb-0">
<div class="col-7">
<div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
<input type="number" min="1" max="200" id="weight"  oninput="calculate()" placeholder="Weight (kg)">
<label for="form1ac" class="color-blue-dark font-900 font-10">WEIGHT(kg)</label>

</div>
</div>
<div class="col-5">
<div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
<input type="number" min="1" max="200" id="height" oninput="calculate()" placeholder="Height (cm)">
<label for="form1ac" class="color-blue-dark font-900 font-10">HEIGHT(cm)</label>

</div>
</div>
</div>
</div>
</div>

</div>








</div>

      <!--Script-->
    <script type="text/javascript">
function calculate(){
    var bmi;
    var result = document.getElementById("result");

    var weight = parseInt(document.getElementById("weight").value);
    

    var height = parseInt(document.getElementById("height").value);
   

    bmi = (weight / Math.pow( (height/100), 2 )).toFixed(1);
    result.textContent = bmi;

    if(bmi < 18.5){
        category = "Underweight 😒";
        result.style.color = "#ffc44d";
    }
    else if( bmi >= 18.5 && bmi <= 24.9 ){
        category = "Normal Weight 😍";
        result.style.color = "#0be881";
    }
    else if( bmi >= 25 && bmi <= 29.9 ){
        category = "Overweight 😮";
        result.style.color = "#ff884d";
    }
    else{
        category = "Obese 😱";
        result.style.color = "#ff5e57";
    }
    document.getElementById("category").textContent = category;
}
    </script>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>
