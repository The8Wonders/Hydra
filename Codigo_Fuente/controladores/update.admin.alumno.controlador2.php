<?php
//require_once "../modelo/profesor.modelo.php";
require_once "../core/mainModel.php";
class update_adminalumno extends alumnomodelo{
    public function update_adminalumno_controlador(){

    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);
    $correo = mainModel::limpiar_cadena($_POST['correo']);
    $rol = mainModel::limpiar_cadena($_POST['rol']);
    $cargo = mainModel::limpiar_cadena($_POST['cargo']);
    $equipo = mainModel::limpiar_cadena($_POST['equipo']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $correo == "" || $rol == "" || $telefono == "" 
    || $cargo == "" || $equipo == "") {
      $respuesta = "incompletos";
      
      //header("Location:../vistas/contenidos/perfil-vistas.php");
    } else {
        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut' AND cod_rol = 'alumno' ");

        if($consulta1->rowCount()>=1){
          
          $editarCuenta = [
            "Rut" => $rut,
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Telefono" => $telefono,
            "Correo" => $correo,
            "Rol" => $rol
          ];


          $consulta2 = mainModel::ejecutar_consulta_simple("SELECT rut FROM alumno WHERE rut= '$rut' ");

        if($consulta2->rowCount()>=1){
          
          $editarCuenta2 = [
            "Rut" => $rut,
            "Cargo" => $cargo,
            "Equipo" => $equipo
          ];

          //$actualizarRut= profesormodelo::update_rut_profesor($rut);

          //if($actualizarRut->rowCount()>=1){
            
            $actualixar = alumnomodelo::actualizar_alumno_modelo2($editarCuenta);
    
            if($actualixar->rowCount()>=1){
              //header("Location:../vistas/contenidos/tableAlumnos-vistas.php");
    
              $actualixar2 = alumnomodelo::actualizar_alumno_admin_modelo($editarCuenta2);
              if($actualixar2->rowCount()>=1){
                $respuesta = "Actualizada";
              }
            
            }else{
              $respuesta = "Error";
              //header("Location:../vistas/contenidos/perfil-vistas.php");
            }

          //}

        }else{
          $respuesta = "NoencuentraAlumno";
          //header("Location:../vistas/contenidos/perfil-vistas.php");
        }
    }

    return $respuesta;
    //header("Location:../vistas/contenidos/perfil-vistas.php");
  }

  
}

?>