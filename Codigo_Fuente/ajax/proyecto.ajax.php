<?php 

  if(isset($_POST['nombre'])){
    require_once "../controladores/proyecto.controlador.php";
    $insPro = new proyectocontrolador();
    $res = $insPro->nuevo_proyecto_controlador();

    echo json_encode($res);
  }else{
    session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
  }