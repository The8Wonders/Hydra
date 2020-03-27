<?php
   require_once "../controladores/recuperarClave.controlador.php";
   $insProf = new recuperar_clave_controlador();
   $res = $insProf->recuperar_clave();
   echo json_encode($res);