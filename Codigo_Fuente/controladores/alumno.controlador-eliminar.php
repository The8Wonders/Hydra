<?php
  require_once "../core/mainModel.php";
  
    
    if(isset($_GET['cod'])){
       
        $id = $_GET['cod'];
        $res = mainModel::ejecutar_consulta_simple("DELETE FROM alumno WHERE rut='$id'");
        if($res->rowCount()>=1){
          $res2 = mainModel::eliminar_cuenta($id);

          if($res2->rowCount()>=1){
            header("Location:../vistas/contenidos/tableAlumnos-vistas.php");
          }else{
            $res3 = mainModel::ejecutar_consulta_simple("INSERT INTO alumno (rut) VALUES rut='$id'");
          }
        }
    }


   

?>