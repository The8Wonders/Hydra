<?php
console.log('llego hasta aca?');
   require_once "../controladores/update.proyecto.controlador.php";
   $insProy = new update_proyecto();
   $res = $insProy->update_proyecto_controlador();
   echo json_encode($res);
   ?>