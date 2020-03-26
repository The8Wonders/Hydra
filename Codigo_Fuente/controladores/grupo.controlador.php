<?php
    require("../modelo/grupo.modelo.php");

   class grupocontrolador extends grupo_modelo{


        public function nuevo_grupo_controlador(){

            $cod_equipo = mainModel::limpiar_cadena($_POST['cod_equipo']);
            $nom_equipo = mainModel::limpiar_cadena($_POST['nom_equi']);
            $cod_semestre = mainModel::limpiar_cadena($_POST['cod_sem']);
            $cod_proyecto = mainModel::limpiar_cadena($_POST['cod_pro']);
            $cod_grupo = mainModel::generar_codigo_aleatorio("GR", 7, 3);

            if($nom_equipo==""){

                $res = "incompletos";
            }else{
                $nuevoGrupo = [
                    "cod_equipo" => $cod_grupo,
                    "nombre_equipo" => $nom_equipo
                ];

                $insGrupo = grupo_modelo::nuevo_grupo_modelo($nuevoGrupo);

                if($insGrupo->rowCount()>=1){
                    $res = 'Correcto';
                }else{
                    $res = 'error';
                }

            }

            return $res;

        }
   }
