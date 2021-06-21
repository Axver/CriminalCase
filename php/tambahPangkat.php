<?php

include "../php/connect.php";

$idPangkat=$_POST['id'];
$namaPangkat=$_POST['pangkat'];

$sql = "INSERT INTO pangkat (id_pangkat, pangkat)
VALUES ('$idPangkat', '$namaPangkat')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}