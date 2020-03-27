<?php
  require_once "../core/mainModel.php";
  
    
    if(isset($_GET['cod'])){
       
        $id = $_GET['cod'];
        $res = mainModel::ejecutar_consulta_simple("DELETE FROM alumno WHERE rut='$id'");
           
    }


   header("Location:../vistas/contenidos/tableAlumnos-vistas.php");

?>