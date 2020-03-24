<?php
   require_once "../controladores/profesor.controlador.php";
   $insProf = new profesorcontrolador();
   $res = $insProf->update_profesor_controlador();
   echo json_encode($res);