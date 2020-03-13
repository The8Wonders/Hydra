<?php

require_once "../modelo/administrador.modelo.php";

class administradorcontrolador extends administradormodelo
{
  public function nuevo_administrador_controlador()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);

    if( $rut == "" || $nombre == "" || $apellido == "" || $contraseña1 == "" || $contraseña2 == "" || $correo == "" || $telefono == "" || $rol == "" ){
      echo json_encode('incompletos');
    }else{
      if ($contraseña1 != $contraseña2) {
        echo json_encode('contraseñas');
      } else {
  
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");
  
        if ($consulta1->rowCount() >= 1) {
  
          echo json_encode('rut');
  
        } else {
  
          $consulta2 = mainModel::ejecutar_consulta_simple("SELECT correo FROM usuario WHERE correo= '$correo'");
  
          if ($consulta2->rowCount()>=1) {
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
  
              echo json_encode('correcto');
            } else {
  
              echo json_encode('incorrecto');
            }
          }
        }
      }
    }
  }
}

$admi = new administradorcontrolador;
$admi->nuevo_administrador_controlador();
