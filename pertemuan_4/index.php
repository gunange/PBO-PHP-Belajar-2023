<?php

include_once "model/Mahasiswa.php";
include_once "model/Mobil.php";

$mhs = new Mahasiswa;

$toyota = new Mobil("Toyota");
$suzuki = new Mobil("Suzuki");
$daihatsu = new Mobil("Daihatsu");

$toyota->tambahGas(10);
$toyota->kecepatan();
echo "<br><hr>";

$suzuki->tambahGas(10);
$suzuki->tambahGas(20);
$suzuki->tambahGas(30);
$suzuki->kecepatan();


echo "<br><hr>";
$daihatsu->tambahGas(70);
$daihatsu->kecepatan();


echo "<br><hr>";

$gas = 10;

$hasilGas = $gas;

$hasilGas += 20;
$hasilGas += 20;

echo "Nilai GAS  : " . $hasilGas;