<?php
class DB{
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $db="test";
    public $conn;

    public function __construct()
    {
        return $this->connect();
    }
    public function connect(){
        $this->conn=new mysqli($this->host,$this->user,$this->pass,$this->db);
    }
}
?>