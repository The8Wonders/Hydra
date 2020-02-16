<?php     

    require_once "./Modelo/vistas.php";

    class vistasControlador extends vistas{

      public function obtener_principal_controlador(){
        return require_once "./vistas/principal.php";
      }

      public function obtener_vistas_controlador(){
        if(isset($_GET['vistas'])){
          $url = explode("/", $_GET['vistas']);
          $respuesta = vistas::obtiene_principal_modelo($url[0]);
        }else{
          $respuesta = "login";
        }
        return $respuesta;
      }
    }