<?php

include "../php/connect.php";

$idPangkat=$_POST['id'];
$namaPangkat=$_POST['pangkat'];

$sql = "UPDATE pangkat SET pangkat='$namaPangkat' WHERE id_pangkat=$idPangkat";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}