<?php
    //-------------CONEXION

    //creacion de clase
    class Conexion
    {
        public $conexion_db = null;

        public function __construct()
        {
            //conexion a BBDD con PDO
            try
            {
                $this->conexion_db=new PDO('mysql:host=localhost; port=3308; dbname=bdperifericos', 'root', '');
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->conexion_db->exec("SET CHARACTER SET utf8");

            }
            catch(Exception $e)
            {
                echo "La linea de error es: " . $e->getMessage();
            }

        }
    }
    

?>