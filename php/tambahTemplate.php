<?php

include "../php/connect.php";

$data=$_POST['data'];
$id=$_POST['id'];


$sql = "UPDATE jenis_laporan SET template='$data' WHERE id_jenis='$id'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}