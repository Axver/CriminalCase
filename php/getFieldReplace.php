<?php

include "../php/connect.php";

$id=$_POST['id'];
$sql = "SELECT * FROM field_code LEFT join laporan_content ON field_code.id_jenis=laporan_content.id_jenis WHERE no_laporan='$id'";

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
            'value' => $d['value'],




        )
    );
    array_push($hasil['features'], $features);
}
echo json_encode($hasil);