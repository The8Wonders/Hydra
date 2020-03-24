<?php
require_once "../modelo/profesor.modelo.php";
class update_profesor extends profesormodelo{
    public function update_profesor_controlador(){

    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $correo == "" || $rol == "" || $telefono == "") {
      //$respuesta = "incompletos";
      //header("Location:../vistas/contenidos/perfil-vistas.php");
      echo "datos incompletos";
    } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut' AND cod_rol = 'profesor' ");

        if($consulta1->rowCount()>=1){
          
          $editarCuenta = [
            "Rut" => $rut,
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Telefono" => $telefono,
            "Correo" => $correo,
            "Rol" => $rol
          ];

          $actualizarRut= profesormodelo::update_rut_profesor($rut);

          if($actualizarRut->rowCount()>=1){

            $actualixar = mainModel::update_cuenta($editarCuenta);

            if($actualixar->rowCount()>=1){
              //$respuesta = "Actualizada";
              //header("Location:../vistas/contenidos/perfil-vistas.php");
              echo "se actualizo la cuenta";
            }else{
              //$respuesta = "Error";
              //header("Location:../vistas/contenidos/perfil-vistas.php");
              echo "error";
            }

          }

        }else{
          //$respuesta = "NoencuentraProfesor";
          //header("Location:../vistas/contenidos/perfil-vistas.php");
          echo "no se encontro el profesor";
        }
    }

    //return $respuesta;
    //header("Location:../vistas/contenidos/perfil-vistas.php");
  }

  
}
$update_prof= new update_profesor();
$update_prof->update_profesor_controlador();

?>