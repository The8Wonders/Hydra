<?php
require("../modelo/grupo.modelo.php");

class grupocontrolador extends grupo_modelo
{


    public function nuevo_grupo_controlador()
    {

        $cod_equipo = mainModel::limpiar_cadena($_POST['cod_equipo']);
        $nom_equipo = mainModel::limpiar_cadena($_POST['nom_equi']);
        $cod_semestre = mainModel::limpiar_cadena($_POST['cod_sem']);
        $cod_proyecto = mainModel::limpiar_cadena($_POST['cod_pro']);
        $cod_grupo = mainModel::generar_codigo_aleatorio("GR", 7, 3);
        $rut_alumno = mainModel::limpiar_cadena($_POST['rut']);


        if ($nom_equipo == "") {

            $res = "incompletos";
        } else {
            $nuevoGrupo = [
                "cod_equipo" => $cod_grupo,
                "nombre_equipo" => $nom_equipo,
                "cod_semestre" => $cod_semestre,

            ];



            $insGrupo = grupo_modelo::nuevo_grupo_modelo($nuevoGrupo);


            if ($insGrupo->rowCount() >= 1) {
                $c = new Mainmodel();
                $sql = $c->ejecutar_consulta_simple("UPDATE alumno SET cod_equipo='$cod_grupo' WHERE rut='$rut_alumno'");
                session_start(['name' => 'SGP']);
                $_SESSION['equipo_sgp'] = $cod_grupo;
                $res = 'Correcto';
            } else {
                $res = 'error';
            }
        }

        return $res;
    }
}
