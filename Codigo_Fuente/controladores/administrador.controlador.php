<?php
    if($peticionAjax){
      require_once "../modelo/administrador.modelo.php";
    }else{
      require_once "./modelo/administrador.modelo.php";
    }

    class administradorcontrolador extends administradormodelo{
      public function nuevo_administrador_controlador(){
        $rut=mainModel::limpiar_cadena($_POST['rut']);
        $nombre1=mainModel::limpiar_cadena($_POST['nombre1']);
        $apellido1=mainModel::limpiar_cadena($_POST['apellido1']);
        $contraseña1=mainModel::limpiar_cadena($_POST['contraseña1']);
        $contraseña2=mainModel::limpiar_cadena($_POST['contraseña2']);
        $email=mainModel::limpiar_cadena($_POST['email']);
        $telefono=mainModel::limpiar_cadena($_POST['telefono']);
     

        if($contraseña1 != $contraseña2){
          $alerta=[
              "Alerta"=>"simple",
              "Titulo"=>"Ocurrio un problema :(",
              "Texto"=>"Las contraseñas no coinciden, Vuelve a intentarlo",
              "Tipo"=>"error"
          ];
        }else{
          $consulta1=mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut = '$rut'");
          if($consulta1->rowCount()>=1){
            $alerta=[
              "Alerta"=>"simple",
              "Titulo"=>"Ocurrio un problema :(",
              "Texto"=>"El Rut que acaba de ingresar ya se encuentra registrado",
              "Tipo"=>"error"
          ];
          }else{
           $consulta2=mainModel::ejecutar_consulta_simple("SELECT correo FROM usuario WHERE correo='$email'");
           if ($consulta2->rowCount()>=1){
                $alerta=[
                  "Alerta"=>"simple",
                  "Titulo"=>"Ocurrio un problema :(",
                  "Texto"=>"El email ya se encuentra registrado",
                  "Tipo"=>"error"
              ];
           } else {

             $clave=mainModel::encryption($contraseña1);

             $rol = "administrador";

             $nuevaCuenta=[
                "Rut"=>$rut,
                "Nombre"=>$nombre1,
                "Apellido"=>$apellido1,
                "Contraseña"=>$clave,
                "Correo"=>$email,
                "Telefono"=>$telefono,
                "Cod_Rol"=>$rol
             ];

             $guardarcuenta = mainModel::nueva_cuenta($nuevaCuenta);

             if($guardarcuenta->rowCount()>=1){
              
                $guardaradministrador = administradormodelo::nuevo_administrador_modelo($rut);
                if ($guardaradministrador->rowCount()>=1) {

                  $alerta=[
                    "Alerta"=>"limpiar",
                    "Titulo"=>"Administrador registrado",
                    "Texto"=>"Se registro con exito el administrador",
                    "Tipo"=>"success"
                ];
                  
                } else {

                  mainModel::eliminar_cuenta($rut);

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