<?php   

    class vistas{
      protected function obtiene_principal_modelo($vistas){
        /* En Esta arreglo llamado rutasConocidas se guardara el nombre de todas las pantallas*/
        $rutasConocidas = ["home","alumnoslista","formGeneral","prueba","formAdmin","formValidation","formWizard","formWysiwyg","error","bgcolor",
                           "button","chart","dashboard","grid","icon","offline","progress","table","typography"];
        /* if in_array pregunta si lo que viene en la variable vistas se encuentra en el arreglo rutasConocidas*/
        if(in_array($vistas, $rutasConocidas)){

          /*if is_file si existe el lo que viene en la variable vistas muestra el contenido */
          if(is_file("./vistas/contenidos/".$vistas."-vistas.php")){
            $contenidos = "./vistas/contenidos/".$vistas."-vistas.php";
          }else{

            /*Si no se encuentra el archivo nos redirecciona a el login */
            $contenidos = "login";
          }

          /*si la variable vistas es igual a login nos envia a el login */
        }elseif($vistas == "login"){
          $contenidos = "login";

          /*si la variable vistas es igual a index nos envia a el login */
        }elseif($vistas == "index"){
          $contenidos = "login";
          /*si lo que viene en la variable vistas no se encuentra en el arreglo rutasConocidas nos envia a el login */
        }else{
          $contenidos = "login";
        }
        
        /*Retorna el contenido de la pantalla */
        return $contenidos;
      }
    }