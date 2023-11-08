<?php


class Test {
    public $nama = "Rifal";
    protected $kelas = "03TK";
}
class TestChild extends Test {

    public function __construct(){
        $this->showNama();
        $this->showKelas();
    }
    
    public function getKelas(){
        return $this->kelas;
    }

    public function showKelas(){
        print_r("Kelas : {$this->kelas}<br>");
    }
    public function showNama(){
        print_r("Nama : {$this->nama}<br>");
    }
}


$test = new TestChild;
// $test->showNama();
// $test->showKelas();