<?php
    require_once "../core/mainModel.php";

  class administradormodelo extends mainModel {
    protected function nuevo_administrador_modelo($datos){
      $sql=mainModel::conectar()->prepare("INSERT INTO administrador (rut)
       VALUES (:Rut)");

       $sql->bindParam(":Rut",$datos);

       $sql->execute();
       return $sql;
    }

    protected function update_admin_modelo($rut){
      $sql= mainModel::conectar()->prepare("UPDATE administrador SET
      rut=:Rut WHERE rut=:Rut");

      $sql->bindParam(":Rut",$rut);

      $sql->execute();

      return $sql;
    }

  }