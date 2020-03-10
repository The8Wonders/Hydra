<?php   
    /*if($peticionAjax){
      require_once "../core/mainModel.php";
    }else{
      require_once "./core/mainModel.php";
    }*/
    require_once "./core/mainModel.php";

    class loginmodelo extends mainModel{
      
        protected function ingresar_modelo($datos){
            $sql = mainModel::conectar()->prepare("SELECT * FROM usuario WHERE rut= :Rut AND contra= :Clave");
            $sql->bindParam(":Rut", $datos['Rut']);
            $sql->bindParam(":Clave", $datos['Clave']);
            $sql->execute();
            return $sql;
        }
    }