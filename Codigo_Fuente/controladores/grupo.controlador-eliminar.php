<?php
    require_once "../modelo/grupo.modelo.php";
    echo "hola";
    
    if(isset($_GET['cod']) && isset($_GET['cod2']) ){
        $cod_e = $_GET['cod'];
        $cod_p = $_GET['cod2'];
        $res2 = mainModel::ejecutar_consulta_simple("DELETE FROM proyecto WHERE cod_proyecto='$cod_p'");
        $res = mainModel::ejecutar_consulta_simple("DELETE FROM equipo WHERE cod_equipo='$cod_e'");
    }


   header("Location:../vistas/contenidos/tableGrupo-vistas.php");

?>