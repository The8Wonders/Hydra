<?php   
    if($peticionAjax){
      require_once "../modelo/login.modelo.php";
    }else{
      require_once "./modelo/login.modelo.php";
    }
  
    class logincontrolador extends loginmodelo{

      public function ingresar_controlador(){
        
        $rut = mainModel::limpiar_cadena($_POST['rut']);
        $rut=mainModel::limpiar_rut($rut);
        $clave = mainModel::limpiar_cadena($_POST['contraseña']);
        $clave = mainModel::encryption($clave);

        $datos=[
          "Rut"=>$rut,
          "Clave"=>$clave
        ];

        $datosCuenta = loginmodelo::ingresar_modelo($datos);

        if($datosCuenta->rowCount() == 1){
          $cosulta = $datosCuenta->fetch();
            session_start(['nombre'=>'SGP']);
            $_SESSION['rut_usuario']=$cosulta['CuentaRut'];
            $_SESSION['codigo_usuario']=$cosulta['CuentaCodigo'];

            if($cosulta['CuentaTipo'] == "Administrador"){
              $url =RUTA."formAdmin/";
            }else{
              $url=RUTA."home/";
            }

            return $urlLocation='<script> window.location="'.$url.'" </script>';
        }else{
          $alerta=[
            "Alerta"=>"simple",
            "Titulo"=>"Ocurrio un problema :(",
            "Texto"=>"El Rut o la Contraseña son invalidas",
            "Tipo"=>"error"
        ];

        return mainModel::alertas($alerta);
        }
    }
  }