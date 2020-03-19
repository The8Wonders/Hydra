<?php

  require_once "../core/mainModel.php";

  class profesormodelo extends mainModel{
    protected function nuevo_profesor_modelo($datos){
      $sql = mainModel::conectar()->prepare("INSERT INTO profesor (rut) VALUES (:Rut)");

      $sql->bindParam(":Rut", $datos);

      $sql->execute();
      return $sql;
    }

    protected function update_profesor_modelo($rut){
      try{
        $sql= mainModel::conectar()->prepare("UPDATE profesor SET
        rut=:Rut");

        $sql->bindParam(":Rut",$rut);

        $sql->execute();
        return $sql;
      }catch(Exception $e){
        $e->getMessage();
        $e->getLine();
      }
    }

  }