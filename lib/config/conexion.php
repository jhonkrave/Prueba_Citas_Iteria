<?php

class Conexion {
    
    private $host="localhost";
    private $user="postgres";
    private $password="postgres";
    private $database="oracle_home_care";
    private $port="5432";
    private $conn;
    
    public function __construct() {
        $this->conectar();
    }
    
    public function conectar() {
        $this->conn = pg_connect("host=".$this->host." user=".$this->user." password=".$this->password." dbname=".$this->database);
    }
    
    public function cerrar(){
        pg_close($this->conn);
    }
    
    function getConn(){
        return $this->conn;
    }
    
}
?>