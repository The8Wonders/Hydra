<?php
require_once "../core/mainModel.php";

class requerimientomodelo extends mainModel
{

	protected function nuevo_requerimiento_modelo($datos)
	{
		$sql = mainModel::conectar()->prepare("INSERT INTO requerimiento (cod_requerimiento,tipo_requerimiento,nom_requerimiento,descripcion_requerimiento,complejidad,horas_requerimiento,control_cambios,prioridad,estado,impacto,cod_proyecto) VALUES (:cod_r,:tipo,:nom,:de,:com,:hora,:con,:pri,:est,:imp,:cod_p)");

		$sql->bindParam(":cod_r", $datos['CodReq']); // anda a ver el controlador
		$sql->bindParam(":tipo", $datos['Tipo']);
		$sql->bindParam(":nom", $datos['Nombre']);
		$sql->bindParam(":de", $datos['Descrip']);
		$sql->bindParam(":com", $datos['Comple']);
		$sql->bindParam(":hora", $datos['Hora']);
		$sql->bindParam(":con", $datos['Cambio']);
		$sql->bindParam(":pri", $datos['Priori']);
		$sql->bindParam(":est", $datos['Estado']);
		$sql->bindParam(":imp", $datos['Impac']);
		$sql->bindParam(":cod_p", $datos['CodPro']);
		$sql->execute();


		return $sql;
	}

	protected function actualizar_requerimiento_modelo($datos)
	{
		$sql = mainModel::conectar()->prepare("UPDATE requerimiento SET tipo_requerimiento=:Tipo, nom_requerimiento=:Nom, 
		descripcion_requerimiento=:De, complejidad=:Com, horas_requerimiento=:Hor, control_cambios=:Cont, prioridad=:Pri, estado=:Estado, 
		impacto=:Imp, cod_proyecto=:CodP WHERE cod_requerimiento=:Cod");

		$sql->bindParam(":Cod", $datos['cod_requerimiento']);
		$sql->bindParam(":Tipo", $datos['tipo_requerimiento']);
		$sql->bindParam(":Nom", $datos['nom_requerimiento']);
		$sql->bindParam(":De", $datos['descripcion_requerimiento']);
		$sql->bindParam(":Com", $datos['complejidad']);
		$sql->bindParam(":Hor", $datos['horas_requerimiento']);
		$sql->bindParam(":Cont", $datos['control_cambios']);
		$sql->bindParam(":Pri", $datos['prioridad']);
		$sql->bindParam(":Estado", $datos['estado']);
		$sql->bindParam(":Imp", $datos['impacto']);
		$sql->bindParam(":CodP", $datos['cod_proyecto']);

		$sql->execute();
		return $sql;
	}
}
