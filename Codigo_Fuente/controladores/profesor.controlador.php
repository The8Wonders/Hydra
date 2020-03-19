<?php

require_once "../modelo/profesor.modelo.php";

class profesorcontrolador extends profesormodelo
{
  public function nuevo_profesor_controlador()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $contraseña1 == "" || $contraseña2 == "" || $correo == "" || $telefono == "" || $rol == "") {
      echo json_encode('incompletos');
    } else {
      if ($contraseña1 != $contraseña2) {
        echo json_encode('contraseñas');
      } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

        if ($consulta1->rowCount() >= 1) {

          echo json_encode('rut');
        } else {

          $consulta2 = mainModel::ejecutar_consulta_simple("SELECT correo FROM usuario WHERE correo= '$correo'");

          if ($consulta2->rowCount() >= 1) {
            echo json_encode('correo');
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
                echo json_encode('correcto');
              }else{
                echo json_encode('administrador');
              }
              
            } else {

              echo json_encode('incorrecto');
            }
          }
        }
      }
    }
  }

  public function update_profesor($datos){
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $contraseña1 == "" || $contraseña2 == "" || $telefono == "") {
      echo json_encode('incompletos');
    } else {
      if ($contraseña1 != $contraseña2) {
        echo json_encode('contraseñas');
      } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

        if ($consulta1->rowCount() >= 1) {

          echo json_encode('rut');
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
                */echo json_encode('correcto');
              /*}else{
                echo json_encode('profesor');
              }*/
              
            } else {

              echo json_encode('incorrecto');
            }
          
        }
      }
    }
  }


}

$admi = new profesorcontrolador;
$admi->nuevo_profesor_controlador();
