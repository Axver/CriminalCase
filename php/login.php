<?php
include "connect.php";
$username=$_GET['username'];
$password=$_GET['password'];

$password=md5($password);




$login = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../views/pages/index.php");
}else{
    header("location:../index.php");
}