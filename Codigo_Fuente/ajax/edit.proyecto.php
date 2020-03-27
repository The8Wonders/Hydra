<?php
   require_once "../controladores/proyecto.controlador.php";
   $insProy = new proyectocontrolador();
   $res = $insProy->update_proyecto_controlador();
   echo json_encode($res);
   ?>