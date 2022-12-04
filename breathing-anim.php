<?php include('data-con/connection.php');?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Exercise page</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
  <body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
      <div class="header header-fixed header-logo-center">
<a href="#" class="header-title">Breathe</a>
<a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>
      <!-- footer -->

<?php include 'footer-medi.php';?>

<!-- footer -->
<!-- data-menu -->

<?php include 'data-menu.php';?>

<!-- data-menu -->

    <div class="input">
      <label>Select Breaths</label>
      <select class="breath-input">
        <option value="3">3 Breaths</option>
        <option value="5">5 Breaths</option>
        <option value="7">7 Breaths</option>
        <option value="12">12 Breaths</option>
      </select>
    </div>
    <div class="circle-wrap">
      <div class="circle-outline"></div>
      <div class="circle-progress"></div>
    </div>
    <p class="breaths">Breaths remaining: <span class="breaths-text">3</span></p>
    <p class="instructions">Are you ready to start breathing?</p>
    <button class="start">Begin</button>
    <script src="/app.js"></script>
  </body>
  <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  /* color: #fff; */
  /* background: url("/bg.jpg"); */
  background-size: cover;
}

body::after {
  /* content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: -1; */
}

.input {
  display: flex;
  flex-direction: column;
  margin-bottom: 40px;
}

.input label {
  text-align: center;
  font-size: 18px;
  margin-bottom: 8px;
}

.input select {
  border: none;
  border-radius: 8px;
  min-width: 300px;
  font-size: 16px;
  padding: 8px 4px;
  background-color: #6236ff;
  color: #fff;
}

.input select:focus {
  outline: none;
}

.circle-wrap {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  margin-bottom: 40px;
}

.circle-outline {
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background-color: transparent;
  border: 15px solid #f1f1f1;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.circle-progress {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: #6236ff;
  border-radius: 50%;
  transition: 4s ease all;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.circle-grow {
  transform: scale(5.3);
}

.breaths {
  text-align: center;
  margin-bottom: 24px;
  font-size: 24px;
}

.instructions {
  text-align: center;
  margin-bottom: 32px;
}

button {
  padding: 8px 20px;
  border-radius: 8px;
  background-color: #6236ff;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: 0.3s ease all;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

button:hover {
  background-color: #f1f1f1;
  color: #6236ff;
}

.button-inactive {
  pointer-events: none;
  background-color: #969696;
}

  </style>

  <script>
    const circleProgress = document.querySelector(".circle-progress");
const numberOfBreaths = document.querySelector(".breath-input");
const start = document.querySelector(".start");
const instructions = document.querySelector(".instructions");
const breathsText = document.querySelector(".breaths-text");
let breathsLeft = 3;

// Watching for selected breaths from user
numberOfBreaths.addEventListener("change", () => {
  breathsLeft = numberOfBreaths.value;
  breathsText.innerText = breathsLeft;
});

// Grow/Shrink Circle
const growCircle = () => {
  circleProgress.classList.add("circle-grow");
  setTimeout(() => {
    circleProgress.classList.remove("circle-grow");
  }, 8000);
};

// Breathing Instructions
const breathTextUpdate = () => {
  breathsLeft--;
  breathsText.innerText = breathsLeft;
  instructions.innerText = "Breath in";
  setTimeout(() => {
    instructions.innerText = "Hold Breath";
    setTimeout(() => {
      instructions.innerText = "Exhale Breath Slowly";
    }, 4000);
  }, 4000);
};

// Breathing App Function
const breathingApp = () => {
  const breathingAnimtaion = setInterval(() => {
    if (breathsLeft === 0) {
      clearInterval(breathingAnimtaion);
      instructions.innerText = "Breathing session completed. Click 'Begin' to start another session!";
      start.classList.remove("button-inactive");
      breathsLeft = numberOfBreaths.value;
      breathsText.innerText = breathsLeft;
      return;
    }
    growCircle();
    breathTextUpdate();
  }, 12000);
};

// Start Breathing
start.addEventListener("click", () => {
  start.classList.add("button-inactive");
  instructions.innerText = "Get relaxed, and ready to begin breathing";
  setTimeout(() => {
    instructions.innerText = "Breathing is about to begin...";
    setTimeout(() => {
      breathingApp();
      growCircle();
      breathTextUpdate();
    }, 2000);
  }, 2000);
});

  </script>
</html>
