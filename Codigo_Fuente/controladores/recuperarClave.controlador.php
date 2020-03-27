<?php

require_once "../core/mainModel.php";

class recuperar_clave_controlador extends mainModel
{
  public function recuperar_clave()
  {
    $correo = mainModel::limpiar_cadena($_POST['email']);

    if ($correo == "") {
      $respuesta = "incompletos";
    } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT * FROM usuario WHERE correo= '$correo' AND cod_rol= 'alumno'");

        if ($consulta1->rowCount() >= 1) {
                $destino= $correo;
                $asunto= "[SGP] Recuperar contraseña";
                $array= $consulta1->fetch(PDO::FETCH_ASSOC);
                $contraseña= mainModel::decryption($array['contraseña']);
                $mensaje= "Su clave es: ". $contraseña;
                mainModel::sendmail($destino,$asunto,$mensaje);
                $respuesta= "enviado";
                
        } else {
          $respuesta = "Error";
        }

    }

    return $respuesta;
  }
}