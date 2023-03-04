<?php
class dbconfig
{
    private $host="localhost";
    private $name="root";
    private $pass="";
    private $db="gestionSalle";
    private $conn="null";

    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8",$this->name,$this->pass);

        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}
?>