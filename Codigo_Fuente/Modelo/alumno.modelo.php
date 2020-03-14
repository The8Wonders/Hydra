<?php 
  require_once "../core/mainModel.php";

  class alumnomodelo extends mainModel{

    protected function nuevo_alumno_modelo($dato){
      $sql = mainModel::conectar()->prepare("INSERT INTO alumno (rut) VALUES (:Rut)");

      $sql->bindParam(":Rut",$dato);

      $sql->execute();
      return $sql;
    }
  }