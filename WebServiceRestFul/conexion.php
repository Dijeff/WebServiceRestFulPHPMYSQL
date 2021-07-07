<?php 

class Conexion extends PDO{
    private $host='localhost';
    private $nombre='web_service';
    private $usuario='root';
    private $password='';

    public function __construct()
    {
        try{
            parent::__construct('mysql:host='.$this->host . ';dbname='.$this->nombre.';charset=utf8',$this->usuario,$this->password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(PDOException $e){
            echo 'Error: ' .$e->getMessage();
            exit;
        }
    }
}
