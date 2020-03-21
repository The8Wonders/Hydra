<?php

if (isset($_POST['tipo'])) {
	require_once "../controladores/requerimiento.controlador.php";
	$insReq= new requerimientocontrolador();//inisializando clase controlador
	$res= $insReq->nuevo_requerimiento_controlador(); //llamamos a la funcion nuevo_requerimiento_controlador de la clase controlador que estaba guardada en insreq
	echo json_encode($res);// envia respuesta de la funcion nuevo requerimiento controlador al js


}else{
	session_start(['name' => 'SGP']);
  session_destroy();
  header("location: ../index.php");
}
