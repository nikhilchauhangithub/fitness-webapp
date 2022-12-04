<!--<?php-->
<!--session_start();-->
<!--include('data-con/connection.php');-->

<!--setcookie("user_email",$_SESSION['user_token']);-->
<!--$uemail=$_COOKIE['user_email'];-->


<!--$get_status=mysqli_query($cn,"select * from client_table where user_email='$uemail'");-->
<!--$get_status_row=mysqli_fetch_assoc($get_status);-->

<!--$local_email=$get_status_row['user_email'];-->

<!--if($uemail=="" || $uemail==" ")-->
<!--{-->
<!--	session_unset($_SESSION['user_token']);-->
<!--	session_destroy();-->
	//header('location:index.php');
<!--}-->
<!--else{-->
    
<!--$get_user_data=mysqli_query($cn,"select * from client_table where user_email='$local_email'");-->
<!--$row_get_data=mysqli_fetch_assoc($get_user_data);-->
<!--$user_pic=$row_get_data['user_img'];-->
<!--$user_name=$row_get_data['user_full_name'];-->
<!--$user_token_id=$row_get_data['user_token_id'];-->
<!--$user_qr_id=$row_get_data['user_qr_id'];-->
<!--$weight=$row_get_data['weight'];-->
<!--$height=$row_get_data['height'];-->
<!--$water=$row_get_data['water'];-->
<!--$chest=$row_get_data['chest'];-->
<!--$Bicep_R=$row_get_data['Bicep_R'];-->
<!--$Bicep_L=$row_get_data['Bicep_L'];-->
<!--$neck=$row_get_data['neck'];-->
<!--$Thighs_R=$row_get_data['Thighs_R'];-->
<!--$Thigh_L=$row_get_data['Thigh_L'];-->
<!--$waist=$row_get_data['waist'];-->
<!--$Forearm_R=$row_get_data['Forearm_R'];-->
<!--$Forearm_L=$row_get_data['Forearm_L'];-->
<!--$Hips=$row_get_data['Hips'];-->
<!--$Calves_R=$row_get_data['Calves_R'];-->
<!--$Calves_L=$row_get_data['Calves_L'];-->




<!--$get_gym_data=mysqli_query($cn,"select * from clients_register where stu_token_id='$user_token_id'");-->
<!--$row_gym_get_data=mysqli_fetch_assoc($get_gym_data);-->
<!--$gym_token_id=$row_gym_get_data['gym_token_id'];-->

<!--$gym_profile_pic_fetch=mysqli_query($cn,"select * from gym_owner_details where qr_code='$gym_token_id'");-->
<!--$get_gym_image=mysqli_fetch_assoc($gym_profile_pic_fetch);-->
<!--$final_gym_img=$get_gym_image['gym_logo'];-->
<!--$gym_name=$get_gym_image['owner_name'];-->
<!--$gym_namek=$get_gym_image['gym_name'];-->
<!--	setcookie("user_email",$local_email);-->
<!--}-->


<!--?>-->