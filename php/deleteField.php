<?php

include "../php/connect.php";

$id=$_POST['id'];
$field=$_POST['field'];

$sql = "DELETE FROM field_code WHERE id_jenis='$id' AND field_name='$field'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}