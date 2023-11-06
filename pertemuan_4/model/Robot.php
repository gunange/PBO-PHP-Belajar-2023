<?php

class Robot {
    public  $warna;

    private $nama, $kecepatan;


    public function __construct($nama){
        $this->nama = $nama;
    }


    public function turboKecepatan(){
        $this->kecepatan = $this->kecepatan * 2 ;
    }

    public function hitungLuas($panjang, $lebar){
        $this->showText("Nilai Pajang : $panjang");
        $this->showText("Nilai Lebar : $lebar");

        $luas = $panjang * $lebar;

        $this->showText("Hasil Luas : $luas");
        
    }

    public function kurangiKecepatan($kecepatanBerkurang){
        $this->kecepatan -= $kecepatanBerkurang;
    }
    public function tambahKecepatan($kecepatan){
        $this->kecepatan += $kecepatan;
    }
    public function tampilBiodata(){
        
        $this->showText("Nama Robot : $this->nama");
        $this->showText("Warnah Robot : $this->warna");
        $this->showText("Kecepatan Robot : $this->kecepatan");
    }
    private function showText($text=""){
        echo "- $text <br>";
    }
}