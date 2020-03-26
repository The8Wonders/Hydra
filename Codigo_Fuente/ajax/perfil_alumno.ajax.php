<?php
   require_once "../controladores/update.alumno.controlador.php";
   $insProf = new update_alumno_controlador();
   $res = $insProf->update_alumno();
   echo json_encode($res);