<?php

include "../php/connect.php";

$nopol=$_POST['id'];
$sql = "SELECT * FROM user WHERE no_polisi='$nopol'";

//echo $sql;
$hasil = array(
    'type'	=> 'DataGET',
    'features' => array()
);
$data=mysqli_query($conn,$sql);

while($d = mysqli_fetch_array($data)){
    $features = array(
        'properties' => array(
            'no_polisi' => $d['no_polisi'],
            'id_pangkat' => $d['id_pangkat'],
            'nama' => $d['nama'],
            'username' => $d['username'],
            'password' => $d['password'],


        )
    );
    array_push($hasil['features'], $features);
}
echo json_encode($hasil);




