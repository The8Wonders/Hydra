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
        if($row['cod_rol'] == 'alumno'){
          $datoAlu = loginmodelo::datos_modelo($row['rut']);
          $res = $datoAlu->fetch();
          $_SESSION['carrera_sgp']= $res['carrera'];
          $_SESSION['ano_ingreso_sgp']= $res['ano_ingreso'];
          $_SESSION['resgistro_sgp']= $res['registro_exitoso'];
          $_SESSION['fecha_sgp']= $res['fecha_registro'];
          $_SESSION['cargo_sgp']= $res['cargo'];
          $_SESSION['semestre_sgp']= $res['cod_semestre'];
          $_SESSION['equipo_sgp']= $res['cod_equipo'];
          $datoAluPro = mainModel::ejecutar_consulta_simple("SELECT * FROM equipo WHERE cod_equipo = '$_SESSION['equipo_sgp']'");
          $resEq = $datoAluPro->fetch();
          $_SESSION['cod_proyecto_sgp']= $resEq['cod_proyecto'];
        }

        echo json_encode('existe');
      }else{
        echo json_encode('noexiste');
      }
    }

  }
}

$log = new logincontroldaor;
$log->ingresar_controlador();

