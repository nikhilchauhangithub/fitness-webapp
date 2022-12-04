


<!-- sidebar -->
<?php 
$check_mera_data=mysqli_query($cn,"select * from clients_register where stu_token_id='$user_token_id'");
$check_mera_review=mysqli_query($cn,"select * from user_reviews where user_token_id='$user_token_id'");
$gym_details_row=mysqli_fetch_assoc($check_mera_data);
$get_gym_id=$gym_details_row['gym_token_id'];
$fetch_gym_yaara=mysqli_query($cn,"select * from gym_owner_details where qr_code='$get_gym_id'");
$fetch_row_assoc=mysqli_fetch_assoc($fetch_gym_yaara);
$gym_name=$fetch_row_assoc['gym_name'];
$check_gym_status=mysqli_query($cn,"select * from clients_register where stu_token_id='$user_token_id'");
$print_status=mysqli_num_rows($check_gym_status);


?>


<div id="menu-sidebar-left-1" class="menu menu-box-left menu-box-detached menu-sidebar" data-menu-width="310">

<div class="sidebar-content notch-clear">
<div class="bg-theme mx-3 rounded-m shadow-m my-3">
<div class="d-flex px-2 pb-2 pt-2">
<div class="align-self-center">
<a href="#" data-menu="profile-photo"><img src="<?php echo $user_pic;?>" width="40" class="rounded-sm" alt="img"></a>
</div>
<div class="ps-2 align-self-center">
<h5 class="ps-1 mb-1 pt-1 line-height-xs font-17"><?php echo $user_name;?></h5>
<h6 class="ps-1 mb-0 font-400 opacity-40 font-12"><?php echo $gym_name;?></h6>
</div>
<div class="ms-auto">
<a href="#" data-bs-toggle="dropdown" class="icon icon-m ps-3"><i class="fa fa-ellipsis-v font-18 color-theme"></i></a>
<div class="dropdown-menu bg-transparent border-0 mb-n5">
<div class="card card-style rounded-m shadow-xl me-1">
<div class="list-group list-custom-small list-icon-0 px-3 mt-n1">

<a href="#" class="mb-n2" data-menu="editaccount">
<span>Account Details</span>
<i class="fa fa-angle-right"></i>
</a>

<a href="#" class="mb-n1" data-menu="logout">
<span>Logout</span>
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="card card-style">
<div class="content my-0">
<h5 class="font-700 text-uppercase opacity-40 font-12 pt-2 mb-0">Mode</h5>
<div class="list-group list-custom-small list-icon-0">
<a href="https://e-trainerapp.in/medi-cat-all.php">
<i class="fa font-12 fas fa-spa gradient-teal rounded-sm color-white"></i>
<span>Mindfullness</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="https://e-trainerapp.in/hw-home-menu.php">
<i class="fa font-12 fas fa-heartbeat gradient-blue rounded-sm color-white"></i>
<span>Home Workout</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="https://e-trainerapp.in/home-menu.php">
<i class="fa font-12 fas fa-fire-alt gradient-orange rounded-sm color-white"></i>
<span>Gym Workout</span>
<i class="fa fa-angle-right"></i>
</a>
<!--<a href="#">-->
<!--<i class="fa font-12 fa-user-shield gradient-green rounded-sm color-white"></i>-->
<!--<span>Trainer</span>-->
<!--<i class="fa fa-angle-right"></i>-->
<!--</a>-->
</div>
</div>
</div>
<div class="card card-style">
<div class="content my-0">
<h5 class="font-700 text-uppercase opacity-40 font-12 pt-2 mb-0">My</h5>
<div class="list-group list-custom-small list-icon-0">
    
    <a href="https://e-trainerapp.in/watch-ads.php" data-menu="#">
