<?php

include "../php/connect.php";

$id=$_POST['id'];
$sql = "SELECT * FROM jenis_laporan WHERE id_jenis='$id'";

//echo $sql;
$hasil = array(
    'type'	=> 'DataGET',
    'features' => array()
);
$data=mysqli_query($conn,$sql);

while($d = mysqli_fetch_array($data)){
    $features = array(
        'properties' => array(
            'template' => $d['template'],





        )
    );
    array_push($hasil['features'], $features);
}
echo json_encode($hasil);