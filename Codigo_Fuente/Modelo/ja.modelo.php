<?php
require_once "../core/mainModel.php";

class jamodelo extends mainModel
{
  protected function nuevo_ja_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO ja (nombre, rut)
    VALUES (:Nombre ,:Rut)");

    $sql->bindParam(":Nombre", $datos['Nombre']);
    $sql->bindParam(":Rut", $datos['Rut']);

    $sql->execute();
    

    return $sql;
  }
}
