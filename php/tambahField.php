<?php

include "../php/connect.php";

$id_laporan=$_POST['id_laporan'];
$code=$_POST['code'];






$dataBaru=explode("|",$code);
$count=count($dataBaru);

$count=$count-1;
$i=0;
$value=1;
while($i<$count)
{

    $dataX=$dataBaru[$i];
    $sql = "INSERT INTO field_code (id_jenis, field_name)
VALUES ('$id_laporan', '$dataX')";
    if ($conn->query($sql) === TRUE) {
        $value++;
    } else {

    }

    $i++;
}

if($value-1==$count)
{
    echo "Success";
}
else
{
    echo "Beberapa Field Mungkin Gagal Ditambahkan";
}


