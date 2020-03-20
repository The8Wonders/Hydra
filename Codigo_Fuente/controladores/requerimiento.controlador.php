<?php

require_once "../modelo/requerimiento.modelo.php";

/**
 * 
 */
class requerimientocontrolador extends requerimientomodelo
{

	function nuevo_requerimiento_controlador()
	{
		$tipo = mainModel::limpiar_cadena($_POST['tipo']);
		$nombre = mainModel::limpiar_cadena($_POST['nombre']);
		$descrip = mainModel::limpiar_cadena($_POST['descrip']);
		$complejidad = mainModel::limpiar_cadena($_POST['complejidad']);
		$hora = mainModel::limpiar_cadena($_POST['hora']);
		$cambio = mainModel::limpiar_cadena($_POST['cambio']);
		$prioridad = mainModel::limpiar_cadena($_POST['prioridad']);
		$estado = mainModel::limpiar_cadena($_POST['estado']);
		$impacto = mainModel::limpiar_cadena($_POST['impacto']);
		$codigoProyecto = mainModel::limpiar_cadena($_POST['codigoProyecto']);

		$codRequerimiento = mainModel::generar_codigo_aleatorio("AB", 7, $hora);

		if ($tipo == "" || $nombre == "" || $descrip == "" || $complejidad == "" || $hora == "" || $cambio == "" || $prioridad == "" || $estado == "" || $impacto == "" || $codigoProyecto == "" || $codRequerimiento == "") {

			$respuesta = "Incompleto";
		} else {
			$query1 = mainModel::ejecutar_consulta_simple("SELECT cod_requerimiento FROM requerimiento WHERE cod_requerimiento='$codRequerimiento' ");
			if ($query1->rowCount() >= 1) {
				$respuesta = "cod_existente";
			} else {
				$nuevoRequerimiento = [
					"Tipo" => $tipo,      //esto es lo que va a resivir el modelo
					"Nombre" => $nombre,
					"Descrip" => $descrip,
					"Comple" => $complejidad,
					"Hora" => $hora,
					"Cambio" => $cambio,
					"Priori" => $prioridad,
					"Estado" => $estado,
					"Impac" => $impacto,
					"CodPro" => $codigoProyecto,
					"CodReq" => $codRequerimiento
				];

				$guardarRequerimiento = requerimientomodelo::nuevo_requerimiento_modelo($nuevoRequerimiento);

				if ($guardarRequerimiento->rowCount() >= 1) {
					$respuesta = "Correcto";
				} else {
					$respuesta = "Incorrecto";
				}
			}
		}
		return $respuesta;
	}
}
