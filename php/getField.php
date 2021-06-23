<?php

include "../php/connect.php";

$id=$_POST['id'];
$sql = "SELECT * FROM field_code WHERE id_jenis='$id'";

//echo $sql;
$hasil = array(
    'type'	=> 'DataGET',
    'features' => array()
);
$data=mysqli_query($conn,$sql);

while($d = mysqli_fetch_array($data)){
    $features = array(
        'properties' => array(
            'id_jenis' => $d['id_jenis'],
            'field_name' => $d['field_name'],




        )
    );
    array_push($hasil['features'], $features);
}
echo json_encode($hasil);