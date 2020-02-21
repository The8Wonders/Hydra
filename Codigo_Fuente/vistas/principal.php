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
        <!-- include estilos-->
        <?php include "./vistas/extras/estilos.php"; ?>
        <!-- include script-->
        <?php include "./vistas/extras/script.php"; ?>


    </head>

    <body>
                        <?php 
                        $peticionAjax=false;
                        require_once "./controladores/vistasControlador.php";

                        /*instanciamos la clase vistasControlador */
                        $vt = new vistasControlador();
                        /*llamamos a la clase obtener_vistas_controlador para que nos devuelva el contenido que se debe mostrar*/
                        $Respuesta = $vt->obtener_vistas_controlador();

                        /*si lo que se encuentra en vistasR es igual a login nos enviara a login*/
                        if($Respuesta == "login"):
                            require_once "./vistas/contenidos/login-vistas.php";
                        else:
                        /*si lo que se encuentra en vistasR es distinto de login incluimos los siguientes archivos */
                        ?>
                        <!-- include sidebar-->
                        <?php include "./vistas/extras/barra.php";?>
                    
                        <!-- include contenido-->
                        <?php require_once $Respuesta; ?>
                        
                        <?php endif; ?>

               
    </body>

</html>
