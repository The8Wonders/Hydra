<?php
    require_once "conexion.php";
    $db= Conectar::Conexion();

    if($db){
        echo "conexion a la bd exitosa";
    }else{
        echo "error de conexion";
    }

?>