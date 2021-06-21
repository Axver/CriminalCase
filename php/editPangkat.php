<?php

include "../php/connect.php";

$idPangkat=$_POST['id'];
$sql = "SELECT * FROM pangkat WHERE id_pangkat=$idPangkat";


$hasil = array(
    'type'	=> 'DataGET',
    'features' => array()
);
$data=mysqli_query($conn,$sql);

while($d = mysqli_fetch_array($data)){
    $features = array(
        'properties' => array(
            'id' => $d['id_pangkat'],
            'pangkat' => $d['pangkat'],


        )
    );
    array_push($hasil['features'], $features);
}
 echo json_encode($hasil);




