<?php

include 'connect.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `admins` WHERE `admin_email` = '$email' AND `admin_pwd` = '$pass'";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:admin_dashboard.php');
}
else{
    echo "<script>alert('Invalid Credentials')</script>";
    
}




?>