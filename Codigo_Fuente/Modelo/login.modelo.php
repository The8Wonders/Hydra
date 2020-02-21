<?php   
    if($peticionAjax){
      require_once "../core/mainModel.php";
    }else{
      require_once "./core/mainModel.php";
    }
  
    class loginmodelo extends mainModel{
        protected function ingresar_modelo($datos){
            $sql = mainModel::conectar()->prepare("SELECT * FROM cuenta WHERE CuentaRut = :Rut AND CuentaClave = :Clave AND CuentaEstado = 'Activo'");
            $sql->bindParam(":Rut", $datos['Rut']);
            $sql->bindParam(":Clave", $datos['Clave']);
            $sql->execute();
            return $sql;
        }
    }