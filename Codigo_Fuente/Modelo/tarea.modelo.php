<?php
require_once "../core/mainModel.php";

class tareamodelo extends mainModel
{

  protected function nueva_tarea_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO tarea (cod_tarea, nom_tarea, hora_invertida, estado_tarea, cod_requerimiento) 
    VALUES (:cod_t, :nom, :hora, :est, :cod_r)");

    $sql->bindParam(":cod_t", $datos['cod_tarea']);
    $sql->bindParam(":nom", $datos['nom_tarea']);
    $sql->bindParam(":hora", $datos['hora_invertida']);
    $sql->bindParam(":est", $datos['estado_tarea']);
    $sql->bindParam(":cod_r", $datos['cod_requerimiento']);


    return $sql;
  }
}
