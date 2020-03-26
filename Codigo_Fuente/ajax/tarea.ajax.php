<?php
if (isset($_POST['nombre'])) {
  require_once "../controladores/tarea.controlador.php";
  $insReq = new tareacontrolador();
  $res = $insReq->nueva_tarea_controlador();
  echo json_encode($res);
} else {
  session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
}
