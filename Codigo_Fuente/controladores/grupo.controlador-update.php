<?php 
    require_once "../modelo/grupo.modelo.php";
    require_once "../core/mainModel";


    $cod_e = $_POST['cod_equi'];
    $nom_e = $_POST['nom_equi'];
    $cod_s = $_POST['cod_sem'];
    $cod_p = $_POST['cod_pro'];

    $consulta = mainModel::ejecutar_consulta_simple("INSERT INTO equipo VALUES '$cod_e','$nom_e','$cod_s','$cod_p'");
        


?>