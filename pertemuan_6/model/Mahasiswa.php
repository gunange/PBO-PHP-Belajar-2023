<?php

include_once "apps/Database.php";

class Mahasiswa {
    private $db;

    
    public function __construct(){
        $this->db = new Database();
    }
    public function getAll(){
        $sql = $this->db->con->prepare("SELECT * FROM mahasiswa");
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    public function showText($text=""){
        echo "- $text <br>";
    }

    public function showAll(){
        foreach($this->getAll() as $d){ 
            echo "Nama : " . $d['nama'] .  "<br>";
            echo "NIM : " . $d['nim'] .  "<br>";
            echo "<br><br>";
        }
    }
}