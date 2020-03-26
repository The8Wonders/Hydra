<?php
require_once "../modelo/documento.modelo.php";

class documentocontrolador extends documentomodelo
{
  public function nuevo_documento_controlador()
  {
    $nombre = mainModel::limpiar_cadena($_POST['nombre']);
    $descripcion = mainModel::limpiar_cadena($_POST['descripcion']);
    $fichero = $_POST['documento'];
    $tmp = $_POST['tmp_name'];
    $proyecto = mainModel::limpiar_cadena($_POST['descripcion']);
    

    if ($nombre == '' || $descripcion == '' || $fichero == '') {
      $respuesta = 'Incompletos';
    } else {
      $ruta = "../documentos";
      $upload = $ruta . $nombre;

      if (move_uploaded_file($_FILES[$fichero][$tmp], $upload)) {
        $nuevoDocumento = [
          "nombre" => $nombre,
          "descripcion" => $descripcion,
          "fichero" => $fichero,
          "tipo" => $_FILES[$fichero]['type'],
          "tamano" => $_FILES[$fichero]['size']
        ];

        $ResDocumento = documentomodelo::nuevo_documento_modelo($nuevoDocumento);

        if ($ResDocumento->rowCount() >= 1) {
          $respuesta = 'Exito';
        } else {
          $respuesta = 'Error';
        }
      } else {
        $respuesta = 'NoseMovio';
      }
    }
    return $respuesta;
  }
}
