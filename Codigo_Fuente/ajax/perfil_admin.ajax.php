<?php
   require_once "../controladores/update.administrador.controlador.php";
   $insProf = new update_administrador();
   $res = $insProf->update_admin_controlador();
   echo json_encode($res);