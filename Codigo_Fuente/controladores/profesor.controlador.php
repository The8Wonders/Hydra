<?php

require_once "../modelo/profesor.modelo.php";

class profesorcontrolador extends profesormodelo
{
  public function nuevo_profesor_controlador()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $rut = mainModel::limpiar_rut($rut);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $contraseña1 == "" || $contraseña2 == "" || $correo == "" || $telefono == "" || $rol == "") {
      $respuesta = "incompletos";
    } else {
      if ($contraseña1 != $contraseña2) {
        $respuesta = "contraseñas";
      } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

        if ($consulta1->rowCount() >= 1) {

          $respuesta = "rut";
        } else {

          $consulta2 = mainModel::ejecutar_consulta_simple("SELECT correo FROM usuario WHERE correo= '$correo'");

          if ($consulta2->rowCount() >= 1) {
            $respuesta = "correo";
          } else {
            $clave = mainModel::encryption($contraseña1);

            $nuevaCuenta = [
              "Rut" => $rut,
              "Nombre" => $nombre,
              "Apellido" => $apellido,
              "Correo" => $correo,
              "Telefono" => $telefono,
              "Rol" => $rol,
              "Contra" => $clave
            ];

            $guardarcuenta = mainModel::nueva_cuenta($nuevaCuenta);

            if ($guardarcuenta->rowCount() >= 1) {

              $guardaradmin = profesormodelo::nuevo_profesor_modelo($rut);

              if($guardaradmin->rowCount()>=1){
                $respuesta = "correcto";
              }else{
                mainModel::eliminar_cuenta($rut);
                $respuesta = "administrador";
              }
              
            } else {

              $respuesta = "incorrecto";
            }
          }
        }
      }
    }
    return $respuesta;
  }

  public function update_profesor($datos){
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $contraseña1 == "" || $contraseña2 == "" || $telefono == "") {
      $respuesta = ('incompletos');
    } else {
      if ($contraseña1 != $contraseña2) {
        $respuesta = ('contraseñas');
      } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

        if ($consulta1->rowCount() >= 1) {

          $respuesta = ('rut');
        } else {

            $clave = mainModel::encryption($contraseña1);

            $nuevaCuenta = [
              "Rut" => $rut,
              "Nombre" => $nombre,
              "Apellido" => $apellido,
              "Telefono" => $telefono,
              "Contra" => $clave
            ];

            $guardarcuenta = mainModel::update_cuenta($nuevaCuenta);

            if ($guardarcuenta->rowCount() >= 1) {

              //$guardaradmin = profesormodelo::update_profesor_modelo($rut);

              /*if($guardaradmin->rowCount()>=1){  // admin actualiza a profesor
                */$respuesta = ('correcto');
              /*}else{
                $respuesta = ('profesor');
              }*/
              
            } else {

              $respuesta = ('incorrecto');
            }
          
        }
      }
    }
  }


}

