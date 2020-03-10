<?php   
    /*if($peticionAjax){
      require_once "../modelo/login.modelo.php";
    }else{
      require_once "./modelo/login.modelo.php";
    }*/

    require_once "../modelo/login.modelo.php";

    class logincontrolador extends loginmodelo{

      public function ingresar_controlador(){
        
        $rut = mainModel::limpiar_cadena($_POST['rut_usuario']);
        $rut=mainModel::limpiar_rut($rut);
        $clave = mainModel::limpiar_cadena($_POST['contra']);
        $clave = mainModel::encryption($clave);
        
        $datos=[
          "Rut"=>$rut,
          "Clave"=>$clave
        ];

        $datosCuenta = loginmodelo::ingresar_modelo($datos);
        //$fila =$datosCuenta->rowCount();
        //echo "Filas afectadas ".$fila;

        if($datosCuenta->rowCount() == 1){
          
          $cosulta = $datosCuenta->fetch();
            session_start(['nombre'=>'SGP']);
            $_SESSION['rut_usuario']= $cosulta['rut'];
            $_SESSION['rol_usuario']= $cosulta['cod_rol'];
            //$_SESSION['codigo_usuario']=$cosulta['CuentaCodigo'];
            
            // Administrador
            if($cosulta['rol_usuario'] === "administrador"){
              $url ="127.0.0.1/Hydra/Codigo_Fuente/vistas/contenido/formAdmin-vistas.php";
            }else{
              $url="127.0.0.1/Hydra/Codigo_Fuente/vistas/contenido/home-vistas.php";
            }

            return '<script> window.location="'.$url.'" </script>';
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
  $login= new logincontrolador();
  $login->ingresar_controlador();
