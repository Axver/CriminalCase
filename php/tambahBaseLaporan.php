<?php

include "../php/connect.php";

$no_laporan=$_POST['no_laporan'];
$id_jenis=$_POST['id_jenis'];
$date=$_POST['date'];
$no_polisi=$_POST['no_polisi'];
$ktp=$_POST['ktp'];

$sql = "INSERT INTO laporan (no_laporan,id_jenis,tgl_bulan_thn,no_polisi)
VALUES ($no_laporan, '$id_jenis','$date','$no_polisi')";

if ($conn->query($sql) === TRUE) {
    echo "Sukses Menambahkan Laporan, Selanjutnya Isikan Field yang Dimintas";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}