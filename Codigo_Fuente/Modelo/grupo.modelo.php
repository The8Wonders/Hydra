<?php

    require_once "../core/mainModel.php";

    

    class grupo_modelo extends mainModel{
       
        protected function nuevo_grupo_modelo($datos){

            $insertar=mainModel::conectar()->prepare("INSERT INTO equipo (cod_equipo, nombre_equipo) VALUES (:nomE,:codE)");
            $insertar->bindParam(":codE",$datos['cod_equipo']);
            $insertar->bindParam(":nomE",$datos['nombre_equipo']);
            $insertar->execute();
            
            return $insertar;
        }


        protected function delete_grupo($cod){

            $eliminar=mainModel::ejecutar_consulta_simple("DELETE FROM equipo WHERE cod_equipo='$cod'");

            return $eliminar;

        }

        public function updateGrupoAl($datos){

            $actualizar=mainModel::conectar()->prepare("UPDATE equipo SET nombre_equipo=:datos");
            $actualizar->bindParam(":datos",$datos);
            $actualizar->execute();

            return $actualizar ;
        }


        public function updateGrupoAdm($datos){

            $actualizar=$this->bd->prepare("UPDATE equipo SET cod_equipo = :code, nombre_equipo=:nome, cod_semestre=:cods, cod_proyecto=:codp");
            $actualizar_adm->bindParam(":code",$datos['cod_equipo']);
            $actualizar_adm->bindParam(":nome",$datos['nombre_equipo']);
            $actualizar_adm->bindParam(":cods",$datos['cod_semestre']);
            $actualizar_adm>bindParam(":codp",$datos['cod_proyecto']);

            $actualizar_adm->execute();

            return $actualizar_adm ;
        }



     
    }







    


?>