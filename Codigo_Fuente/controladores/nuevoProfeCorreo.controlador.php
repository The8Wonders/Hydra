<?php

require_once "../core/mainModel.php";

class nuevo_profesor_correo extends mainModel
{
  public function nuevo_profe()
  {
    $correo = mainModel::limpiar_cadena($_POST['correo']);

    if ($correo == "") {
      return header("Location:../vistas/contenidos/home-vistas.php");
    } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT * FROM usuario WHERE correo= '$correo' AND cod_rol= 'profesor'");

        if ($consulta1->rowCount() >= 1) {
                $destino= $correo;
                $asunto= "[SGP] Formulario de registro de profesor";

                $mensaje= "Para registrarse ingrese al siguiente link \r \n ";
                $mensaje .= "<a href='http://198-35.eq.ubiobio.cl:1044/vistas/contenidos/formProfesor-vistas.php' target='_blank' rel='noopener noreferrer'>http://198-35.eq.ubiobio.cl:1044/vistas/contenidos/formProfesor-vistas.php</a>";
                mainModel::sendmail($destino,$asunto,$mensaje);
                return header("Location:../vistas/contenidos/home-vistas.php");
                
        } else {
            return header("Location:../vistas/contenidos/home-vistas.php");
        }

    }

    return header("Location:../vistas/contenidos/home-vistas.php");
  }
}

$profe= new nuevo_profesor_correo();
$profe->nuevo_profe();