<i class="fa font-12 fa-coins gradient-teal rounded-sm color-white"></i>
<span>Shop</span>
<span class="badge bg-blue-dark">1000</span>
<i class="fa fa-angle-right"></i>
</a>
<!--<a href="#" data-menu="myqr">-->
<!--<i class="fa font-12 fa-qrcode gradient-blue rounded-sm color-white"></i>-->
<!--<span>My QR</span>-->
<!--<i class="fa fa-angle-right"></i>-->
<!--</a>-->
<!--<a href="https://e-trainerapp.in/reciept.php">-->
<!--<i class="fa font-12 fas fa-file-invoice gradient-green rounded-sm color-white"></i>-->
<!--<span>Fees Reciept</span>-->
<!--<span class="badge bg-highlight">NEW</span>-->
<!--<i class="fa fa-angle-right"></i>-->
<!--</a>-->
<a href="https://e-trainerapp.in/pricing.php">
<i class="fa font-12 fa-solid fa-chart-line gradient-yellow rounded-sm color-white"></i>
<span>Plan</span>
<span class="badge bg-highlight">NEW</span>
<i class="fa fa-angle-right"></i>
</a>



</div>
</div>
</div>




<div class="card card-style">
<div class="content my-0">
<h5 class="font-700 text-uppercase opacity-40 font-12 pt-2 mb-0">Gym</h5>
<div class="list-group list-custom-small list-icon-0">



<?php 
if($print_status==0)
{
    
}
else{
    ?>
    
<!--<a href="https://e-trainerapp.in/gym-profile.php">-->
<!--<i class="fa font-12 fa-home gradient-teal rounded-sm color-white"></i>-->
<!--<span>Gym Profile</span>-->
<!-- <span class="badge bg-highlight badge-small rounded-xl me-n1">2</span> -->
<!--<i class="fa fa-angle-right"></i>-->
<!--</a>-->

    <?php
}
?>




<?php
if($print_status==0)
{
    
}
else{
    ?>

 <a href="#">
<i class="fa font-12 fa-star gradient-yellow rounded-sm color-white"></i>
<span>Review</span>
<!-- <span class="badge bg-highlight badge-small rounded-xl me-n1">15</span> -->
<i class="fa fa-angle-right"></i>
</a>
    <?php
}
    ?>


 <a href="#">
<i class="fa font-12 fa-star gradient-orange rounded-sm color-white"></i>
<span>Support</span>
<!-- <span class="badge bg-highlight badge-small rounded-xl me-n1">15</span> -->
<i class="fa fa-angle-right"></i>
</a>



<?php 
if($print_status==0)
{
    
}
else{
    ?>

<i class="fa-solid fa-person-walking"></i>
<!--<a href="#" data-menu="leave-gym">-->
<!--<i class="fa font-12 fa-door-open gradient-red rounded-sm color-white"></i>-->
<!--<span>Leave Gym</span>-->
<!-- <span class="badge bg-highlight badge-small rounded-xl me-n1">15</span> -->
<!--<i class="fa fa-angle-right"></i>-->
<!--</a>-->


 <?php
}
?>


</div>
</div>
</div>

</div>
<div class="position-sticky w-100 bottom-0 end-0 pb-1">
<div class="card card-style mb-3">
<div class="content my-0 py-">
<div class="list-group list-custom-small list-icon-0">
<a href="#" data-toggle-theme data-trigger-switch="switch-dark2-mode" class="border-0">
<i class="fa font-12 fa-moon gradient-yellow color-white rounded-sm"></i>
<span>Dark Mode</span>
<div class="custom-control ios-switch">
<input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark2-mode">
<label class="custom-control-label" for="switch-dark2-mode"></label>
</div>
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<!-- sidebar -->

<?php
$check_review_stats=mysqli_query($cn,"select * from user_reviews where 	user_token_id='$user_token_id' and gym_token_id='$get_gym_id'");
$count_riview=mysqli_num_rows($check_review_stats);
if($count_riview>0)
{
    
}

else{
    ?>
    
    

<!-- Left Review -->

<div id="menu-review" class="menu menu-box-bottom menu-box-detached rounded-m"  data-menu-effect="menu-over">
<div class="menu-title"><h1>Leave a Review</h1><p class="color-theme opacity-50">Choose your Preferences</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
<form method="post">
<div class="content mb-0">
<div class="input-style input-style-2">
<select class="form-control" style="width:100%" name="star_rating">
    <option>5 Star</option>
    <option>4 Star</option>
    <option>3 Star</option>
    <option>2 Star</option>
    <option>1 Star</option>
</select>
</div>
<br>
<div class="input-style input-style-2">

<em>(required)</em>
<textarea class="form-control" placeholder="Give us your Feedback" name="review_text"></textarea>
</div>

<button class="close-menu btn btn-m font-800 rounded-sm btn-full text-uppercase bg-blue-dark" name="submitkd" type="submit" style="width:100%">Post Review</button>
&nbsp;
<br>
</div>
</form>
</div>
    <?php
}

