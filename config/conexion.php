<?php
session_start();
class Conectar{
    protected $dbh;

    protected function conexion(){
        try{
<<<<<<< HEAD
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=bdperifericos","root","");
=======
            //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=bdperifericos","root","");
            $conectar = $this->dbh = new PDO("mysql:local=localhost;port=3308;dbname=bdperifericos","root","");
>>>>>>> patata
            return $conectar;
        } catch (Exception $e){
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public function ruta(){
        return "http://localhost/login";
    }
}
?>