<?php
include('customer-session.php');

?>

<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>BMR</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="page">
<div class="header header-fixed header-logo-center">
<a href="#" class="header-title">BMR</a>
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
<div class="result">
<h2 class="color-white" id="bmr" align="center">BMR</h2>
<h3 class="color-white" id="activityLevel" align="center">TDEE</h3>

</div>
</div>
<form action="javascript:void(0)" onsubmit="handleBmrCalculatorSubmit()">
<div class="content mb-0">

<div class="row mb-0">
<div class="col-7">
<div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
<input type="number" class="form-control" min="10" max="500" id="weight" placeholder="Weight (kg)">
<label for="form1ac" class="color-blue-dark font-900 font-10">WEIGHT(kg)</label>

</div>
</div>
<div class="col-5">
<div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
<input type="number" min="10" class="form-control" max="1000" id="height" placeholder="Height (cm)">
<label for="form1ac" class="color-blue-dark font-900 font-10">HEIGHT(cm)</label>

</div>
</div>
</div>


<div class="row mb-0">
<div class="col-7">
<div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
<input type="number" min="14" max="99" class="form-control" id="age" placeholder="Enter Age...">
<label for="form1ac" class="color-blue-dark font-900 font-10">AGE</label>

</div>
</div>
<div class="col-5">
<div class="input-style no-borders no-icon validate-field mb-4">

<label for="form5a" class="color-blue-dark font-900 font-10">Select Your Gender</label>
<select id="sex">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>

<em>(required)</em>
</div>
</div>
</div>

<div class="row mb-0">
<div class="input-style no-borders no-icon validate-field mb-4">

<label for="form5a" class="color-blue-dark font-900 font-10">Select Your Activity Type</label>
<select id="activity">
        <option value="none">Select Your Activity Type</option>
        <option value="sedentary">Sedentary: little or no exercise</option>
        <option value="light">Exercise 1-3 times/week</option>
        <option value="moderate">Exercise 4-5 times/week</option>
        <option value="very active">Daily exercise or intense exercise 3-4 times/week</option>
        <option value="extremely active">Intense exercise 6-7 times/week</option>
    </select>

<em>(required)</em>
</div>

</div>
<div align="center">
<button class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-green-dark">Button</button>
</div>
</form>

</div>

</div>

</div>












<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>

<script>
    
    
function handleBmrCalculatorSubmit() {

    let bmr;
    let calorieUseActivity;

    const activityLevel = new Map([
        ['none', 0],
        ['sedentary', 1.2],
        ['light', 1.375],
        ['moderate', 1.55],
        ['very active', 1.725],
        ['extremely active', 1.9]
    ]);

    const age = document.getElementById('age').value;
    const height = document.getElementById('height').value;
    const weight = document.getElementById('weight').value;

    const sex = document.getElementById('sex').value;

    const activityValue = activityLevel.get(document.getElementById('activity').value);

    // Men  BMR = (10 × weight in kg) + (6.25 × height in cm) - (5 × age in years) + 5
    const maleBmr = (10 * weight) + (6.25 * height) - (5 * age) + 5;
    // Women    BMR = (10 × weight in kg) + (6.25 × height in cm) - (5 × age in years) - 161
    const womanBmr = (10 * weight) + (6.25 * height) - (5 * age) - 161;

    if(sex === 'f') {
        bmr = womanBmr;

    } else {
        bmr = maleBmr;
    }

    if(activityValue !== 0) {
        calorieUseActivity = bmr * activityValue;
        document.getElementById('activityLevel').innerText = Math.round(calorieUseActivity) + ' kcal';
    }
    document.getElementById('bmr').innerText = Math.round(bmr) + ' kcal';
}
</script>

</body>
