<?php

require_once "../core/mainModel.php";
class loginmodelo extends mainModel
{
  protected function ingresar_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("SELECT * FROM usuario WHERE rut= :Rut AND contraseña= :Clave");
    $sql->bindParam(":Rut", $datos['Rut']);
    $sql->bindParam(":Clave", $datos['Clave']);
    $sql->execute();
    return $sql;
  }

  protected function datos_modelo($dato){
    $sql = mainModel::conectar()->prepare("SELECT * FROM alumno WHERE rut= :Rut");
    $sql->bindParam(":Rut", $dato);
    $sql->execute();
    return $sql;
  }
}
