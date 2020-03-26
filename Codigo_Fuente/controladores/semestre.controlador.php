<?php
require_once "../modelo/semestre.modelo.php";

class semestrecontrolador extends semestremodelo
{
  public function nuevo_semestre_controlador()
  {
    $año = mainModel::limpiar_cadena($_POST['fechaInicio']);
    $fechaEntera = strtotime($año);
    $año = date("Y", $fechaEntera);
    $semestre = date("m", $fechaEntera);
    $fechaInicio = mainModel::limpiar_cadena($_POST['fechaInicio']);
    $fechaFin = mainModel::limpiar_cadena($_POST['fechaFin']);

    if ($fechaInicio == "" || $fechaFin == "") {
      $respuesta = "incompletos";
    } else {
      if ($fechaInicio > $fechaFin) {
        $respuesta = "fechas";
      } else {
        if ($semestre > 6) {
          $semestre = $año . "-" . "2";
        } else {
          $semestre = $año . "-" . "1";
        }

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_semestre FROM semestre WHERE cod_semestre= '$semestre'");
        if ($consulta1->rowCount() >= 1) {
          $respuesta = "codSemestre";
        } else {
          $nuevoSemestre = [
            "cod_semestre" => $semestre,
            "fecha_inicio" => $fechaInicio,
            "fecha_fin" => $fechaFin,
            "año" => $año
          ];

          $guardarSemestre = semestremodelo::nuevo_semestre_modelo($nuevoSemestre);

          if ($guardarSemestre->rowCount() >= 1) {
            $respuesta = "exito";
          } else {
            $respuesta = "error";
          }
        }
      }
    }

    return $respuesta;
  }

  public function actualizar_semestre_controlador()
  {
    $fecha_inicio = mainModel::limpiar_cadena($_POST['fecha_inicio-edit']);
    $fecha_fin = mainModel::limpiar_cadena($_POST['fecha_fin-edit']);
    $codigo = mainModel::decryption($_POST['cod']);

    if ($fecha_inicio == '' || $fecha_fin == '' || $codigo == '') {
      $respuesta = 'Incompleto';
    } else {
      if ($fecha_inicio > $fecha_fin) {
        $respuesta = 'Fecha';
      } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_semestre FROM semestre WHERE cod_semestre = '$codigo'");
        if ($consulta1->rowCount() >= 1) {
          $NuevoSemestre = [
            "cod_semestre" => $codigo,
            "fecha_inicio" => $fecha_inicio,
            "fecha_fin" => $fecha_fin
          ];

          $actuSemestre = semestremodelo::actualizar_semestre_modelo($NuevoSemestre);

          if ($actuSemestre->rowCount() >= 1) {
            $respuesta = 'Actualizado';
          } else {
            $respuesta = 'Error';
          }
        } else {
          $respuesta = 'NoEncontrado';
        }
      }
    }

    return $respuesta;
  }
}
