<?php
class cerrar_sesion
{

    public static function salir()
    {
        session_start(['name' => 'SGP']);
        session_destroy();
        header("location: ../index.php");
    }
}
cerrar_sesion::salir();
