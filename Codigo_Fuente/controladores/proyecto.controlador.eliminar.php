<?php
    require_once "../modelo/proyecto.modelo.php";
  
   
    if(isset($_GET['cod'])){
    
        $id = $_GET['cod'];
        $res = mainModel::ejecutar_consulta_simple("DELETE FROM proyecto WHERE cod_proyecto='$id'");
        
    }


  header("Location:../vistas/contenidos/proyecto-vistas.php");

?>