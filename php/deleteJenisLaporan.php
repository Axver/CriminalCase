<?php

include "../php/connect.php";

$id=$_POST['id'];

$sql = "DELETE FROM laporan_content WHERE id_jenis='$id'";
mysqli_query($conn,$sql);
$sql = "DELETE FROM field_code WHERE id_jenis='$id'";
mysqli_query($conn,$sql);
$sql = "DELETE FROM laporan WHERE id_jenis='$id'";
mysqli_query($conn,$sql);
$sql = "DELETE FROM jenis_laporan WHERE id_jenis='$id'";



if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}