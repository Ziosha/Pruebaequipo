<?php

    //Datos de conexion
    require_once("conexion.php");

    //clase con consultas para la BD
    class DevuelveProductos extends Conexion
    {
        public function __construct()
        {
            parent::__construct();
        }

        //-------OBTENER PRODUCTOS COMPLETOS

        public function getGraficas() 
        {
            $sql = "SELECT * FROM grafica";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getHeadset() 
        {
            $sql = "SELECT * FROM headset";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getMonitor() 
        {
            $sql = "SELECT * FROM monitor";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getMotherboard() 
        {
            $sql = "SELECT * FROM motherboard";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getMouse() 
        {
            $sql = "SELECT * FROM mouse";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getRam() 
        {
            $sql = "SELECT * FROM ram";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getTeclado() 
        {
            $sql = "SELECT * FROM teclado";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        //------OBTENER PRODUCTOS DEL HOME

        public function getHome()
        {
            $sql = "";
            $homeFinal = array();

            $nomTablas = array(
                "grafica", "headset", "monitor", "motherboard", "mouse", "ram", "teclado"
            );

            foreach($nomTablas as $tabla)
            {
                $sql = "SELECT * FROM $tabla LIMIT 3";
                $sentencia=$this->conexion_db->prepare($sql);
                $sentencia->execute(array());
                $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                
                $homeFinal[] = $resultado;
                
            }

            return $homeFinal;
        }

        //------comprar
        public function compraProducto($idProd, $tabla)
        {
            try{
                $dato = "SELECT stock FROM $tabla WHERE idP = '$idProd'";
                $sentencia=$this->conexion_db->prepare($dato);
                $sentencia->execute(array());
                $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                
                $stockNuevo = $resultado[0]['stock']-1;

                if($stockNuevo > 0)
                {
                    $sql = "UPDATE $tabla SET stock = ".$stockNuevo." WHERE
                     idP = '$idProd'";
                    $sentencia=$this->conexion_db->prepare($sql);
                    $sentencia->execute();
                }
                else
                {
                    $sql = "UPDATE $tabla SET disponible = 0 WHERE idP = '$idProd'";
                    $sentencia=$this->conexion_db->prepare($sql);
                    $sentencia->execute();

                    $sql = "UPDATE $tabla SET stock = ".$stockNuevo." WHERE
                     idP = '$idProd'";
                    $sentencia=$this->conexion_db->prepare($sql);
                    $sentencia->execute();
                }
                
                return true;
            }
            catch(Exception $e){
                return $e->getMessage();
            }

           
           
        }

    }

















?>