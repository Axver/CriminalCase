<?php

include "../php/connect.php";

$nopolis=$_POST['id'];

$sql = "DELETE FROM users WHERE no_polisi='$nopolis'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}