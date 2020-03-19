<?php
require_once "../modelo/ja.modelo.php";

class jacontrolador extends jamodelo
{
  public function nuevo_ja_controlador()
  {
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $rut = mainModel::limpiar_cadena($_POST['rut']);

    $nuevoja = [
      "Nombre" =>$nombre,
      "Rut" =>$rut
    ];

    $guardaja = jamodelo::nuevo_ja_modelo($nuevoja);

    if($guardaja->rowCount()>=1){
      $respuesta = "correcto";
    }else{
      $respuesta = "incorecto";
    }

    return $respuesta;
  }
}
