<?php

include "../php/connect.php";

$no_polisi=$_POST['no_polisi'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$pangkat=$_POST['pangkat'];

$sql = "INSERT INTO user (`no_polisi`, `id_pangkat`, `nama`, `username`, `password`) VALUES ('$no_polisi', '$pangkat', '$nama', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}