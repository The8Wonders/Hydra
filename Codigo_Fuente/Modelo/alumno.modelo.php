<?php 
  require_once "../core/mainModel.php";

  class alumnomodelo extends mainModel{

    protected function nuevo_alumno_modelo($dato){
      $sql = mainModel::conectar()->prepare("INSERT INTO alumno (rut) VALUES (:Rut)");

      $sql->bindParam(":Rut",$dato);

      $sql->execute();
      return $sql;
    }

    protected function actualizar_alumno_modelo($dato){ // admin actualiza perfil alumno
      $sql= mainModel::conectar()->prepare("UPDATE alumno SET 
      carrera=:Carrera, cargo=:Cargo, ano_ingreso=:Ano_ingreo, registro_exitoso=:Registro_exitoso, fecha_registro=:Fecha_registro, cod_semestre=:Cod_semestre, cod_equipo=:Cod_equipo WHERE rut=:Rut");

      $sql->bindParam(":Rut",$dato['rut']);
      $sql->bindParam(":Carrera",$dato['carrera']);
      $sql->bindParam(":Cargo",$dato['cargo']);
      $sql->bindParam(":Ano_ingreso",$dato['ano_ingreso']);
      $sql->bindParam(":Registro_exitoso",$dato['registro_exitoso']);
      $sql->bindParam(":Fecha_registro",$dato['fecha_registro']);
      $sql->bindParam(":Cod_semestre",$dato['cod_semestre']);
      $sql->bindParam(":Cod_equipo",$dato['cod_equipo']);

      $sql->execute();

      return $sql;
    }


  }