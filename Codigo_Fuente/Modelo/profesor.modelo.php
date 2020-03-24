<?php

require_once "../core/mainModel.php";

class profesormodelo extends mainModel
{
  protected function nuevo_profesor_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO profesor (rut) VALUES (:Rut)");

    $sql->bindParam(":Rut", $datos);

    $sql->execute();
    return $sql;
  }

  protected function eliminar_profesor_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("DELETE  FROM profesor WHERE rut= :Rut");
    $sql->bindParam(":Rut", $datos);

    $sql->execute();
    return $sql;
  }

  protected function update_rut_profesor($rut){
    $sql = mainModel::conectar()->prepare("UPDATE profesor SET rut=:Rut WHERE rut=:Rut");
  
    $sql->bindParam(":Rut",$rut);

    $sql->execute();
    return $sql;
  }

}
