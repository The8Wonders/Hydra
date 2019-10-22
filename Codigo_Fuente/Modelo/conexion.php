<?php

    require("config.php");

    class Conectar{

        public static function Conexion(){

            // PDO
            try{

                $conexion= new PDO('pgsql:host='.DB_HOST.'; port='.DB_PORT.'; dbname='.DB_NOMBRE.'; charset='.DB_CHARSET , DB_USUARIO, DB_CONTRA);

                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $conexion->exec("SET CHARACTER SET utf8");

                return $conexion;

            }catch(Exception $e){
                echo "La Línea de error es: ". $e->getLine();
            }



            // MYSQLI
            /*$this->conexion= new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
            if($this->conexion->connect_errno){
                echo "Fallo al conectar a la base de datos ". $this->conexion->connect_error;
                return;
            }
            $this->conexion->set_charset(DB_CHARSET);*/
        }
    }

?>



