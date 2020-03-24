<?php

    require_once "../core/mainModel.php";

    class semestremodelo extends mainModel {
      public function nuevo_semestre_modelo($datos){
        $sql=mainModel::conectar()->prepare("INSERT INTO semestre (cod_semestre, fecha_inicio, fecha_fin, ano) VALUES (:Cod, :FechaI, :FechaF, :Ano)");

        $sql->bindParam(":Cod", $datos['cod_semestre']);
        $sql->bindParam(":FechaI", $datos['fecha_inicio']);
        $sql->bindParam(":FechaF", $datos['fecha_fin']);
        $sql->bindParam(":Ano", $datos['año']);

        $sql->execute();
        return $sql;
      }

      public function actualizar_semestre_modelo($datos){
        $sql = mainModel::conectar()->prepare("UPDATE semestre SET fecha_inicio=:Fecha_inicio, fecha_fin=:Fecha_fin WHERE cod_semestre=:Cod");
        
        $sql->bindParam(":Cod", $datos['cod_semestre']);
        $sql->bindParam(":Cod", $datos['fecha_inicio']);
        $sql->bindParam(":Cod", $datos['fecha_fin']);

        $sql->execute();
        return $sql;
      }
    }