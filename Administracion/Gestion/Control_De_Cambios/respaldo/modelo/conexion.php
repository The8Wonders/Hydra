<?php

    require("config.php");

    class Conectar{

        public static function Conexion(){

            // PDO
            try{

                $conexion= new PDO('pgsql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NOMBRE, DB_USUARIO, DB_CONTRA);

                $conexion->exec("SET NAMES 'UTF8'");

                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                return $conexion;

            }catch(Exception $e){
                echo $e->getMessage();
                echo "<br> La línea de error es: ". $e->getLine();
                
            }

        }
    }

?>



