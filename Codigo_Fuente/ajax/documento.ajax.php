<?php
if (isset($_POST['cod_proyecto'])) {
  require_once "../controladores/documento.controlador.php";
  $insAdmin = new documentocontrolador();
  $res = $insAdmin->nuevo_documento_controlador();

  echo json_encode($res);
} else {
  session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
}
