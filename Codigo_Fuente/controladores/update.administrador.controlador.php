<?php 
require_once "../modelo/administrador.modelo.php";

class update_administrador extends administradormodelo{

    public function update_admin_controlador(){

        $rut = mainModel::limpiar_cadena($_POST['rut']);
        $rut = mainModel::limpiar_rut($rut);
        $nombre = mainModel::limpiar_cadena($_POST['nombre']);
        $apellido = mainModel::limpiar_cadena($_POST['apellido']);
        $telefono = mainModel::limpiar_cadena($_POST['telefono']);
        $correo = mainModel::limpiar_cadena($_POST['correo']);
        $rol= mainModel::limpiar_cadena($_POST['rol']);
        
        if ($rut == "" || $nombre == "" || $apellido == "" || $correo == "" || $rol == "" ||  $telefono == "") {
          $respuesta = "incompletos";
          //header("Location:../vistas/contenidos/perfil-vistas.php");;
           
        } else {
            $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut' AND cod_rol = 'administrador' ");
    
            if($consulta1->rowCount()>=1){
              
              $editarCuenta = [
                "Rut" => $rut,
                "Nombre" => $nombre,
                "Apellido" => $apellido,
                "Telefono" => $telefono,
                "Correo" => $correo,
                "Rol" => $rol
              ];
              
                $actualixar = mainModel::update_cuenta($editarCuenta);

                if($actualixar->rowCount()>=1){
                  session_start(['name'=>'SGP']);
                  $_SESSION['rut_sgp']= $rut;
                  $_SESSION['nombre_sgp']= $nombre;
                  $_SESSION['apellido_sgp']= $apellido;
                  //$_SESSION['contraseña_sgp']= $contraseña;
                  $_SESSION['correo_sgp']= $correo;
                  $_SESSION['telefono_sgp']= $telefono;
                  $_SESSION['cod_rol_sgp']= $rol;
                  
                  //header("Location:../vistas/contenidos/perfil-vistas.php");
                  $respuesta = "Actualizada";
                    
                }else{
                    $respuesta = "Error";
                    //header("Location:../vistas/contenidos/perfil-vistas.php");
                }
              }else{
                $respuesta = "NoencuentraAdmin";
                //header("Location:../vistas/contenidos/perfil-vistas.php");
            }
        }
    
      //header("Location:../vistas/contenidos/perfil-vistas.php");
      return $respuesta;
    }
}

?>