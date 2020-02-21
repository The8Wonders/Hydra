<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <!--IE Compatibility modes-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Mobile first-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Metis</title>
        
        <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
        <meta name="author" content="">
        
        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage" content="<?php echo RUTA ?>vistas/assets/img/metis-tile.png" />
        
        <?php include "./vistas/extras/estilos.php"; ?>

        <?php include "./vistas/extras/script.php"; ?>


    </head>

    <body>
                        <?php 
                        require_once "./controladores/vistasControlador.php";
                        $vt = new vistasControlador();
                        $vistasR = $vt->obtener_vistas_controlador();

                        if($vistasR == "login"):
                            require_once "./vistas/contenidos/login-vistas.php";
                        else:
                        ?>
                        <!-- include sidebar-->
                        <?php include "./vistas/extras/barra.php";?>
                    
                        <!-- include contenido-->
                        <?php require_once $vistasR; ?>

                        <!-- include footer-->
                        <?php include "./vistas/extras/footer.php"; ?>
                        
                        <?php endif; ?>

               
    </body>

</html>
