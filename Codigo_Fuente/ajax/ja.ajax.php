<?php 

  if(isset($_POST['rut'])){
    require_once "../controladores/ja.controlador.php";
    $insJa = new jacontrolador();

    if(isset($_POST['rut']) && isset($_POST['nombre'])){
      
      /* $res = $insJa->nuevo_ja_controlador(); */
      echo json_encode($res);
    }
  }else{
    session_start();
      session_destroy();
      echo'<script> window.location.href="../index.php" </script>';
  }