<?php
require_once "../modelo/profesor.modelo.php";
class eliminar_profesor extends profesormodelo{
    public function eliminar_profesor_controlador()
  {
    $rut = mainModel::limpiar_cadena($_GET['rut']);
    $rut = mainModel::limpiar_rut($rut);

    if ($rut == "") {
      //$respuesta = "incompleto";
      header("Location:../vistas/contenidos/tableProfesor-vistas.php");
    } else {
      $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

      if ($consulta1->rowCount() >= 1) {
        $eliminarProfesor = profesormodelo::eliminar_profesor_modelo($rut);
        if ($eliminarProfesor->rowCount() >= 1) {
          $eliminarCuenta = mainModel::eliminar_cuenta($rut);
          if ($eliminarCuenta->rowCount() >= 1) {
            //$respuesta = "Eliminada";
            header("Location:../vistas/contenidos/tableProfesor-vistas.php");
          } else {
            $h = profesormodelo::nuevo_profesor_modelo($rut);
            //$respuesta = "NoCuenta";
            header("Location:../vistas/contenidos/tableProfesor-vistas.php");
          }
        } else {
          //$respuesta = "NoProfesor";
          header("Location:../vistas/contenidos/tableProfesor-vistas.php");
        }
      } else {
        //$respuesta = "Noexiste";
        header("Location:../vistas/contenidos/tableProfesor-vistas.php");
      }
    }

    //return $respuesta;
    header("Location:../vistas/contenidos/tableProfesor-vistas.php");
  }
}

$delete= new eliminar_profesor();
$delete->eliminar_profesor_controlador();

?>