<?php

/**
 * 
 */
require_once "../core/mainModel.php";

class requerimientomodelo extends mainModel
{
	
	function nuevo_requerimiento_modelo($datos)
	{
		$sql=mainModel::conectar()->prepare("INSERT INTO requerimiento (cod_requerimiento,tipo_requerimiento,nom_requerimiento,descripcion_requerimiento,complejidad,horas_requerimiento,control_cambios,prioridad,estados,impacto,cod_proyecto) VALUES (:cod_r,:tipo,:nom,:des,:com,:hora,:con,:pri,:est,:imp,:cod_p)");

		$sql=bindParam(":cod_r",$datos['CodReq']);// anda a ver el controlador
		$sql=bindParam(":tipo",$datos['Tipo']);
		$sql=bindParam(":nom",$datos['Nombre']);
		$sql=bindParam(":des",$datos['Descrip']);
		$sql=bindParam(":com",$datos['Comple']);
		$sql=bindParam(":hora",$datos['Hora']);
		$sql=bindParam(":con",$datos['Cambio']);
		$sql=bindParam(":pri",$datos['Priori']);
		$sql=bindParam(":est",$datos['Estado']);
		$sql=bindParam(":imp",$datos['Impac']);
		$sql=bindParam(":cod_p",$datos['CodPro']);
		$sql->execute();


		return $sql;

	}
}