?>




<?php
if(isset($_POST['submitkd'])){
    
    $review_text=$_POST['review_text'];
    $star_rating=$_POST['star_rating'];
    
    mysqli_query($cn,"insert into user_reviews(user_token_id,gym_token_id,given_star,review_text)values('$user_token_id','$get_gym_id','$star_rating','$review_text')");
    
}


?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- workout type -->

<div id="workouttype" class="menu menu-box-bottom menu-box-detached" data-menu-height="240">
<div class="menu-title"><h1>Workout Type</h1><p class="color-highlight">Select your workout type</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
 <div class="content mb-0 mt-3">
<div class="form-check icon-check">
<input class="form-check-input" type="checkbox" value="aa" id="check1" checked>
<label class="form-check-label" for="check1">Home Workout</label>
<i class="icon-check-1 far fa-square color-gray-dark font-20"></i>
<i class="icon-check-2 far fa-check-square font-28 color-highlight"></i>
</div>

<div class="form-check icon-check">
<input class="form-check-input" type="checkbox" value="aa" id="check2" checked>
<label class="form-check-label" for="check2">Gym Workout</label>
<i class="icon-check-1 far fa-square color-gray-dark font-20"></i>
<i class="icon-check-2 far fa-check-square font-28 color-highlight"></i>
</div>

<div class="divider mt-3 mb-2"></div>
<div class="content mb-0 mx-0">
<div class="row mb-0">
<div class="col-6">

<a href="#" class="btn btn-full btn-icon rounded-sm btn-m bg-red-dark text-uppercase font-700"><i class="fa fa-times bg-transparent"></i> Back</a>
</div>
<div class="col-6">
<a href="#" class="btn btn-full btn-icon rounded-sm btn-m bg-green-dark text-uppercase font-700"><i class="fa fa-check bg-transparent"></i> Accept</a>
</div>
</div>
</div>
</div>
</div>

<!-- workout type -->

<!-- qr success box -->

<div id="myqr" class="menu menu-box-modal bg-white-dark rounded-m" data-menu-height="200" data-menu-width="210">
<br><p align="center">
<img src="<?php echo $user_qr_id;?>">
</p>

</div>

<!-- qr success box -->


<!-- share -->


<div id="menu-share" class="menu menu-box-bottom menu-box-detached">
<div class="menu-title mt-n1"><h1>Are you sure you <br> want to leave </h1><p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
<div class="content mb-0">
<div class="divider mb-0"></div>
<div class="list-group list-custom-small list-icon-0">
<a href="auto_generated.php" class="shareToFacebook external-link">
<i class="font-18 fab fa-facebook-square color-facebook"></i>
<span class="font-13">Facebook</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="auto_generated.php" class="shareToTwitter external-link">
<i class="font-18 fab fa-twitter-square color-twitter"></i>
<span class="font-13">Twitter</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="auto_generated.php" class="shareToLinkedIn external-link">
<i class="font-18 fab fa-linkedin color-linkedin"></i>
<span class="font-13">LinkedIn</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="auto_generated.php" class="shareToWhatsApp external-link">
<i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
<span class="font-13">WhatsApp</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="auto_generated.php" class="shareToMail external-link border-0">
<i class="font-18 fa fa-envelope-square color-mail"></i>
<span class="font-13">Email</span>
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>
</div>

<!-- share -->




<!-- profile photo upload -->

<div id="profile-photo" class="menu menu-box-bottom menu-box-detached">
    <div class="menu-title mt-n1">
<h1>Profile Photo</h1>
<p class="color-highlight">Change Your Profile Photo</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="menu-title" align="center" style="padding:10px"><img src="<?php echo $user_pic;?>" class="img-fluid shadow-xl rounded-circle" style="width:92px;height:92px" alt="img"><br><p class="color-theme opacity-40"></p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>

<div class="content mt-2">
<div class="list-group list-custom-large">

    
    <form method="post" id="uploadForm" style="padding:20px">
     <a href="#" class="btn btn-s btn-full rounded-s bg-red-dark color-highlight text-uppercase font-900" style="height:auto;padding-top:0px" align="center" onclick="document.getElementById('getFile').click()"><h1 style="font-size:12pt;color:#fff">Select Profile Pic </h1></a>
