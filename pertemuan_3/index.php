<?php

include_once "model/Mahasiswa.php";
include_once "model/Mobil.php";

$mhs = new Mahasiswa;

$toyota = new Mobil("Toyota");
$suzuki = new Mobil("Suzuki");
$daihatsu = new Mobil("Daihatsu");



$toyota->warna = "Merah";
$toyota->harga = "12.000";
$toyota->ban = "4";
$toyota->detailMobil();

echo "<br><hr>";

$suzuki->warna = "Merah";
$suzuki->harga = "12.000";
$suzuki->ban = "3";
$suzuki->detailMobil();

echo "<br><hr>";

$daihatsu->warna = "Merah";
$daihatsu->harga = "12.000";
$daihatsu->ban = "6";
$daihatsu->detailMobil();

