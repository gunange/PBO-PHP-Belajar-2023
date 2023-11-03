<?php

class Mobil  {
    public
        $warna ,
        $merek ,
        $harga,
        $ban,
        $spidometer = 0
    ;

    public function __construct($merek_mobil){
        $this->merek = $merek_mobil ;
    }

    public function tambahGas(){}
    public function kurangiGas(){}
    public function kecepatan(){
        echo "Kecepatan Mobil $this->merek adalah : $this->spidometer km/sec";
    }
    public function detailMobil(){
        $this->showText("Warnah : $this->warna");
        $this->showText("Merek : $this->merek");
        $this->showText("Harga : $this->harga");
        $this->showText("Ban : $this->ban");
    }


    public function showText($text=""){
        echo "- $text <br>";
    }
}