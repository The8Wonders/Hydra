<?php
class eliminar_profesor{
    public function eliminar_profesor_controlador()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $rut = mainModel::limpiar_rut($rut);

    if ($rut == "") {
      $respuesta = "incompleto";
    } else {
      $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

      if ($consulta1->rowCount() >= 1) {
        $eliminarProfesor = profesormodelo::eliminar_profesor_modelo($rut);
        if ($eliminarProfesor->rowCount() >= 1) {
          $eliminarCuenta = mainModel::eliminar_cuenta($rut);
          if ($eliminarCuenta->rowCount() >= 1) {
            $respuesta = "Eliminada";
          } else {
            $h = profesormodelo::nuevo_profesor_modelo($rut);
            $respuesta = "NoCuenta";
          }
        } else {
          $respuesta = "NoProfesor";
        }
      } else {
        $respuesta = "Noexiste";
      }
    }

    return $respuesta;
  }
}

    
?>