<?php 
  if(isset($_POST['rut'])){
    require_once "../controladores/profesor.controlador.php";
    $insProf = new profesorcontrolador();
    if(isset($_POST['rut']) && isset($_POST['rol'])){
      $res = $insProf->nuevo_profesor_controlador();
    }else{
      $res = $insProf->eliminar_profesor_controlador();
    }
    echo json_encode($res);
  }else{
    session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
  }