<input name="userImage" type="file"id="getFile" accept="image/*" onchange="$('#uploadForm').submit();" style="visibility:hidden;"/>
</form>

</div>
</div>
</div>




<!-- profile photo upload -->



<!-- logout -->

<div id="leave-gym" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax" data-menu-height="230">
<div class="menu-title mt-n1">
<h1>Logout</h1>
<p class="color-highlight">Exit or Leave</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<p style="font-size: 12pt;">
Are you sure you want to leave <strong style="text-transform:uppercase"><?php echo $gym_name;?></strong> ?
</p>
<a href="https://e-trainerapp.in/leave_gym.php?id=<?php echo $user_token_id;?>" class="close-menu btn btn-l  rounded-sm btn-full bg-red-dark text-uppercase font-800">Leave</a>
</div>
</div>



<!--Weight-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="weight" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Weight</h1>
<p class="color-highlight">Update your weight</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['weight'];?>" placeholder="Name" name="t1">
</div>







<button name="weight" type="submit" class="close-menu btn btn-l  rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["weight"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set weight='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>





<!--Height-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="height" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Height</h1>
<p class="color-highlight">Update your height</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['height'];?>" name="t1">
</div>

<button name="height" type="submit" class="close-menu btn btn-l  rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["height"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set height='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>




<!--Water-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="water" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Water</h1>
<p class="color-highlight">Update your Water Level</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['water'];?>" name="t1">
</div>

<button name="water" type="submit" class="close-menu btn btn-l  rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["water"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set water='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!-- Water -->

<!--Chest-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="chest" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Chest</h1>
<p class="color-highlight">Update your Chest Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['chest'];?>" name="t1">
</div>

<button name="chest" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["chest"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set chest='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>



<!--Chest-->


<!--Bicep_R-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="Bicep_R" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Bicep_R</h1>
<p class="color-highlight">Update your Right Bicep Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Bicep_R'];?>" name="t1">
</div>

<button name="Bicep_R" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Bicep_R"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Bicep_R='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>



<!--Bicep_R-->



<!--Bicep_L-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="Bicep_L" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Bicep_L</h1>
<p class="color-highlight">Update your Left Bicep Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Bicep_L'];?>" name="t1">
</div>

<button name="Bicep_L" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Bicep_L"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Bicep_L='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>



<!--Bicep_L-->


<!--neck-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="neck" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Neck</h1>
<p class="color-highlight">Update your Neck Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['neck'];?>" name="t1">
</div>

<button name="neck" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["neck"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set neck='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>



<!--neck-->


<!--Thighs_R-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="Thighs_R" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Thigh_R</h1>
<p class="color-highlight">Update your Right Thigh Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Thighs_R'];?>" name="t1">
</div>

<button name="Thighs_R" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Thighs_R"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Thighs_R='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>



<!--Thighs_R-->


<!--Thigh_L-->


<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="Thigh_L" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Thigh_L</h1>
<p class="color-highlight">Update your Left Thigh Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Thigh_L'];?>" name="t1">
</div>

<button name="Thigh_L" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Thigh_L"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Thigh_L='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>



<!--Thighs_L-->



<!--waist-->

<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);

?>

<div id="waist" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Waist</h1>
<p class="color-highlight">Update your Waist Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['waist'];?>" name="t1">
</div>

<button name="waist" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["waist"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set waist='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!--waist-->

<!--Forearm_R-->

<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);

?>

<div id="Forearm_R" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Forearm_R</h1>
<p class="color-highlight">Update your Right Forearm Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Forearm_R'];?>" name="t1">
</div>

<button name="Forearm_R" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Forearm_R"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Forearm_R='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!--Forearm_R-->


<!--Forearm_L-->

<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);

?>

<div id="Forearm_L" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Forearm_L</h1>
<p class="color-highlight">Update your Left Forearm Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Forearm_L'];?>" name="t1">
</div>

<button name="Forearm_L" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Forearm_L"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Forearm_L='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!--Forearm_L-->


<!--Hips-->

<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);

?>

<div id="Hips" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Hips</h1>
<p class="color-highlight">Update your Hips Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Hips'];?>" name="t1">
</div>

<button name="Hips" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Hips"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Hips='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!--Hips-->

<!--Calves_R-->

