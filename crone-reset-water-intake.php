<?php 
include('data-con/connection.php');
mysqli_query($cn,"update client_table set water='0'");
?>