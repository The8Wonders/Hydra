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
        //echo "Filas afectadas controlador: ".$fila;

        if($datosCuenta->rowCount() == 1){
                    
          $consulta = $datosCuenta->fetch(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['rut']= $consulta['rut'];
            $_SESSION['rol']= $consulta['cod_rol'];
            //$_SESSION['codigo_usuario']=$cosulta['CuentaCodigo'];
            
            // Administrador
            if($consulta['cod_rol'] === "administrador"){
              $url ="../vistas/contenidos/formAdmin-vistas.php";
            }else{
              $url="../vistas/contenidos/home-vistas.php";
            }

            return header('Location:'.$url);
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
