<?php

require 'model/Mahasiswa.php';

$mhs = new Mahasiswa();

$data_mhs = $mhs->getAll();


print_r($data_mhs[0]);
foreach ($data_mhs as $kunci => $value){
    
    echo "Nama " . $value["nama"];

    echo "<br>";
    echo "HOBI : " . $value["hobi"];
    echo "<br><hr>";
}
