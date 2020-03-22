<?php
  session_start(['name' => 'SGP']);
  require_once "../core/mainModel.php";

  class cambiarcontraseñacontrolador extends mainModel{
    public function cambiar_contraseña(){
      $rut = mainModel::limpiar_cadena($_POST['rut']);
      $rut = mainModel::limpiar_rut($rut);
      $contraActual = mainModel::limpiar_cadena($_POST['contraActual']);
      $contraNueva = mainModel::limpiar_cadena($_POST['contraNueva']);
      $reContraNueva = mainModel::limpiar_cadena($_POST['reContraNueva']);
      $contraActual = mainModel::encryption($contraActual);
      $ruSi = $_SESSION['rut_sgp'];
      $coSi = $_SESSION['contraseña_sgp'];

      if($rut == $ruSi){
        if ($rut == "" || $contraActual == "" || $contraNueva == "" || $reContraNueva == "") {
          $respuesta = "incompletos";
        } else{
          $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");
  
          if($consulta1->rowCount()>=1){
            $consulta2 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE contraseña= '$contraActual' AND rut= '$ruSi'");
  
            if($consulta2->rowCount()>=1){
              if($contraNueva == $reContraNueva){
                $contra = mainModel::encryption($contraNueva);
                if($contra != $coSi ){
                  
                  $nuvaContraseña = [
                    "Rut" => $ruSi,
                    "Contra" => $contra
                  ];
  
                  $guardarContraseña = mainModel::contraseña_cuenta($nuvaContraseña);
  
                  if($guardarContraseña->rowCount()>=1){
                    $respuesta = "Exito";
                  }else{
                    $respuesta = "Error";
                  }
                }else{
                  $respuesta = "CoIgualAnterior";
                }
              }else{
                $respuesta = "Ncoinciden";
              }
            }else{
              $respuesta = "Cincorrecta";
            }
          }else{
            $respuesta = "RNexiste";
          }
        }
      }
      
      
      echo json_encode($respuesta);
      return $respuesta;
    }
  }

  $con = new cambiarcontraseñacontrolador();
  $a = $con->cambiar_contraseña();