<?php
    require_once "../modelo/proyecto.modelo.php";
  
   
    if(isset($_GET['cod'])){
    
        $id = $_GET['cod'];

        //agregar todos los delete o delete on cascade en la bd
       // $pres=mainModel::ejecutar_consulta_simple("DELETE FROM requerimiento r, proyecto p WHERE r.cod_proyecto=p.cod_proyecto AND cod_proyecto='$id'");
        $res = mainModel::ejecutar_consulta_simple("DELETE FROM proyecto WHERE cod_proyecto='$id'");
        
    }


  header("Location:../vistas/contenidos/proyecto-vistas.php");

?>