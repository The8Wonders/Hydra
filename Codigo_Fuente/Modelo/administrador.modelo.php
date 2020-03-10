<?php
  if($peticionAjax){
    require_once "../core/mainModel.php";
  }else{
    require_once "../core/mainModel.php";
  }

  class administradormodelo extends mainModel {
    protected function nuevo_administrador_modelo($dato){
      $sql=mainModel::conectar()->prepare("INSERT INTO administrador (rut)
       VALUES (:Rut)");

       $sql->bindParam(":Rut",$dato);
       $sql->execute();
       return $sql;
    }
  }