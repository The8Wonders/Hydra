<?php

require_once "../modelo/login.modelo.php";

class logincontroldaor extends loginmodelo{

  public function ingresar_controlador(){
    $rut = mainModel::limpiar_cadena($_POST['rut_usuario']);
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
        session_start();
        $_SESSION['rut']= $datos['Rut'];
        echo json_encode('existe');
      }else{
        echo json_encode('noexiste');
      }
    }
    

    

  }
}

$log = new logincontroldaor;
$log->ingresar_controlador();

