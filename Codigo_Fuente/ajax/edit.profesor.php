<?php
   require_once "../controladores/profesor.controlador.php";
   $insProf = new profesorcontrolador();
   $res = $insProf->actualizar_profesor_controlador();
   echo json_encode($res);