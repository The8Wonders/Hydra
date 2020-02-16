<?php   

    class vistas{
      protected function obtiene_principal_modelo($vistas){
        $rutasConocidas = ["home","alumnoslista","formGeneral"];

        if(in_array($vistas, $rutasConocidas)){
          if(is_file("./vistas/contenidos/".$vistas."-vistas.php")){
            $contenidos = "./vistas/contenidos/".$vistas."-vistas.php";
          }else{
            $contenidos = "login";
          }
        }elseif($vistas == "login"){
          $contenidos = "login";
        }elseif($vistas == "index"){
          $contenidos = "login";
        }else{
          $contenidos = "login";
        }

        return $contenidos;
      }
    }