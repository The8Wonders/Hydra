<?php
   if(isset($_POST['cod'])){
      require_once "../controladores/semestre.controlador.php";
      $insSem = new semestrecontrolador();
      $res = $insSem->actualizar_semestre_controlador();
      echo json_encode($res);
   }else{   
      session_start(['name' => 'SGP']);
      session_destroy();
      header("location: ../index.php");
   }
  