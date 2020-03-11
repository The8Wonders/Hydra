<?php
  if($peticionAjax){
    require_once "../core/mainModel.php";
  }else{
    require_once "./core/mainModel.php";
  }

  class administradormodelo extends mainModel {
    protected function nuevo_administrador_modelo($datos){
      $sql=mainModel::conectar()->prepare("INSERT INTO administrador (rut)
       VALUES (:Rut)");

       $sql->bindParam(":Rut",$datos);

       $sql->execute();
       return $sql;
    }
  }