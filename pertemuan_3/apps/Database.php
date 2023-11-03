<?php

include_once "apps/Core.php";

class Database extends Core {
    public $con;

    public function __construct(){

        try{
            $this->con = new PDO(
                "mysql:host=$this->host;
                dbname=$this->nama_db", 
                $this->user_db, 
                $this->pass_db
            );
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        }catch(PDOException $e){
            echo "Ada ERRORR : " . $e->getMessage();
        }
    }
}