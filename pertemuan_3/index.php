<?php

include_once "model/Mahasiswa.php";

$mhs = new Mahasiswa;

$mhs->showText("buat sebuah class");
$mhs->showText("class tersebut simpan didalam folder model");
$mhs->showText("nama class bebas");
$mhs->showText("minimal 2 property");
$mhs->showText("minimal 1 method");
