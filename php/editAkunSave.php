<?php

include "../php/connect.php";

$no_poisi=$_POST['no_polisi'];
$pangkat=$_POST['pangkat'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "UPDATE users SET no_polisi='$no_poisi', id_pangkat='$pangkat',nama='$nama',username='username',password='password' WHERE no_polisi='$no_poisi'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}