<?php

require_once "../modelo/proyecto.modelo.php";

class proyectocontrolador extends proyectomodelo
{

  public function nuevo_proyecto_controlador()
  {
    $cod_proyecto = mainModel::limpiar_cadena($_POST['codigoProyecto']);
    $nom_proyecto = mainModel::limpiar_cadena($_POST['nombre']);
    $fecha_inicio = mainModel::limpiar_cadena($_POST['fechaInicio']);
    $fecha_fin = mainModel::limpiar_cadena($_POST['fechaTermino']);
    $fecha_inicio_real = mainModel::limpiar_cadena($_POST['fechaInicioR']);
    $fecha_fin_real = mainModel::limpiar_cadena($_POST['fechaTerminoR']);
    $descripcion_proyecto = mainModel::limpiar_cadena($_POST['descripcion']);
    $sigla = mainModel::limpiar_cadena($_POST['sigla']);
    $tipo_desarrollo = mainModel::limpiar_cadena($_POST['tipoProyecto']);
    $cod_semestre = mainModel::limpiar_cadena($_POST['codigoSemestre']);


    if (
      $cod_proyecto == "" || $nom_proyecto == "" || $fecha_inicio == "" || $fecha_fin == "" || $fecha_inicio_real == "" || $fecha_fin_real == "" ||
      $descripcion_proyecto == "" || $sigla == "" || $tipo_desarrollo == "" || $cod_semestre == ""
    ) {
      $respuesta = "incompletos";
    } else {  
      if($fecha_inicio > $fecha_fin){
        $respuesta = "fechaInicioFechaFin";
      }else{
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT cod_proyecto FROM proyecto WHERE cod_proyecto ='$cod_proyecto'");

        if($consulta1->rowCount()>=1){
          $respuesta = "codProyecto";
        }else{

          $consulta2 = mainModel::ejecutar_consulta_simple("SELECT nom_proyecto FROM proyecto WHERE nom_proyecto ='$nom_proyecto'");

          if($consulta2->rowCount()>=1){
            $respuesta = "nomProyecto";
          }else{

            $nuevoProyecto = [
              "cod_proyecto" =>$cod_proyecto,
              "nom_proyecto" =>$nom_proyecto,
              "fecha_inicio" =>$fecha_inicio,
              "fecha_fin" =>$fecha_fin,
              "fecha_inicio_real" =>$fecha_inicio_real,
              "fecha_fin_real" =>$fecha_fin_real,
              "descripcion_proyecto" =>$descripcion_proyecto,
              "sigla" =>$sigla,
              "tipo_desarrollo" =>$tipo_desarrollo,
              "cod_semestre" =>$cod_semestre
            ];

            $guardarproyecto = proyectomodelo::nuevo_proyecto_modelo($nuevoProyecto);

            if($guardarproyecto->rowCount()>=1){
              $respuesta = "correcto";
            }else{
              $respuesta = "incorrecto";
            }
          }
        }
      }
    }

    return $respuesta;
  }






  /* public function update_alumno(){
    $nombre= mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);
    

    if( $rut == "" || $nombre == "" || $apellido == "" || $contraseña1 == "" || $contraseña2 == "" || $telefono == "" || $rol == "" ){
      $respuesta = "incompletos');
    }else{
      if ($contraseña1 != $contraseña2) {
        $respuesta = "contraseñas');
      } else {
  
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");
  
        if ($consulta1->rowCount() >= 1) {
  
          $respuesta = "rut');
  
        } else {
  

            $nuevaCuenta = [
              "Rut" => $rut,
              "Nombre" => $nombre,
              "Apellido" => $apellido,
              "Correo" => $correo,
              "Telefono" => $telefono,
              "Rol" => $rol,
              "Contra" => $clave
            ];
  
            $updatecuenta = mainModel::update_cuenta($nuevaCuenta);
  
            if ($updatecuenta->rowCount() >= 1) {

              $guardaralumno = alumnomodelo::actualizar_alumno_modelo($rut);
  
              if($guardaralumno->rowCount()>=1){
                $respuesta = "correcto');
              }else{
                $respuesta = "alumno');
              }
              
            } else {
  
              $respuesta = "incorrecto');
            }
          }
        }
      }
    }
  }*/
}
