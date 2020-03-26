<?php
require_once "../modelo/alumno.modelo.php";
class update_alumno_controlador extends alumnomodelo{

    public function update_alumno()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $telefono == "" || $rol == "") {
      //echo json_encode('incompletos');
      //header("Location:../vistas/contenidos/perfil-vistas.php");
      $respuesta= "incompletos";

    } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut' AND cod_rol= 'alumno'");

        if ($consulta1->rowCount() >= 1) {
          $actualizarCuenta = [
            "Rut" => $rut,
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Telefono" => $telefono
          ];
          
          $updatecuenta = alumnomodelo::actualizar_alumno_modelo($actualizarCuenta);
          
          if ($updatecuenta->rowCount() >= 1) {

            //$guardaralumno = alumnomodelo::actualizar_alumno_modelo($rut);

            /*if($guardaralumno->rowCount()>=1){ // admin o profe actualiza a alumno
                */
            //echo json_encode('correcto');
            session_start(['name'=>'SGP']);
            $_SESSION['rut_sgp']= $rut;
            $_SESSION['nombre_sgp']= $nombre;
            $_SESSION['apellido_sgp']= $apellido;
            //$_SESSION['contraseña_sgp']= $contraseña;
            $_SESSION['correo_sgp']= $correo;
            $_SESSION['telefono_sgp']= $telefono;
            $_SESSION['cod_rol_sgp']= $rol;

            //header("Location:../vistas/contenidos/perfil-vistas.php");
            $respuesta= "Actualizada";
            /*}else{
                echo json_encode('alumno');
             }*/
          } else {

            //echo json_encode('incorrecto');

            //header("Location:../vistas/contenidos/perfil-vistas.php");
            $respuesta= "incorrecto";
          }
        }
    }
    return $respuesta;
  }
}

//$update_alu= new update_alumno();
//$update_alu->update_alumno();

?>