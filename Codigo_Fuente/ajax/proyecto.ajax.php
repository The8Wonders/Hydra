<?php 

  if(isset($_POST['nombre'])){
    require_once "../controladores/proyecto.controlador.php";
    $insPro = new proyectocontrolador();
    $res = $insPro->nuevo_proyecto_controlador();

    echo json_encode($res);
  }else{
    session_start();
    session_destroy();
    echo'<script> window.location.href="../index.php" </script>';
  }