<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);

?>

<div id="Calves_R" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Calves_R</h1>
<p class="color-highlight">Update your Right Calves Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Calves_R'];?>" name="t1">
</div>

<button name="Calves_R" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Calves_R"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Calves_R='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!--Calves_R-->


<!--Calves_L-->

<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);

?>

<div id="Calves_L" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Calves_L</h1>
<p class="color-highlight">Update your Left Calves Size</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">

<input type="number" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['Calves_L'];?>" name="t1">
</div>

<button name="Calves_L" type="submit" class="close-menu btn btn-l rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["Calves_L"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    mysqli_query($cn,"update client_table set Calves_L='$t1' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!--Calves_L-->


<!-- logout -->

<div id="logout" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax" data-menu-height="210">
<div class="menu-title mt-n1">
<h1>Logout</h1>
<p class="color-highlight">Logout confirmation</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<p style="font-size: 14pt;">
Are you sure you want to logout ?
</p>
<a href="https://e-trainerapp.in/logout.php" class="close-menu btn btn-l  rounded-sm btn-full bg-red-dark text-uppercase font-800">Logout</a>
</div>
</div>






<!-- edit account -->
<form method="post">
<?php
$get_user_details=mysqli_query($cn,"select * from client_table where user_token_id='$user_token_id'");
$get_client_row=mysqli_fetch_assoc($get_user_details);


?>


<div id="editaccount" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax">
<div class="menu-title mt-n1">
<h1>Account</h1>
<p class="color-highlight">Edit personal details</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">
<div class="divider mb-3"></div>
<div class="input-style has-borders validate-field mb-4">
    <font style="font-size:9pt;" class="color-red-dark">Name</font>
<input type="name" class="form-control validate-name" id="form1" value="<?php echo $get_client_row['user_full_name'];?>" placeholder="Name" name="t1" required>

</div>


<div class="input-style has-borders validate-field mb-4">
    <font style="font-size:9pt;" class="color-red-dark">Mobile Number</font>
<input type="tel" class="form-control validate-text" value="<?php echo $get_client_row['user_mobile'];?>" id="form4" maxlength="10" placeholder="Phone" name="t2" required>

</div>

<div class="input-style has-borders validate-field mb-4">
<font style="font-size:9pt;" class="color-red-dark">Date of Birth</font>
<input type="date" class="form-control validate-text" value="<?php echo $get_client_row['cu_dob'];?>" id="form4" placeholder="Phone" name="t3" required>
</div>

<div class="input-style has-borders validate-field mb-4">
<font style="font-size:9pt;" class="color-red-dark">Address</font>
<input type="text" class="form-control validate-text" value="<?php echo $get_client_row['cu_address'];?>" id="form4" placeholder="Address" name="t4" required>
</div>

<div class="input-style has-borders validate-field mb-4">
<font style="font-size:9pt;" class="color-red-dark">Reset Password</font>
<input type="password" class="form-control validate-text" value="<?php echo $get_client_row['user_pass'];?>" id="form4" placeholder="New Password" name="t5" required>
</div>

<button name="submit" type="submit" class="close-menu btn btn-l  rounded-sm btn-full bg-red-dark text-uppercase font-800" style="width:100%">Update</button>
<br>
</div>
</div>
</form>

