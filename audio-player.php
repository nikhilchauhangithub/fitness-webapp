<?php
include('data-con/connection.php');
$music_id=$_GET['music_id'];

$get_music_query=mysqli_query($cn,"select * from Med_All where Master_id='$music_id'");

$music_row=mysqli_fetch_assoc($get_music_query);
$player_url=$music_row['Audio_Link'];
$music_title=$music_row['Audio_name'];
$category_name=$music_row['Cat_name'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
   
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="https://kit.fontawesome.com/860e7596f3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

    <title>Mini Music Player</title>
</head>
<!-- footer -->

<!--<?php include 'footer.php';?>-->

<!-- footer -->




<body>
 <div class="audio-container">
        <h1>Swift</h1>

        <div class="audio-img-wrapper">
            <div class="audio-img">
                <img src="https://images.unsplash.com/photo-1525362081669-2b476bb628c3?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg" alt="" class="img">
            </div>

            <h2 class="audio-title">Title of audio</h2>
            <h6 class="audio-singer">Singer name</h6>
        </div>

        <div class="audio-progress">
            <div class="progress">
                <div class="progress-bar"></div>
                <div class="progress-head"></div>
            </div>
            <div class="current-time">00:00</div>
            <div class="duration">00:00</div>
        </div>

        <div class="audio-btns">
            <!-- <button class="btn shuffle">
                <i class="fa-solid fa-shuffle"></i>
            </button> -->

            <button class="btn skip-back">
                <i class="fa-solid fa-backward-step"></i>
            </button>

            <button class="btn play">
                <span> <i class="fa-solid fa-play"></i> </span>
            </button>

            <button class="btn skip-forward">
                <i class="fa-solid fa-forward-step"></i>
            </button>

            <!-- <button class="btn repeat">
                <i class="fa-solid fa-repeat"></i>
            </button> -->
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script type="text/javascript">
        const playBtn = document.querySelector(".play"),
    skipForward = document.querySelector(".skip-forward"),
    skipBack = document.querySelector(".skip-back"),

    progressBarContainer = document.querySelector('.progress'),
    progressBar = document.querySelector('.progress-bar'),
    progressHead = document.querySelector('.progress-head'),

    currentTimeHtml = document.querySelector(".current-time"),
    durationHtml = document.querySelector(".duration"),

    playIcon = document.querySelector('.fa-play'),
    img = document.querySelector('.img'),
    title = document.querySelector(".audio-title"),
    singer = document.querySelector(".audio-singer");

this.tracks = [
    {
        name: "<?php echo $music_title;?>",
        artist: "<?php echo $category_name;?>",
        cover: "https://images.unsplash.com/photo-1494232410401-ad00d5433cfa?crop=entropy&cs=tinysrgb&fm=jpg",
        source: "<?php echo $player_url;?>",
    }
];

// Initial state values
let audio = null,
    barWidth = null,
    duration = null,
    currentTime = null,
    isTimerPlaying = false,
    currentTrackIndex = 0,
    currentTrack = tracks[0];

// Set initial state values
audio = new Audio();
audio.src = currentTrack.source;
img.src = currentTrack.cover;
title.innerText = currentTrack.name;
singer.innerText = currentTrack.artist;

playBtn.addEventListener('click', () => {
    if (audio.paused) {
        audio.play();
        isTimerPlaying = true;
    } else {
        audio.pause();
        isTimerPlaying = false;
    }
});

progressBarContainer.addEventListener('click', (x) => {
    let maxduration = audio.duration;
    let position = x.pageX - progressBarContainer.offsetLeft;
    let percentage = (100 * position) / progressBarContainer.offsetWidth;
    if (percentage > 100) percentage = 100;
    if (percentage < 0) percentage = 0;
    barWidth = percentage + "%";

    audio.currentTime = (maxduration * percentage) / 100;
    progressBar.style.width = `${barWidth}%`;
    progressHead.style.setProperty("left", `${barWidth}%`);
    img.src = currentTrack.cover;
});


skipForward.addEventListener('click', () => {

    if (currentTrackIndex < tracks.length - 1) {
        currentTrackIndex++;
    } else {
        currentTrackIndex = 0;
    }

    currentTrack = tracks[currentTrackIndex];

    audio.src = currentTrack.source;
    img.src = currentTrack.cover;
    title.innerText = currentTrack.name;
    singer.innerText = currentTrack.artist;

    barWidth = 0;
    progressBar.style.width = `${barWidth}%`;
    progressHead.style.setProperty("left", `${barWidth}%`);
    currentTimeHtml.innerText = `0:00`;
    durationHtml.innerText = `0:00`;

    audio.currentTime = 0;
    audio.src = currentTrack.source;

    setTimeout(() => {
        if (isTimerPlaying) {
            audio.play();
        } else {
            audio.pause();
        }
    }, 300);
});

skipBack.addEventListener('click', () => {
    if (currentTrackIndex > 0) {
        currentTrackIndex--;
    } else {
        this.currentTrackIndex = this.tracks.length - 1;
    }
    currentTrack = tracks[currentTrackIndex];

    audio.src = currentTrack.source;
    img.src = currentTrack.cover;
    title.innerText = currentTrack.name;
    singer.innerText = currentTrack.artist;

    barWidth = 0;
    progressBar.style.width = `${barWidth}%`;
    progressHead.style.setProperty("left", `${barWidth}%`);
    currentTimeHtml.innerText = `0:00`;
    durationHtml.innerText = `0:00`;

    audio.currentTime = 0;
    audio.src = currentTrack.source;

    setTimeout(() => {
        if (isTimerPlaying) {
            audio.play();
        } else {
            audio.pause();
        }
    }, 300);
});

audio.ontimeupdate = function () {
    if (audio.duration) {
        barWidth = (100 / audio.duration) * audio.currentTime;

        let durmin = Math.floor(audio.duration / 60);
        let dursec = Math.floor(audio.duration - durmin * 60);
        let curmin = Math.floor(audio.currentTime / 60);
        let cursec = Math.floor(audio.currentTime - curmin * 60);

        if (durmin < 10) durmin = "0" + durmin;

        if (dursec < 10) dursec = "0" + dursec;

        if (curmin < 10) curmin = "0" + curmin;

        if (cursec < 10) cursec = "0" + cursec;

        duration = durmin + ":" + dursec;
        currentTime = curmin + ":" + cursec;

        progressBar.style.width = `${barWidth}%`;
        progressHead.style.setProperty("left", `${barWidth}%`)
        currentTimeHtml.innerText = `${currentTime}`;
        durationHtml.innerText = `${duration}`;

        if (isTimerPlaying) {
            playIcon.classList.remove('fa-play');
            playIcon.classList.add('fa-pause');


        } else {
            playIcon.classList.add('fa-play');
            playIcon.classList.remove('fa-pause');
        }
    }
};

audio.onended = function () { };

// Animations
TweenMax.from('.img', 4, { rotation: "+=360", transformOrigin: "50% 50%", ease: Linear.easeNone, repeat: -1 });
gsap.from("body, h1, .audio-img, .audio-title, .audio-singer, .audio-btns", {
    opacity: 0,
    duration: 2,
    delay: 1.5,
    y: 25,
    ease: "expo.out",
    stagger: 0.2,
});
    </script>

    <style type="text/css">
        
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body,
html {
    margin: 0;
    padding: 0;
    font-family: "Roboto", sans-serif;
    background-color: #2d2464;
    height: 100%;
    width: 100%;
    overflow: hidden;
    color: #fafafa;
    user-select: none;
}

img {
    height: 100%;
    width: 100%;
}

.audio-container {
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
}

.audio-img {
    width: 200px;
    height: 200px;
}

h1 {
    text-transform: uppercase;
    font-size: 1.2rem;
}

.audio-img-wrapper {
    display: flex;
    align-items: center;
    flex-direction: column;
    overflow: hidden;
    cursor: pointer;
}

.audio-img {
    border: 6px solid #9664ff;
    padding: 10px;
    border-radius: 100%;
    text-align: center;
}

.audio-img img {
    border-radius: 100%;
}

h2 {
    margin-top: 1rem;
    font-size: 1.5rem;
    text-transform: capitalize;
}

h6 {
    font-size: 0.9rem;
    margin-top: 0.5rem;
    font-weight: 400;
    color: #bcbcbc;
}

.audio-progress {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    width: 60%;
}

.progress {
    grid-column: 1 / -1;
    margin-bottom: 0.8rem;
    text-align: center;
    background-color: #3d3a4b;
    height: 0.4rem;
    border-radius: 0.8rem;
    cursor: pointer;
    position: relative;
}

.progress-head {
    position: absolute;
    background-color: #fafafa;
    height: 1.2rem;
    width: 1.2rem;
    top: 0;
    left: 0;
    transform: translate(-50%, -32%);
    border-radius: 100%;
    z-index: 2;
    box-shadow: 0 0 0 3px #aaabf8;
}

.progress-bar {
    background-color: #fff;
    height: 100%;
    position: relative;
    width: 0%;
    border-radius: 0.8rem;
    margin-top:-100px;
}

.current-time {
    text-align: left;
    margin-left: 0.5rem;
}

.duration {
    text-align: end;
    margin-right: 0.5rem;
}

.audio-btns {
    width: 300px;
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    margin-top:-150px;
}

.btn {
    cursor: pointer;
    border: unset;
    box-shadow: unset;
    background-color: unset;
    font-size: 1.4rem;
    color: #fafafa;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.play {
    background: linear-gradient(to right, #425ef0, #7854fb);
    text-align: center;
    border-radius: 100%;
    padding: 1rem 1.2rem;
    /* padding-left: 1.5rem; */
}

    </style>

</body>

</html>