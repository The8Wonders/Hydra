<?php

    include("../modelo/grupo.modelo.php");
   
    
    //$arraygrupo = $grupo->get_grupo();
    //
    if(isset($_GET['cod'])){
        $cod = $_GET['cod'];

        try{
            $consulta =$grupo->eliminar_grupo($cod);
            if($consulta->rowCount()==1){
                    echo "<script>borrado correctamente</script>";
                }else{
                    echo "<script>no borrado</script>";
                }
            
        }catch(Exception $e){
            echo $e->getMessage();
            echo $e->getLine();
        }
        header("Location: ../vistas/contenidos/grupo.vista.php");
    }


    //variables insertar grupo
    if(isset($_POST['cod_equipo']) && isset($_POST['nom_equi']) && ($_POST['cod_sem']) && ($_POST['cod_pro'])){
        $array = [
            "codigo_equipo"=> $_POST['cod_equipo'],
            "nombre_equipo"=> $_POST['nom_equi'],
            "codigo_semestre"=> $_POST['cod_sem'],
            "codigo_proyecto"=> $_POST['cod_pro']    
        ];

        $grupo = new grupo_modelo();
        $grupo->set_grupo($array);

        if($grupo->rowCount()>=1){
            echo "<script>alert('INSERTADO EXITOSAMENTE')</script>";
        }
    }   
    







?>