<?php
if (isset($_POST["submit"]))
{
    include('data-con/connection.php');
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
     $t5=$_POST['t5'];
    mysqli_query($cn,"update client_table set user_full_name='$t1',user_mobile='$t2',cu_dob='$t3',cu_address='$t4',user_pass='$t5' where user_token_id='$user_token_id'");
    
     echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

<!-- edit account -->


<!-- my gym -->

<div id="mygym" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax" data-menu-height="195">
<div class="menu-title mt-n1">
<h1>Add gym</h1>
<p class="color-highlight">Enter Your Gym ID</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mt-n1">
<div class="search-box bg-theme color-theme rounded-m shadow-l">
<i class="fa fa-search"></i>
<input type="number" class="border-0" placeholder="Search for Trainer or Gym ID...(135435)" data-search>
<a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
</div>
<div class="search-results disabled-search-list mt-3">
<div class="card card-style mx-0 px-2 p-0 mb-0">
<a href="#" class="d-flex py-2" data-filter-item data-filter-name="all coffee milk fresh dairy taste">
<div>
<img src="images/grocery/6s.jpg" class="rounded-sm me-3" width="50" alt="img">
</div>
<div>
<span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Local Farm</span>
<strong class="color-theme font-16 d-block mt-n2">Fresh Milk</strong>
</div>
<div class="ms-auto text-center align-self-center pe-2">
<h5 class="line-height-xs font-18 pt-3">$4.<sup class="font-14">50</sup></h5>
<span class="font-9 d-block mt-n2">Price per Gallon</span>
</div>
</a>
<a href="#" class="d-flex py-2" data-filter-item data-filter-name="all fruit orange europe">
<div>
<img src="images/grocery/7s.jpg" class="rounded-sm me-3" width="50" alt="img">
</div>
<div>
<span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">European Import</span>
<strong class="color-theme font-16 d-block mt-n2">Oranges</strong>
</div>
<div class="ms-auto text-center align-self-center pe-2">
<h5 class="line-height-xs font-18 pt-3">$6.<sup class="font-14">50</sup></h5>
<span class="font-9 d-block mt-n2">Price per 12 Pcs</span>
</div>
</a>
<a href="#" class="d-flex py-2" data-filter-item data-filter-name="all fruit peach carolina usa">
<div>
<img src="images/grocery/5s.jpg" class="rounded-sm me-3" width="50" alt="img">
</div>
<div>
<span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">From Carolina</span>
<strong class="color-theme font-16 d-block mt-n2">Peaches</strong>
</div>
<div class="ms-auto text-center align-self-center pe-2">
<h5 class="line-height-xs font-18 pt-3">$8.<sup class="font-14">50</sup></h5>
<span class="font-9 d-block mt-n2">Price per 6 Pcs</span>
</div>
</a>
<a href="#" class="d-flex py-2" data-filter-item data-filter-name="all fruit tomato legume europe">
<div>
<img src="images/grocery/12s.jpg" class="rounded-sm me-3" width="50" alt="img">
</div>
<div>
<span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Asian Import</span>
<strong class="color-theme font-16 d-block mt-n2">Tomatos</strong>
</div>
<div class="ms-auto text-center align-self-center pe-2">
<h5 class="line-height-xs font-18 pt-3">$4.<sup class="font-14">50</sup></h5>
<span class="font-9 d-block mt-n2">Price per 8 Pcs</span>
</div>
</a>
<a href="#" class="d-flex py-2" data-filter-item data-filter-name="all cucumber pickle legume europe">
<div>
<img src="images/grocery/4s.jpg" class="rounded-sm me-3" width="50" alt="img">
</div>
<div>
<span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Australian Import</span>
<strong class="color-theme font-16 d-block mt-n2">Cucumber</strong>
</div>
<div class="ms-auto text-center align-self-center pe-2">
<h5 class="line-height-xs font-18 pt-3">$4.<sup class="font-14">50</sup></h5>
<span class="font-9 d-block mt-n2">Price per 12 Pcs</span>
</div>
</a>
<a href="#" class="d-flex py-2" data-filter-item data-filter-name="all salad cabbage legume europe">
<div>
<img src="images/grocery/11s.jpg" class="rounded-sm me-3" width="50" alt="img">
</div>
<div>
<span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Local Farm</span>
<strong class="color-theme font-16 d-block mt-n2">Cabbage</strong>
</div>
<div class="ms-auto text-center align-self-center pe-2">
<h5 class="line-height-xs font-18 pt-3">$1.<sup class="font-14">50</sup></h5>
<span class="font-9 d-block mt-n2">Price per 10 Pcs</span>
</div>
</a>
</div>
</div>
</div>
<div class="search-no-results disabled mt-4">
<div class="card card-style">
<div class="content">
<h1>No Results</h1>
<p>
Your search brought up no results. Try using a different keyword. Or try typying all
to see all items in the demo. These can be linked to anything you want.
</p>
</div>
</div>
</div>
<div class="content mb-0 mt-2" align="center">
<div class="col-4 pe-1" >

<a href="gymprofile.php" class="btn btn-m btn-full mb-3 rounded-sm text-uppercase font-900 border-red-dark color-red-dark bg-theme">Button</a>


</div>
</div>
</div>


<!-- my gym -->

<!-- create-plan -->

<div id="create-plan" class="menu menu-box-bottom menu-box-detached">
<div class="menu-title"><h1>Manage Clients </h1><p class="color-theme opacity-40">Manage your Fitness Clients</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
<div class="divider divider-margins mb-n2"></div>
<div class="content mt-2">
<div class="list-group list-custom-large">
<a href=menu-client.php data-menu="menu-client">
<i class="fa font-14 fa-user bg-green-dark rounded-s"></i>
<span>Client</span>
<strong>Assign Workout to Members</strong>
<i class="fa fa-angle-right"></i>
</a>
<a href="preplans.php" class="border-0">
<i class="fa font-14 fa-dumbbell bg-blue-dark rounded-s"></i>
<span>Plans</span>
<strong>Create Workout Plans in Advance</strong>
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>
</div>

<!-- create-plan -->

<!-- set and reps -->
<div id="set-Exercise-added" class="menu menu-box-bottom menu-box-detached">
<div class="menu-title"><h1>Exercise</h1><p class="color-highlight">Choose your Preferences</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
<div class="divider divider-margins"></div>
<div class="content mb-0">
<div>
<div class="d-flex mb-4">
<div>
<img src="images/pictures/9s.jpg" class="rounded-m shadow-xl" width="80">
</div>
<div class="ms-3">
<br>
<h1 class="color-green-dark">Leg Press</h1>

</div>
</div>
</div>
<div class="row mb-0">
<div class="col-8">
<div class="input-style input-style-always-active has-borders no-icon">
<input type="number" class="form-control focus-color focus-blue validate-name" id="f1" value="1" placeholder="1">
<label for="f1" class="color-blue-dark">Set</label>
<i class="fa fa-times disabled invalid color-red-dark"></i>
<i class="fa fa-check disabled valid color-green-dark"></i>
<em>(required)</em>
</div>
</div>
<div class="col-4">
<div class="input-style input-style-always-active has-borders no-icon">
<input type="number" class="form-control focus-color focus-blue validate-name" id="f1" value="1" placeholder="1">
<label for="f1" class="color-blue-dark">Rep</label>
<i class="fa fa-times disabled invalid color-red-dark"></i>
<i class="fa fa-check disabled valid color-green-dark"></i>
<em>(required)</em>
</div>
</div>
</div>
<a href="#" class="btn  btn-m font-800 rounded-sm btn-full text-uppercase bg-green-dark mb-4"><span class="close-menu">CLose product Edit</span></a>
</div>
</div>
<!-- set and reps -->

<!-- new-plan-workout -->

<div id="new-plan-workout" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-parallax" data-menu-height="195">
<div class="menu-title mt-n1">
<h1>Select Type</h1>
<p class="color-highlight">Create for Clients</p>
<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
</div>
<div class="content mb-0 mt-2">

<div class="speech-icon-right" data-menu="modal-wizard-step-1">
<div class="speech-bubble speech-left bg-dark color-white" ><i class="fa fa-plus"></i>&ensp;
<strong>Create a Plan</strong>

</div>
<div class="clearfix"></div>

</div>

<div class="speech-icon-right" data-menu="modal-workout-step-1">
<div class="speech-bubble speech-left bg-dark color-white" ><i class="fa fa-plus"></i>&ensp;
<strong>Create a Workout</strong>

</div>
<div class="clearfix"></div>

</div>



</div>

</div>


<!-- new-plan-workout -->


<!-- create new plan -->


<div id="modal-wizard-step-1" class="menu menu-box-modal rounded-m" data-menu-width="330">
<div class="content">
<div class="d-flex">
<div>
<h1>Create Plan</h1>
</div>
<div class="ms-auto">
<h1 class="opacity-30">1/2
</h1>
</div>
</div>


<div class="input-style no-borders has-icon validate-field mb-4">
<i class="fa fa-star"></i>
<input type="name" class="form-control validate-name" id="form1a" placeholder="Plan Name" required>
<label for="form1a" class="color-highlight">Plan</label>

<i class="fa fa-times disabled invalid color-red-dark"></i>
<i class="fa fa-check disabled valid color-green-dark"></i>
<em>(required)</em>
</div>
<span>
e.g. Strength Building, Fat Loss
</span>
<a href="#" data-menu="modal-wizard-step-2" class="btn btn-full btn-m rounded-m bg-dark color-white font-700 text-uppercase mt-4 mb-4">Next Step</a>
</div>
</div>
<div id="modal-wizard-step-2" class="menu menu-box-modal rounded-m" data-menu-width="330">
<div class="content">
<div class="d-flex">
<div>
<h1>Create workout</h1>
</div>
<div class="ms-auto">
<h1 class="opacity-30">2/2</h1>
</div>
</div>


<div class="input-style no-borders has-icon validate-field mb-4">
<i class="fa fa-star"></i>
<input type="name" class="form-control validate-name" id="form1a" placeholder="Workout Name">
<label for="form1a" class="color-highlight">Workout</label>

<i class="fa fa-times disabled invalid color-red-dark"></i>
<i class="fa fa-check disabled valid color-green-dark"></i>
<em>(required)</em>
</div>
<span>
e.g. Cardio, Chest
</span>
<a href="#" data-menu="modal-wizard-step-3" class="btn btn-full btn-m rounded-m bg-dark color-white font-700 text-uppercase mt-4 mb-4">Next Step</a>
</div>
</div>

<div id="modal-wizard-step-3" class="menu menu-box-modal rounded-m" data-menu-width="330">
<div class="content text-center px-3">
<i class="fa fa-heart scale-box color-red-dark fa-5x pb-3 pt-2"></i>
<h1>Cool!</h1>
<p class="px-2 mb-3">
Now Choose Exercises for your Workout
</p>
<a href="exerciseslist.php" class="close-menu btn btn-full btn-m rounded-m bg-dark color-white font-700 text-uppercase mb-4">Add Exercises</a>
</div>
</div>



<!-- create new plan -->

<!-- create new Workout -->


<div id="modal-workout-step-1" class="menu menu-box-modal rounded-m" data-menu-width="330">
<div class="content">
<div class="d-flex">
<div>
<h1>Select a Plan</h1>
</div>
<div class="ms-auto">
<h1 class="opacity-30">1/2
</h1>
</div>
</div>


<div class="input-style no-borders no-icon mb-4">
<label for="form5a" class="color-highlight">Select A Plan</label>
<select id="form5a">
<option value="default" disabled selected>Select a Plan</option>
<option value="1">None</option>
<option value="2">Plan 1</option>
<option value="3">Plan 2</option>
<option value="4">Plan 3</option>
<option value="5">Plan 4</option>

</select>
<span><i class="fa fa-chevron-down"></i></span>
<i class="fa fa-check disabled valid color-green-dark"></i>
<i class="fa fa-check disabled invalid color-red-dark"></i>
<em></em>
</div>
<a href="#" data-menu="modal-workout-step-2" class="btn btn-full btn-m rounded-m bg-dark color-white font-700 text-uppercase mt-4 mb-4">Next Step</a>
</div>
</div>
<div id="modal-workout-step-2" class="menu menu-box-modal rounded-m" data-menu-width="330">
<div class="content">
<div class="d-flex">
<div>
<h1>Create workout</h1>
</div>
<div class="ms-auto">
<h1 class="opacity-30">2/2</h1>
</div>
</div>


<div class="input-style no-borders has-icon validate-field mb-4">
<i class="fa fa-star"></i>
<input type="name" class="form-control validate-name" id="form1a" placeholder="Workout Name">
<label for="form1a" class="color-highlight">Workout</label>

<i class="fa fa-times disabled invalid color-red-dark"></i>
<i class="fa fa-check disabled valid color-green-dark"></i>
<em>(required)</em>
</div>
<span>
e.g. Cardio, Chest
</span>
<a href="#" data-menu="modal-workout-step-3" class="btn btn-full btn-m rounded-m bg-dark color-white font-700 text-uppercase mt-4 mb-4">Next Step</a>
</div>
</div>

<div id="modal-workout-step-3" class="menu menu-box-modal rounded-m" data-menu-width="330">
<div class="content text-center px-3">
<i class="fa fa-heart scale-box color-red-dark fa-5x pb-3 pt-2"></i>
<h1>Cool!</h1>
<p class="px-2 mb-3">
Now Choose Exercises for your Workout
</p>
<a href="exerciseslist.php" class="close-menu btn btn-full btn-m rounded-m bg-dark color-white font-700 text-uppercase mb-4">Add Exercises</a>
</div>
</div>



<!-- create new Workout -->

