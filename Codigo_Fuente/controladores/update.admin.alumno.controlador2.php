<?php

require_once "../modelo/alumno.modelo.php";

class update_adminalumno extends alumnomodelo
{

  public function update_adminalumno_controlador()
  {
    $rutR = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);

    if ($rutR == "" || $nombre == "" || $apellido == "" || $correo == "" ||  $telefono == "") {
      $respuesta = "incompletos";
    } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rutR' AND cod_rol = 'alumno' ");

        if($consulta1->rowCount()>=1){
          
          $editarCuenta = [
            "Rut" => $rutR,
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Telefono" => $telefono,
            "Correo" => $correo
          ];

          $actualixar = alumnomodelo::actualizar_alumno_modelo2($editarCuenta);

          if($actualixar->rowCount()>=1){
            $respuesta = "Actualizada";
            
          }else{
            $respuesta = "Error";
          }

        }else{
          $respuesta = "NoencuentraProfesor";
        }
    }

    return $respuesta;
    
  }

  
}
