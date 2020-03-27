<?php
    require("../modelo/grupo.modelo.php");

   class grupocontroladorupdate extends grupo_modelo{


        public function updateGrupo(){


            $nom_equipo = mainModel::limpiar_cadena($_POST['nom_equi']);
            $cod_equipo = mainModel::limpiar_cadena($_POST['cod_equi']);

            if($nom_equipo== "" || $cod_equipo == ""){

                $res = "incompletos";
            }else{
                $nuevoGrupo = [
                    "nombre_equipo" => $nom_equipo,
                    "cod_equipo" => $cod_equipo
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
