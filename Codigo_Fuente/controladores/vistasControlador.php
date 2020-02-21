<?php     

    require_once "./modelo/vistas.php";

    class vistasControlador extends vistas{
      /*Esta funcion solo retorna el archivo principal.php */
      public function obtener_principal_controlador(){
        return require_once "./vistas/principal.php";
      }

      public function obtener_vistas_controlador(){
        /*if para ver si la url tiene valor */
        if(isset($_GET['vistas'])){
          /*obtenemos el valor que viene de la url*/
          $url = explode("/", $_GET['vistas']);
          /*llama a la funcion obtiene_principal_modelo para que esta retorne el contenido*/
          $respuesta = vistas::obtiene_principal_modelo($url[0]);
          /*Si no encuentra valor en la url nos envia a el login */
        }else{
          $respuesta = "login";
        }

        /*retorna la repuesta con la ruta del contenido que se debe mostrar */
        return $respuesta;
      }
    }