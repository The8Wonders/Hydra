<?php
   require_once "../controladores/update.profesor.controlador.php";
   $insProf = new update_profesor();
   $res = $insProf->update_profesor_controlador();
   echo json_encode($res);