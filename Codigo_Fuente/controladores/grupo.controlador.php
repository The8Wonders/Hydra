<?php

    require_once("../modelo/grupo.modelo.php");

    $grupo = new grupo_modelo();

    $arraygrupo = $grupo->get_grupo();

    $grupo->eliminar_grupo($_GET['cod']);




    require_once("../vistas/contenidos/grupo.vista.php");







?>