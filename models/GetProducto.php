<?php
    //clase con consultas para la BD
    class DevuelveProductos extends Conectar
    {
        public function getGraficas() 
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM grafica";
            $sentencia=$conectar->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getHeadset() 
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM headset";
            $sentencia=$conectar->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getMonitor() 
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM monitor";
            $sentencia=$conectar->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getMotherboard() 
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM motherboard";
            $sentencia=$conectar->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getMouse() 
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM mouse";
            $sentencia=$conectar->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getRam() 
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM ram";
            $sentencia=$conectar->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultado;
        }

        public function getTeclado() 
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM teclado";
            $sentencia=$conectar->prepare($sql);
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

        //----verificar
        public function verificaBool($campo)
        {
            if($campo==1)
            {
                echo "Si";
            }
            else
            {
                echo "No";
            }
        }

    }

















?>