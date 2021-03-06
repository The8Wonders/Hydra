<?php
session_start(['name' => 'SGP']);
require_once "../core/mainModel.php";

class cambiarcontrasenacontrolador extends mainModel
{
  public function cambiar_contraseña()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $rut = mainModel::limpiar_rut($rut);
    $contraActual = mainModel::limpiar_cadena($_POST['contraActual']);
    $contraNueva = mainModel::limpiar_cadena($_POST['contraNueva']);
    $reContraNueva = mainModel::limpiar_cadena($_POST['reContraNueva']);
    $contraActual = mainModel::encryption($contraActual);
    $ruSi = $_SESSION['rut_sgp'];
    $coSi = $_SESSION['contraseña_sgp'];

    if ($rut == "" || $contraActual == "" || $contraNueva == "" || $reContraNueva == "") {
      $respuesta = "incompletos";
    } else {

      if ($rut == $ruSi) {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

        if ($consulta1->rowCount() >= 1) {
          $consulta2 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE contraseña= '$contraActual' AND rut= '$rut'");

          if ($consulta2->rowCount() >= 1) {

            if ($contraNueva == $reContraNueva) {

              $contra = mainModel::encryption($contraNueva);
              if ($contra != $coSi) {

                $nuvaContraseña = [
                  "Rut" => $rut,
                  "Contra" => $contra
                ];

                $guardarContraseña = mainModel::contraseña_cuenta($nuvaContraseña);

                if ($guardarContraseña->rowCount() >= 1) {
                  $_SESSION['contraseña_sgp'] = $contra;
                  mainModel::sendmail($_SESSION['correo_sgp'],"Cambio de contraseña","Su contraseña a sido cambiada exitosamente");
                  $respuesta = "Exito";
                } else {
                  $respuesta = "Error";
                }
              } else {
                $respuesta = "CoIgualAnterior";
              }
            } else {
              $respuesta = "Ncoinciden";
            }
          } else {
            $respuesta = "Cincorrecta";
          }
        } else {
          $respuesta = "RNexiste";
        }
      } else {
        $respuesta = "RutModificado";
      }

    }

    echo json_encode($respuesta);
    return $respuesta;
  }
}

$con = new cambiarcontrasenacontrolador();
$a = $con->cambiar_contraseña();
