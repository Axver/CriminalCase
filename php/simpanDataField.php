<?php

include "../php/connect.php";

$name=$_POST['name'];
$value=$_POST['value'];
$id=$_POST['id'];
$no_laporan=$_POST['no_laporan'];


$sql = "INSERT INTO laporan_content (`id_jenis`, `field_name`, `no_laporan`, `value`) 
VALUES ('$id', '$name', '$no_laporan', '$value')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}