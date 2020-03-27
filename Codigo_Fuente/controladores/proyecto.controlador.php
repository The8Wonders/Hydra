<?php

require_once "../modelo/proyecto.modelo.php";

class proyectocontrolador extends proyectomodelo /* hereda de proyectomodelo */
{

  public function nuevo_proyecto_controlador()
  {
    $cod_proyecto = mainModel::generar_codigo_aleatorio("PR", 7, 3);
    $nom_proyecto = mainModel::limpiar_cadena($_POST['nombre']);
    $fecha_inicio = mainModel::limpiar_cadena($_POST['fechaInicio']);
    $fecha_fin = mainModel::limpiar_cadena($_POST['fechaTermino']);
    $fecha_inicio_real = mainModel::limpiar_cadena($_POST['fechaInicioR']);
    $fecha_fin_real = mainModel::limpiar_cadena($_POST['fechaTerminoR']);
    $descripcion_proyecto = mainModel::limpiar_cadena($_POST['descripcion']);
    $sigla = mainModel::limpiar_cadena($_POST['sigla']);
    $tipo_desarrollo = mainModel::limpiar_cadena($_POST['tipoProyecto']);
    $cod_semestre = mainModel::limpiar_cadena($_POST['codigoSemestre']);
    $codigo_equipo=mainModel::limpiar_cadena($_POST['codE']);

    /* Limpia todo lo que viene desde el formuario para evitar la inyeccion */


    if (
      $cod_proyecto == "" || $nom_proyecto == "" || $fecha_inicio == "" || $fecha_fin == "" || $fecha_inicio_real == "" || $fecha_fin_real == "" ||
      $descripcion_proyecto == "" || $sigla == "" || $tipo_desarrollo == "" || $cod_semestre == "")
       /* verifica que vengan todo los valores rellenados */{
      $respuesta = "incompletos";
    } else {
      if ($fecha_inicio > $fecha_fin) {
        $respuesta = "fechaInicioFechaFin";
      } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_proyecto FROM proyecto WHERE cod_proyecto ='$cod_proyecto'");

        if ($consulta1->rowCount() >= 1) {
          $respuesta = "codProyecto";
        } else {

          $consulta2 = mainModel::ejecutar_consulta_simple("SELECT nom_proyecto FROM proyecto WHERE nom_proyecto ='$nom_proyecto'");

          if ($consulta2->rowCount() >= 1) {
            $respuesta = "nomProyecto";
          } else {

            $nuevoProyecto = [
              "cod_proyecto" => $cod_proyecto,
              "nom_proyecto" => $nom_proyecto,
              "fecha_inicio" => $fecha_inicio,
              "fecha_fin" => $fecha_fin,
              "fecha_inicio_real" => $fecha_inicio_real,
              "fecha_fin_real" => $fecha_fin_real,
              "descripcion_proyecto" => $descripcion_proyecto,
              "sigla" => $sigla,
              "tipo_desarrollo" => $tipo_desarrollo,
              "cod_semestre" => $cod_semestre
            ];

            $guardarproyecto = proyectomodelo::nuevo_proyecto_modelo($nuevoProyecto); /* si cumple todas las condiciones llama a nuevo proyecto modelo y le envia los valores de la variable $nuevoProyecto */

            if ($guardarproyecto->rowCount() >= 1) {
              
              $c=new Mainmodel();
              $sql= $c->ejecutar_consulta_simple("UPDATE equipo SET cod_proyecto='$cod_proyecto' WHERE cod_equipo='$codigo_equipo'");
              $respuesta = "correcto";
             
            } else {
              $respuesta = "incorrecto";
            }
          }
        }
      }
    }

    return $respuesta;
  }

  public function update_proyecto_controlador()
  {

    $cod_proyecto = mainModel::limpiar_cadena($_POST['cod']);
    $nom_proyecto = mainModel::limpiar_cadena($_POST['nombre']);
    $fecha_inicio = mainModel::limpiar_cadena($_POST['fechaInicio']);
    $fecha_fin = mainModel::limpiar_cadena($_POST['fechaTermino']);
    $fecha_inicio_real = mainModel::limpiar_cadena($_POST['fechaInicioR']);
    $fecha_fin_real = mainModel::limpiar_cadena($_POST['fechaTerminoR']);
    $descripcion_proyecto = mainModel::limpiar_cadena($_POST['DescripcionProyecto']);
    $tipo_desarrollo = mainModel::limpiar_cadena($_POST['tipoProyecto']);
    $sigla = mainModel::limpiar_cadena($_POST['sigla']);
    $cod_semestre = mainModel::limpiar_cadena($_POST['codS']);


    if (
      $cod_proyecto == "" || $nom_proyecto == "" || $fecha_inicio == "" || $fecha_fin == "" || $fecha_inicio_real == "" || $fecha_fin_real == "" || $descripcion_proyecto == "" || $tipo_desarrollo == "" || $sigla == "" || $cod_semestre =="") {
      $respuesta = "incompletos";
    } else {
      $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_proyecto FROM proyecto WHERE cod_proyecto= '$cod_proyecto' ");

      if ($consulta1->rowCount() >= 1) {

        $editarProyecto = [
          "cod_proyecto" => $cod_proyecto,
          "nom_proyecto" => $nom_proyecto,
          "fecha_inicio" => $fecha_inicio,
          "fecha_fin" => $fecha_fin,
          "fecha_inicio_real" => $fecha_inicio_real,
          "fecha_fin_real" => $fecha_fin_real,
          "descripcion_proyecto"->$descripcion_proyecto,
          "tipo_desarrollo" => $tipo_desarrollo,
          "sigla" => $sigla,
        ];

        $actualixar = proyectomodelo::update_proyecto_modelo($editarProyecto);

        if ($actualixar->rowCount() >= 1) {
          $respuesta = "Actualizado";
        } else {

          $respuesta = "Error";
        }

      } else {
        $respuesta = "NoencuentraProyecto";
      }
    }

    return $respuesta;
  }
}