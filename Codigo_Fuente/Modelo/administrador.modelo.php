<?php
  if($peticionAjax){
    require_once "../core/mainModel.php";
  }else{
    require_once "./core/mainModel.php";
  }

  class administradormodelo extends mainModel {
    protected function nuevo_administrador_modelo($datos){
      $sql=mainModel::conectar()->prepare("INSERT INTO admin (adminrut, adminprimernombre, adminsegundonombre, adminprimerapellido, adminsegundoapellido, adminnombrecompleto, cuentacodigo)
       VALUES (:Rut, :Nombre1, :Nombre2, :Apellido1, :Apellido2, :NombreCompleto, :Codigo)");

       $sql->bindParam(":Rut",$datos['Rut']);
       $sql->bindParam(":Nombre1",$datos['Nombre1']);
       $sql->bindParam(":Nombre2",$datos['Nombre2']);
       $sql->bindParam(":Apellido1",$datos['Apellido1']);
       $sql->bindParam(":Apellido2",$datos['Apellido2']);
       $sql->bindParam(":NombreCompleto",$datos['NombreCompleto']);
       $sql->bindParam(":Codigo",$datos['Codigo']);
       $sql->execute();
       return $sql;
    }
  }