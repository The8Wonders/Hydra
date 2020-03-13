<?php
    /*if($peticionAjax){
      require_once "../modelo/administrador.modelo.php";
    }else{
      require_once "./modelo/administrador.modelo.php";
    }*/
    require_once "../core/mainModel.php";
    
    class alumnocontrolador extends mainModel{

      public function nuevo_alumno_controlador(){
        $rut=mainModel::limpiar_cadena($_POST['rut']);
        $rut=mainModel::limpiar_rut($rut);
        $nombre=mainModel::limpiar_cadena($_POST['nombre']);
        $apellido=mainModel::limpiar_cadena($_POST['apellido']);
        $contraseña1=mainModel::limpiar_cadena($_POST['contra']);
        $contraseña2=mainModel::limpiar_cadena($_POST['re-contra']);
        $correo=mainModel::limpiar_cadena($_POST['correo']);
        $telefono=mainModel::limpiar_cadena($_POST['telefono']);
        $rol= mainModel::limpiar_cadena($_POST['rol']);
        //$genero=mainModel::limpiar_cadena($_POST['optionsGenero']);
        
        /*if ($genero == "Masculino") {
          $foto="hombre";
        } else {
          $foto="mujer";
        }*/

        if($contraseña1 != $contraseña2){
          $alerta=[
              "Alerta"=>"simple",
              "Titulo"=>"Ocurrio un problema :(",
              "Texto"=>"Las contraseñas no coinciden, Vuelve a intentarlo",
              "Tipo"=>"error"
          ];
        }else{
          $consulta1=mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");
          if($consulta1->rowCount()>=1){
            $alerta=[
              "Alerta"=>"simple",
              "Titulo"=>"Ocurrio un problema :(",
              "Texto"=>"El Rut que acaba de ingresar ya se encuentra registrado",
              "Tipo"=>"error"
          ];
          }else{
           $consulta2=mainModel::ejecutar_consulta_simple("SELECT correo FROM usuario WHERE correo='$correo'");
           if ($consulta2->rowCount()>=1){
                $alerta=[
                  "Alerta"=>"simple",
                  "Titulo"=>"Ocurrio un problema :(",
                  "Texto"=>"El email ya se encuentra registrado",
                  "Tipo"=>"error"
              ];
           } else {
             /*$consulta3=mainModel::ejecutar_consulta_simple("SELECT id FROM cuenta");
             $numero = ($consulta3->rowCount())+1;
             $codigo=mainModel::generar_codigo_aleatorio("AC",7,$numero);*/

             $clave=mainModel::encryption($contraseña1);

             $nuevaCuenta=[
                "Rut"=>$rut,
                "Nombre"=>$nombre,
                "Apellido"=>$apellido,
                "Correo"=>$correo,
                "Telefono"=>$telefono,
                "Rol"=>$rol,
                "Contra"=>$clave
             ];

             $guardarcuenta = mainModel::nueva_cuenta($nuevaCuenta);
             session_start();
             $_SESSION['nombre']= $nombre;
             $_SESSION['apellido']= $apellido;
             $_SESSION['correo']= $correo;
             $_SESSION['rol']= $rol;
             $_SESSION['rut']= $rut;
              return header("Location:../vistas/contenidos/home-vistas.php");
             /*
             if($guardarcuenta->rowCount()>=1){
                $nuevoAdministrador=[
                  "Rut"=>$rut,
                  "Nombre1"=>$nombre1,
                  "Nombre2"=>$nombre2,
                  "Apellido1"=>$apellido1,
                  "Apellido2"=>$apellido2,
                  "NombreCompleto"=> $nombre1 . $nombre2 . $apellido1 . $apellido2,
                  "Codigo"=>$codigo
                ];
                $guardaradministrador = administradormodelo::nuevo_administrador_modelo($nuevoAdministrador);
                if ($guardaradministrador->rowCount()>=1) {
                  $alerta=[
                    "Alerta"=>"limpiar",
                    "Titulo"=>"Administrador registrado",
                    "Texto"=>"Se registro con exito el administrador",
                    "Tipo"=>"success"
                ];
                  
                } else {
                  mainModel::eliminar_cuenta($codigo);
                      $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un problema :(",
                        "Texto"=>"No se ah podido registrar el administrador 1",
                        "Tipo"=>"error"
                    ];
                }
                
             }else{
                  $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un problema :(",
                    "Texto"=>"No se ah podido registrar el administrador 2",
                    "Tipo"=>"error"
                ];
             }*/
           }
          }
        }
        //return mainModel::alertas($alerta);
        
      }
    }
    $alu= new alumnocontrolador;
    $alu->nuevo_alumno_controlador();