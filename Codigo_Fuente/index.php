<?php 
    require_once "./core/general.php";
    require_once "./controladores/vistasControlador.php";

    $principal = new vistasControlador();
    $principal->obtener_principal_controlador();
