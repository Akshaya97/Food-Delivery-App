<?php
    $error_msg="";
    include 'connection.php';
    session_start();
    $username =$_POST['username'] ?? "";
    $password  =$_POST['password'] ?? "";
    $q="SELECT name,password from users where name='$username';";
    $q1=mysqli_query($con,$q);
    $row=mysqli_fetch_array($q1);
    if($row['password'] == $password) {
        include '../restaurant.html';
    } else{
        $error_msg="incorrect email or password";
    }
?>