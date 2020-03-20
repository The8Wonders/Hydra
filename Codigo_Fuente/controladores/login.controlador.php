<?php

require_once "../modelo/login.modelo.php";

class logincontroldaor extends loginmodelo{

  public function ingresar_controlador(){
    $rut = mainModel::limpiar_cadena($_POST['rut_usuario']);
    $rut = mainModel::limpiar_rut($rut);
    $clave = mainModel::limpiar_cadena($_POST['contra']);
    $clave = mainModel::encryption($clave);

    if($rut == "" || $clave == ""){
      echo json_encode('incompletos');
    }else{
      $datos = [
        "Rut" => $rut,
        "Clave" => $clave
      ];
  
      $datosCuenta = loginmodelo::ingresar_modelo($datos);

      if($datosCuenta->rowCount()>=1){

        $row = $datosCuenta->fetch();

        session_start(['name'=>'SGP']);
        $_SESSION['rut_sgp']= $row['rut'];
        $_SESSION['nombre_sgp']= $row['nombre'];
        $_SESSION['apellido_sgp']= $row['apellido'];
        $_SESSION['contraseña_sgp']= $row['contraseña'];
        $_SESSION['correo_sgp']= $row['correo'];
        $_SESSION['telefono_sgp']= $row['telefono'];
        $_SESSION['cod_rol_sgp']= $row['cod_rol'];

        echo json_encode('existe');
      }else{
        echo json_encode('noexiste');
      }
    }

  }
}

$log = new logincontroldaor;
$log->ingresar_controlador();

