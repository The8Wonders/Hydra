<?php
    require_once "../core/mainModel.php";

 class proyecto_modelo extends mainModel{




  public function nuevo_proyecto($datos)
  {
    $sql = mainModel::conectar()->prepare("INSERT INTO proyecto VALUES (:codP, :nomP, :fechaIn, :fechaTe, :fechaInR, :fechaTeR,:descrip,:sigla,:tipoD,:codS)");

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


  protected function get_proyecto(){

    $clase = new mainModel(){}
      
      $consulta="SELECT * FROM proyecto";

      $sql =mainModel::ejecutar_consulta_simple($consulta);

      return $sql;
    }

    


    



 }