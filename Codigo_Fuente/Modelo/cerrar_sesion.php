<?php 
class cerrar_sesion{

    public static function salir(){
        session_start();
        session_unset();
        session_destroy();
        return header("Location:../index.php");
    }
}
cerrar_sesion::salir();
?>