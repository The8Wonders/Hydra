<?php
require_once "../core/mainModel.php";

class proyectomodelo extends mainModel
{

  public function nuevo_proyecto_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO proyecto (cod_proyecto, nom_proyecto, fecha_inicio, fecha_fin, fecha_inicio_real, fecha_fin_real, descripcion_proyecto, sigla, tipo_desarrollo, cod_semestre) VALUES (:codP, :nomP, :fechaIn, :fechaTe, :fechaInR, :fechaTeR,:descrip,:sigla,:tipoD,:codS)");
    /* Inserta el nuevo proyecto en la db */
    $sql->bindParam(":codP", $datos['cod_proyecto']);
    $sql->bindParam(":nomP", $datos['nom_proyecto']);
    $sql->bindParam(":fechaIn", $datos['fecha_inicio']);
    $sql->bindParam(":fechaTe", $datos['fecha_fin']);
    $sql->bindParam(":fechaInR", $datos['fecha_inicio_real']);
    $sql->bindParam(":fechaTeR", $datos['fecha_fin_real']);
    $sql->bindParam(":descrip", $datos['descripcion_proyecto']);
    $sql->bindParam(":sigla", $datos['sigla']);
    $sql->bindParam(":tipoD", $datos['tipo_desarrollo']);
    $sql->bindParam(":codS", $datos['cod_semestre']);

    $sql->execute();

    return $sql;
  }

  public function deleteProyecto($id){

    $sql = mainModel::conectar()->prepare("DELETE * FROM proyectos WHERE cod_proyecto='$id'");
    
    $sql->execute();
    return $sql;


  }

  public function update_proyecto_modelo($datos)
  {
    $sql = mainModel::conectar()->prepare("UPDATE proyecto SET 
    nom_proyecto=:nomP,fecha_inicio_real=:fechaInR,fecha_fin_real=:fechaTeR,
    descripcion_proyecto=:descrip, sigla=:ssigla, tipo_desarrollo=:tipoD WHERE cod_proyecto=:codP");

    $sql->bindParam(":codP", $datos['cod_proyecto']);
    $sql->bindParam(":nomP", $datos['nom_proyecto']);
    $sql->bindParam(":fechaInR", $datos['fecha_inicio_real']);
    $sql->bindParam(":fechaTeR", $datos['fecha_fin_real']);
    $sql->bindParam(":descrip", $datos['descripcion_proyecto']);
    $sql->bindParam(":ssigla", $datos['sigla']);
    $sql->bindParam(":tipoD", $datos['tipo_desarrollo']);
    $sql->bindParam(":fechaIn", $datos['fecha_inicio']);
    $sql->bindParam(":fechaTe", $datos['fecha_termino']);
    


    $sql->execute();

    return $sql;
  }  
}
