<?php
    require("../modelo/grupo.modelo.php");

   class grupocontroladorupdate extends grupo_modelo{


        public function updateGrupo(){

            $cod_equipo = mainModel::limpiar_cadena($_POST['cod_equipo']);
            $nom_equipo = mainModel::limpiar_cadena($_POST['nom_equi']);

            if($nom_equipo==""){

                $res = "incompletos";
            }else{
                $nuevoGrupo = [
                    "nombre_equipo" => $nom_equipo,
                 ];

                $insGrupo = grupo_modelo::updateGrupo($nuevoGrupo);

                if($insGrupo->rowCount()>=1){
                    $res = 'Correcto';
                }else{
                    $res = 'error';
                }

            }

            return $res;

        }
   }
