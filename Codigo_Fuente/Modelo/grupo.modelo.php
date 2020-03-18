<?php

    require_once("../core/mainModel.php");
    class grupo_modelo extends mainModel{
        protected function get_grupo(){

            $clase = new mainModel();
            
            $consulta = "SELECT * FROM Equipo";

            $sql = mainModel::ejecutar_consulta_simple($consulta);

            return $sql;


        }


        protected function set_grupo(){

            $insertar = new mainModel();

            $consulta [
                
            ];

        }

        protected function eliminar_grupo($codigo){

            $sql = mainModel::conectar();
            $resultado =$sql->prepare("DELETE FROM equipo WHERE cod_equipo = :cod");

            $resultado->execute(array(":cod"=>$codigo));


            return $resultado;

        }




    }









?>