<?php

include_once "model/Mahasiswa.php";
include_once "model/Mobil.php";
include_once "model/Robot.php";


$transformer = new Robot("Transformar"); 

$transformer->tambah(5 , 10);