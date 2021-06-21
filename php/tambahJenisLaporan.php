<?php

include "../php/connect.php";

$id=$_POST['id'];
$nama=$_POST['nama'];

$sql = "INSERT INTO jenis_laporan (id_jenis, nama_laporan)
VALUES ('$id', '$nama')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}