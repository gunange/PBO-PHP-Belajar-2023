<?php

include_once "model/Mahasiswa.php";
include_once "model/Mobil.php";
include_once "model/Robot.php";


$transformer = new Robot("Transformar"); 


$transformer->warna = "Kuning" ;

$transformer->tampilBiodata();

$transformer->tambahKecepatan(20);
$transformer->tambahKecepatan(10);
$transformer->tambahKecepatan(5);

$transformer->kurangiKecepatan(30);
$transformer->tambahKecepatan(50);





$transformer->turboKecepatan();


