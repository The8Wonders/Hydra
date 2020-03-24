<?php
  require_once "../core/mainModel.php";
    echo "hola";
    
    if(isset($_GET['cod'])){
        echo"hola2";
        $id = $_GET['cod'];
        $res = mainModel::ejecutar_consulta_simple("DELETE FROM usuario WHERE rut='$id'");
            echo"chao";
    }


   //header("Location:../vistas/contenidos/tableGrupo-vistas.php");

?>