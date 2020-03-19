<?php
    require("../../modelo/grupo.modelo.php");
    echo "ola";
    $grupo = new grupo_modelo();
    echo "chao";
    $mostrar= $grupo->getGrupo();
    echo "kj";
    





















    header("Location: ../vistas/contenidos/grupo.vista.php");
    echo "jaja";


?>