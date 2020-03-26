<?php
   require_once "../controladores/semestre.controlador.php";
   $insSem = new semestrecontrolador();
   $res = $insSem->actualizar_semestre_controlador();
   echo json_encode($res);