<?php
    $error_msg="";
    include 'connection.php';
    session_start();
    $username =$_POST['username'] ?? "";
    $password  =$_POST['password'] ?? "";
    $email  =$_POST['email'] ?? "";
    $mobile  =$_POST['mobile'] ?? "";
    $q="INSERT INTO users (`name`, `password`, `email`, `mobile`) VALUES ('$username', '$password', '$email', '$mobile');";
    $q1=mysqli_query($con,$q);
    include '../restaurant.html';;
?>