<?php 
class cerrar_sesion{

    public static function salir(){
        session_start(['name' => 'SGP']);
        session_unset(['name' => 'SGP']);
        session_destroy(['name' => 'SGP']);
        return header("Location:../index.php");
    }
}
cerrar_sesion::salir();
?>