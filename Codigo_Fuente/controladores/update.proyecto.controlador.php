<?php
require_once "../core/mainModel.php";
require_once "../Modelo/proyecto.modelo.php";
class update_proyecto extends proyectomodelo{
    public function update_proyecto_controlador(){

    $cod_proyecto = mainModel::limpiar_cadena($_POST['cod']);
    $nom_proyecto = mainModel::limpiar_cadena($_POST['nombre']);
    $fecha_inicio = mainModel::limpiar_cadena($_POST['fechaInicio']);
    $fecha_fin = mainModel::limpiar_cadena($_POST['fechaFin']);
    $fecha_inicio_real = mainModel::limpiar_cadena($_POST['fechaInicioR']);
    $fecha_fin_real = mainModel::limpiar_cadena($_POST['fechaTerminor']);
    $descripcion_proyecto = mainModel::limpiar_cadena($_POST['DescripcionProyecto']);
    $tipo_desarrollo=mainModel::limpiar_cadena($_POST['TipoProyecto']);
    $sigla = mainModel::limpiar_cadena($_POST['sigla']);
    $cod_semestre = mainModel::limpiar_cadena($_POST['codigoSemestre']);


    if ($cod_proyecto == "" || $nom_proyecto == "" || $fecha_fin == "" || $fecha_inicio == "" || $fecha_fin_real == "" || $fecha_fin_real == ""
    || $descripcion_proyecto == "" || $tipo_desarrollo || $sigla == "" || $cod_semestre =="") {
      $respuesta = "incompletos";
      echo $cod_proyecto
      echo $nom_proyecto
      echo $fecha_inicio
      echo $fecha_fin
      echo $fecha_inicio_real
      echo $fecha_fin_real
      echo $descripcion_proyecto
      echo $tipo_desarrollo
      echo $sigla
      echo $cod_semestre
    } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_proyecto FROM proyecto WHERE rut= '$cod_proyecto' ");

        if($consulta1->rowCount()>=1){
          
          $editarProyecto = [
            "cod_proyecto" => $cod_proyecto,
            "nom_proyecto" => $nom_proyecto,
            "fecha_inicio" => $fecha_inicio,
            "fecha_fin" => $fecha_fin,
            "fecha_inicio_real" => $fecha_inicio_real,
            "fecha_fin_real" => $fecha_fin_real,
            "descripcion_proyecto"->$descripcion_proyecto,
            "tipo_desarrrollo" =>$tipo_desarrollo,
            "sigla"=>$sigla,
            "cod_semestre"=>$cod_semestre
          ];

         
            $actualixar = proyectomodelo::update_proyecto_modelo($editarProyecto);

            if($actualixar->rowCount()>=1){
              
                
                $respuesta = "Actualizado";

            }else{

              $respuesta = "Error";

              header("Location:../vistas/contenidos/formProyecto-update.php");
            }

          //}

        }else{
          $respuesta = "NoencuentraProyecto";
          header("Location:../vistas/contenidos/formProyecto-update.php");        }
    }

    return $respuesta;
    header("Location:../vistas/contenidos/formProyecto-update.php");  }

  
}


?>