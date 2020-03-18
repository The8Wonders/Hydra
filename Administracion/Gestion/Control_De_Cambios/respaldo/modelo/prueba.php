<?php
    require("conexion.php");

    $db= Conectar::Conexion(); //->prepare("SELECT * FROM usuario");
    /*$res= $db->execute();
    $res->fetch();
    foreach($res as $fila){
        echo $fila. "<br>";
    }*/
    
    if($db){
        echo "conexion a la bd exitosa";
    }else{
        echo "error de conexion";
    }

    /*require_once "./core/mainModel.php";
    class prueba extends mainModel{
        protected function test(){
            $db= mainModel::conectar();

            if($db){
                echo "conexion exitosa";
            }else{
                echo "sin conexion";
            }
        }
    }
    prueba::test();*/
?>