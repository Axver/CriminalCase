<?php

include "../php/connect.php";

$idPangkat=$_POST['id'];

$sql = "DELETE FROM laporan_content WHERE no_laporan=$idPangkat";
mysqli_query($conn,$sql);


$sql = "DELETE FROM laporan WHERE no_laporan=$idPangkat";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}