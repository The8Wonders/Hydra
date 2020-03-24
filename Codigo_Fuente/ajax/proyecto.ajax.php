<?php 

  if(isset($_POST['nombre'])){   /* verifica si viene vacio el campo rut desde el formulario, si viene  vacio te saca del sistema y elimina tu sesion */
    require_once "../controladores/proyecto.controlador.php";
    $insPro = new proyectocontrolador();
    $res = $insPro->nuevo_proyecto_controlador(); /* llama a ala funcion nuevo proyecto controlador que se encuentra en el controlador y la respuesta la guarda en $res */

    echo json_encode($res);
  }else{
    session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
  }