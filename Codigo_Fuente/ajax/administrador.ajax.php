<?php
if (isset($_POST['rut'])) {
  require_once "../controladores/administrador.controlador.php";
  $insAdmin = new administradorcontrolador();
  $res = $insAdmin->nuevo_administrador_controlador();

  echo json_encode($res);
} else {
  session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
}
