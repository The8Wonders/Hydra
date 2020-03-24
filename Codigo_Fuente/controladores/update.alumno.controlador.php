<?php
class update_alumno{

    public function update_alumno()
  {
    $rut = mainModel::limpiar_cadena($_POST['rut']);
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $apellido = mainModel::limpiar_cadena($_POST['apellido']);
    $contraseña1 = mainModel::limpiar_cadena($_POST['contra']);
    $contraseña2 = mainModel::limpiar_cadena($_POST['re-contra']);
    $telefono = mainModel::limpiar_cadena($_POST['telefono']);

    if ($rut == "" || $nombre == "" || $apellido == "" || $contraseña1 == "" || $contraseña2 == "" || $telefono == "") {
      echo json_encode('incompletos');
    } else {
      if ($contraseña1 != $contraseña2) {
        echo json_encode('contraseñas');
      } else {

        $consulta1 = mainModel::ejecutar_consulta_simple("SELECT rut FROM usuario WHERE rut= '$rut'");

        if ($consulta1->rowCount() >= 1) {

          echo json_encode('rut');
        } else {

          $clave = mainModel::encryption($contraseña1);
          $actualizarCuenta = [
            "Rut" => $rut,
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Telefono" => $telefono,
            "Contra" => $clave
          ];

          $updatecuenta = mainModel::update_cuenta($actualizarCuenta);

          if ($updatecuenta->rowCount() >= 1) {

            //$guardaralumno = alumnomodelo::actualizar_alumno_modelo($rut);

            /*if($guardaralumno->rowCount()>=1){ // admin o profe actualiza a alumno
                */
            echo json_encode('correcto');
            /*}else{
                echo json_encode('alumno');
             }*/
          } else {

            echo json_encode('incorrecto');
          }
        }
      }
    }
  }


}

$update_alu= new update_alumno();
$update_alu->update_alumno();

?>