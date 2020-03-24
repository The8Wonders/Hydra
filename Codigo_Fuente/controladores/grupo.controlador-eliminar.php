<?php
    require_once "../modelo/grupo.modelo.php";
    echo "hola";
    
    if(isset($_GET['cod'])){
        $id = $_GET['cod'];
        $res = mainModel::ejecutar_consulta_simple("DELETE FROM equipo WHERE cod_equipo='$id'");

    }


   header("Location:../vistas/contenidos/tableGrupo-vistas.php");

?>