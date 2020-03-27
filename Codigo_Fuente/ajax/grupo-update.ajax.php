<?php
if (isset($_POST['nom_equi'])) {
  require_once "../controladores/grupo.controlador-update.php";
  $insAdmin = new grupocontroladorupdate();
  $res = $insAdmin->updateGrupo();

  echo json_encode($res);
} else {
  session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
}
