<?php 
  require_once "../modelo/semestre.modelo.php";

  class semestrecontrolador extends semestremodelo{
    public function nuevo_semestre_controlador(){
      $año = mainModel::limpiar_cadena($_POST['fechaInicio']);
      $año = date("Y", $año);
      $semestre = mainModel::limpiar_cadena($_POST['fechaInicio']);
      $semestre = date("m",$semestre);
      $fechaInicio = mainModel::limpiar_cadena($_POST['fechaInicio']);
      $fechaFin = mainModel::limpiar_cadena($_POST['fechaFin']);

      if($fechaInicio == "" || $fechaFin == ""){
        $respuesta = "incompletos";
      }else{
        if($fechaInicio > $fechaFin){
          $respuesta = "fechas";
        }else{
          if($semestre > 6){
            $semestre = $año."2";
          }else{
            $semestre = $año."1";
          }

          $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_semestre FROM semestre WHERE cod_semestre= '$semestre'");
          if($consulta1->rowCount()>=1){
            $respuesta = "codSemestre";
          }else{
            $nuevoSemestre = [
              "cod_semestre" => $semestre,
              "fecha_inicio" => $fechaInicio,
              "fecha_fin" => $fechaFin,
              "año" => $año
            ];

            $guardarSemestre = semestremodelo::nuevo_semestre_modelo($nuevoSemestre);

            if($guardarSemestre->rowCount()>=1){
              $respuesta = "exito";
            }else{
              $respuesta = "error";
            }
          }
        }
      }

      return $respuesta;

    }
  }