<?php

require_once "../modelo/profesor.modelo.php";

class profesorcontrolador extends profesormodelo
{
  public function nuevo_profesor_controlador()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $rut = mainModel::limpiar_rut($rut);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $nombre2 = mainModel::limpiar_cadena($_POST['nombre2']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $apellido2 = mainModel::limpiar_cadena($_POST['apellido2']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $correo = mainModel::is_valid_email($_POST['correo']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);
    $nombre = $nombre . " " . $nombre2;
    $apellido = $apellido . " " . $apellido2;

    $Vrut = mainModel::verificar_rut($rut);

    if ($correo) {
      if ($Vrut == "TRUE") {
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

                  if ($guardaradmin->rowCount() >= 1) {
                    $respuesta = "correcto";
                  } else {
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
      } else {
        $respuesta = "RutNValidado";
      }
    } else {
      $respuesta = "CorreoM";
    }


    return $respuesta;
  }

  public function actualizar_profesor_controlador()
  {
    $rutR = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre-edit']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido-edit']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono-edit']);
    $correo = mainModel::is_valid_email($_POST['correo-edit']);
    $rol = mainModel::limpiar_cadena($_POST['codigoRol']);

    if ($correo) {
      if ($rutR == "" || $nombre == "" || $apellido == "" || $correo == "" || $rol == "" || $telefono == "") {
        $respuesta = "incompletos";
      } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rutR' AND cod_rol = 'profesor' ");

        if ($consulta1->rowCount() >= 1) {

          $editarCuenta = [
            "Rut" => $rutR,
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Telefono" => $telefono,
            "Correo" => $correo,
            "Rol" => $rol
          ];

          $actualixar = mainModel::update_cuenta($editarCuenta);

          if ($actualixar->rowCount() >= 1) {
            $respuesta = "Actualizada";
          } else {
            $respuesta = "Error";
          }
        } else {
          $respuesta = "NoencuentraProfesor";
        }
      }
    } else {
      $respuesta = "CorreoM";
    }
    return $respuesta;
  }
}
