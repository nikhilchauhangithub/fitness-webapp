<?php

include('data-con/connection.php');
$t1=$_POST['t1'];

   $zquery=mysqli_query($cn,"select user_pass from client_table where user_email='$t1'");

while($row=mysqli_fetch_array($zquery)){
    $tk=$row['user_pass'];
    
}

    $to = $t1;
$subject = "Project I Account Recover Password";

$message = "
<html>
<body>
<p>
Your Account Password is: <b>$tk;</b><br>
</p>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <project-i@e-trainerapp.in>' . "\r\n";

mail($to,$subject,$message,$headers);  

header('location:https://e-trainerapp.in/');


    
?>