<?php
require_once "../core/mainModel.php";

class administradormodelo extends mainModel
{
  protected function nuevo_administrador_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO administrador (rut, nuevo_admin)
       VALUES (:Rut, :Nuevo_admin)");

    $sql->bindParam(":Rut", $datos['rut']);
    $sql->bindParam(":Nuevo_admin", $datos['nuevo_admin']);

    $sql->execute();
    return $sql;
  }

  protected function actualizar_administrador_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("UPDATE administrador SET nuevo_admin=:Nuevo_admin WHERE rut=:Rut");

    $sql->bindParam(":Rut", $datos['rut']);
    $sql->bindParam(":Nuevo_admin", $datos['nuevo_admin']);

    $sql->execute();
    return $sql;
  }


}
