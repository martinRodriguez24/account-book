<?php
class Connection {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'martin';
    private $connect;

    public function __construct()
    {
        $connection_string = 'mysql:hos'.$this->host.';dbname='.$this->db.';charset=utf8';
        try {
        $this->connect = new PDO($connection_string, $this->user, $this->password);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Conexion exitosa';
    }
        catch (Exception $e){
        $this->connect = 'Error de conexion';
        echo 'ERROR: '.$e->getMessage();
    }
    }
}

$connect = new Connection();