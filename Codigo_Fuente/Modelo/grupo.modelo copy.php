<?php

    require_once("../core/mainModel.php");
    class grupo_modelo extends mainModel{
        protected function get_grupo(){

            $clase = new mainModel();
            
            $consulta = "SELECT * FROM equipo";

            $sql = mainModel::ejecutar_consulta_simple($consulta);

            return $sql;


        }


        public function set_grupo($arreglo){
            
            $sql = mainModel::conectar();
            $resultado = $sql->prepare("INSERT INTO equipo VALUES (:uno,:dos,:tres,:cuatro)");
            $resultado->bindParam(":uno",$array['codigo_equipo']);
            $resultado->bindParam(":uno",$array['nombre_equipo']);
            $resultado->bindParam(":uno",$array['codigo_semestre']);
            $resultado->bindParam(":uno",$array['codigo_proyecto']);
            
            return $resultado->execute();
            
        }

        public function eliminar_grupo($codigo){

            
            $sql = mainModel::conectar()->prepare("DELETE FROM equipo WHERE cod_equipo ='$codigo'");

            $sql->execute();


            return $sql;

        }





    }


?>