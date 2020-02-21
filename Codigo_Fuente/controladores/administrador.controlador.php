<?php
    if($peticionAjax){
      require_once "../modelo/administrador.modelo.php";
    }else{
      require_once "./modelo/administrador.modelo.php";
    }

    class administradorcontrolador extends administradormodelo{
      public function nuevo_administrador_controlador(){
        $rut=mainModel::limpiar_cadena($_POST['rut']);
        $rut=mainModel::limpiar_rut($rut);
        $nombre1=mainModel::limpiar_cadena($_POST['nombre1']);
        $nombre2=mainModel::limpiar_cadena($_POST['nombre2']);
        $apellido1=mainModel::limpiar_cadena($_POST['apellido1']);
        $apellido2=mainModel::limpiar_cadena($_POST['apellido2']);
        $contraseña1=mainModel::limpiar_cadena($_POST['contraseña1']);
        $contraseña2=mainModel::limpiar_cadena($_POST['contraseña2']);
        $email=mainModel::limpiar_cadena($_POST['email']);
        $telefono=mainModel::limpiar_cadena($_POST['telefono']);
        $genero=mainModel::limpiar_cadena($_POST['optionsGenero']);
        
        if ($genero == "Masculino") {
          $foto="hombre";
        } else {
          $foto="mujer";
        }

        if($contraseña1 != $contraseña2){
          $alerta=[
              "Alerta"=>"simple",
              "Titulo"=>"Ocurrio un problema :(",
              "Texto"=>"Las contraseñas no coinciden, Vuelve a intentarlo",
              "Tipo"=>"error"
          ];
        }else{
          $consulta1=mainModel::ejecutar_consulta_simple("SELECT adminrut FROM admin WHERE adminrut = '$rut'");
          if($consulta1->rowCount()>=1){
            $alerta=[
              "Alerta"=>"simple",
              "Titulo"=>"Ocurrio un problema :(",
              "Texto"=>"El Rut que acaba de ingresar ya se encuentra registrado",
              "Tipo"=>"error"
          ];
          }else{
           $consulta2=mainModel::ejecutar_consulta_simple("SELECT cuentaemail FROM cuenta WHERE cuentaemail='$email'");
           if ($consulta2->rowCount()>=1){
                $alerta=[
                  "Alerta"=>"simple",
                  "Titulo"=>"Ocurrio un problema :(",
                  "Texto"=>"El email ya se encuentra registrado",
                  "Tipo"=>"error"
              ];
           } else {
             $consulta3=mainModel::ejecutar_consulta_simple("SELECT id FROM cuenta");
             $numero = ($consulta3->rowCount())+1;

             $codigo=mainModel::generar_codigo_aleatorio("AC",7,$numero);

             $clave=mainModel::encryption($contraseña1);

             $nuevaCuenta=[
                "Codigo"=>$codigo,
                "Rut"=>$rut,
                "Clave"=>$clave,
                "Email"=>$email,
                "Estado"=>"Activo",
                "Tipo"=>"Administrador",
                "Genero"=>$genero,
                "Foto"=>$foto,
                "Privilegio"=>3
             ];

             $guardarcuenta = mainModel::nueva_cuenta($nuevaCuenta);

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
             }
           }
          }
        }
        return mainModel::alertas($alerta);
        
      }
    }