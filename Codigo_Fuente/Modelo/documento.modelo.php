<?php
require_once "../core/mainModel.php";

class documentomodelo extends mainModel
{

  protected function nuevo_documento_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO documento (cod_documento, nombre, tmp_nombre	, tamaño, tipo, descripcion, cod_proyecto)
    VALUES (:CodD, :Nombre, :Tmp_nombre, :Tamaño, :Tipo, :Descripcion, :CodP)");

    $sql->bindParam(":CodD", $datos['cod_documento']);
    $sql->bindParam(":Nombre", $datos['nombre']);
    $sql->bindParam(":Tmp_nombre", $datos['tmp_nombre']);
    $sql->bindParam(":Tamaño", $datos['tamaño']);
    $sql->bindParam(":Tipo", $datos['tipo']);
    $sql->bindParam(":Descripcion", $datos['descripcion']);
    $sql->bindParam(":CodP", $datos['cod_proyecto']);

    $sql->execute();
    return $sql;
  }
}
