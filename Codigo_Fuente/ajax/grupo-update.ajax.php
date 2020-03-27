<?php
if (isset($_POST['nom_equi'])) {
  require_once "../controladores/grupo.controlador.php";
  $insAdmin = new grupocontrolador();
  $res = $insAdmin->editar_grupo_controlador();

  echo json_encode($res);
} else {
  session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
}
