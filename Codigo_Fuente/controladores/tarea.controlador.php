<?php
require_once "../modelo/tarea.modelo.php";

class tareacontrolador extends tareamodelo
{
  public function nueva_tarea_controlador()
  {
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $hora = mainModel::limpiar_cadena($_POST['hora']);
    $estado = mainModel::limpiar_cadena($_POST['estado']);
    $codigoReq = mainModel::limpiar_cadena($_POST['codigo_requermiento']);
    $codTarea = mainModel::generar_codigo_aleatorio("TA", 7, $hora);

    if ($codigoReq == "") {
      $respuesta = "codRe";
    } else {
      if ($nombre == "" || $hora == "" || $estado == "") {
        $respuesta = "Incompleto";
      } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_tarea FROM tarea WHERE cod_tarea='$codTarea'");

        if ($consulta1->rowCount() >= 1) {
          $respuesta = "codExistente";
        } else {
          $nuevaTarea = [
            "cod_tarea" => $codTarea,
            "nom_tarea" => $nombre,
            "hora_invertida" => $hora,
            "estado_tarea" => $estado,
            "cod_requerimiento" => $codigoReq
          ];

          $guardarTarea = tareamodelo::nueva_tarea_modelo($nuevaTarea);

          if ($guardarTarea->rowCount() >= 1) {
            $respuesta = "Exito";
          } else {
            $respuesta = "Error";
          }
        }
      }
    }
    return $respuesta;
  }
}
