<?php
require_once "../core/mainModel.php";

class documentomodelo extends mainModel
{

  protected function nuevo_documento_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO administrador (rut, nuevo_admin)
    VALUES (:Rut, :Nuevo_admin)");

    $sql->bindParam(":Rut", $datos['rut']);
    $sql->bindParam(":Nuevo_admin", $datos['nuevo_admin']);

    $sql->execute();
    return $sql;
  }
}
