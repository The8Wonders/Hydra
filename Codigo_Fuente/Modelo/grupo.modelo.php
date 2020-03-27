<?php

    require_once "../core/mainModel.php";

    

    class grupo_modelo extends mainModel{
       
        protected function nuevo_grupo_modelo($datos){

            $insertar=mainModel::conectar()->prepare("INSERT INTO equipo (cod_equipo, nombre_equipo, cod_semestre) VALUES (:codE, :nomE, :codS)");
            $insertar->bindParam(":codE",$datos['cod_equipo']);
            $insertar->bindParam(":nomE",$datos['nombre_equipo']);
            $insertar->bindParam(":codS",$datos['cod_semestre']);
            $insertar->execute();
          
            
            return $insertar;
        }


        protected function updateGrupo($datos){

            $actualizar=mainModel::conectar()->prepare("UPDATE equipo SET nombre_equipo=:Nom WHERE cod_equipo=:Cod");
            $actualizar->bindParam(":Nom",$datos['nombre_equipo']);
            $actualizar->bindParam(":Cod",$datos['cod_equipo']);
            $actualizar->execute();

            return $actualizar ;
        }

        protected function delete_grupo($cod){

            $eliminar=mainModel::ejecutar_consulta_simple("DELETE FROM equipo WHERE cod_equipo='$cod'");

            return $eliminar;

        }
     
    }







    


?>