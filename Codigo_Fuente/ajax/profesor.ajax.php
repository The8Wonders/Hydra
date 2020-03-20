<?php 
  if(isset($_POST['rut'])){
    require_once "../controladores/profesor.controlador.php";

    $insProf = new profesorcontrolador();

    $res = $insProf->nuevo_profesor_controlador();
    echo json_encode($res);
  }else{
    session_start();
      session_destroy();
      echo'<script> window.location.href="../index.php" </script>';
  }