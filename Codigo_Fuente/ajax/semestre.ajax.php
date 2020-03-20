<?php
if (isset($_POST['fechaInicio'])) {
  require_once "../controladores/semestre.controlador.php";
  $insSem = new semestrecontrolador();
  $res = $insSem->nuevo_semestre_controlador();

  echo json_encode($res);
} else {
  session_start();
  session_destroy();
  echo '<script> window.location.href="../index.php" </script>';
}
