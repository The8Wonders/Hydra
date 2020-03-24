<?php
    require("../../modelo/grupo.modelo.php");

   class equipocontrolador_insert extends grupo_modelo{


        public function nuevo_equipo(){

            $cod_equipo = mainModel::limpiar_cadena($_POST['cod_equipo']);
            $nom_equipo = mainModel::limpiar_cadena($_POST['nom_equi']);
            $cod_semestre = mainModel::limpiar_cadena($_POST['cod_sem']);
            $cod_proyecto = mainModel::limpiar_cadena($_POST['cod_pro']);

            if($cod_equipo=="" || $nom_equipo=="" || $cod_semestre=="" || $cod_proyecto==""){

                $res = "incompletos";
            }else{

                $consulta = mainModel::ejecutar_consulta_simple("SELECT nombre_equipo FROM equipo WHERE nombre_equipo='$nom_equipo'");
                if($consulta->rowCount()>=1){
                    $res = "nombre equipo";
                }

            }

        }
   }







?>