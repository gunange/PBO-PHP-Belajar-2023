<?php

include_once "model/Mahasiswa.php";
include_once "model/Mobil.php";

$mhs = new Mahasiswa;

$toyota = new Mobil("Toyota");
$suzuki = new Mobil("Suzuki");
$daihatsu = new Mobil("Daihatsu");

$toyota->tambahGas(10);
$toyota->tambahGas(30);
$toyota->tambahGas(60);
$toyota->kecepatan();
echo "<br><hr>";


$suzuki->kecepatan();


echo "<br><hr>";
$daihatsu->kecepatan();