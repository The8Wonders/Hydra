<?php 
    /*llama a los archivos siguientes */
    require_once "./core/general.php";
    require_once "./controladores/vistasControlador.php";
    
    /*instanciamos la clase vistasControlador */
    $principal = new vistasControlador();
    /*llamamos a la funcion obtener_principal_controlador perteneciente a la clase vistasControlador */
    $principal->obtener_principal_controlador();
