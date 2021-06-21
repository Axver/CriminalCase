<?php

include "../php/connect.php";

$idPangkat=$_POST['id'];

$sql = "DELETE FROM pangkat WHERE id_pangkat=$idPangkat";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}