<?php
   require_once "../controladores/update.admin.alumno.controlador.php";
   $insProf = new update_adminalumno();
   $res = $insProf->update_adminalumno_controlador();
   echo json_encode($res);