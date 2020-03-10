<?php   
    /*if($peticionAjax){
      require_once "../core/mainModel.php";
    }else{
      require_once "./core/mainModel.php";
    }*/
    require_once "../core/mainModel.php";

    class loginmodelo extends mainModel{
      
        protected function ingresar_modelo($datos){
            $sql = mainModel::conectar()->prepare("SELECT contra FROM usuario WHERE rut=:Rut");
            $sql->bindParam(":Rut", $datos['Rut']);
            $sql->execute();
            
            if($sql->rowCount() === 1){
              $row= $sql->fetch(PDO::FETCH_ASSOC);

              if(mainModel::decryption($datos['Clave']) === mainModel::decryption($row['contra'])){
                $query = mainModel::conectar()->prepare("SELECT * FROM usuario WHERE rut=:Rut");
                $query->bindParam(":Rut", $datos['Rut']);
                $query->execute();
                return $query;
              }elseif(mainModel::decryption($datos['Clave']) === $row['contra']){
                $query = mainModel::conectar()->prepare("SELECT * FROM usuario WHERE rut=:Rut");
                $query->bindParam(":Rut", $datos['Rut']);
                $query->execute();
                return $query;
              }
            }else{
              echo "No existe ese rut";
            }
            //
           // echo "Rut: ".$datos['Rut'];
            //echo "Contra: ".$datos['Clave'];
            //echo "fila afectadas model ". $sql->rowCount();
            //return $sql;
        }
    }