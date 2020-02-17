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
        <meta name="msapplication-TileImage" content="./vistas/assets/img/metis-tile.png" />
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="./vistas/assets/lib/bootstrap/css/bootstrap.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="./vistas/assets/lib/font-awesome/css/font-awesome.css">
        
        <!-- Metis core stylesheet -->
        <link rel="stylesheet" href="./vistas/assets/css/main.css">
        
        <!-- metisMenu stylesheet -->
        <link rel="stylesheet" href="./vistas/assets/lib/metismenu/metisMenu.css">
        
        <!-- onoffcanvas stylesheet -->
        <link rel="stylesheet" href="./vistas/assets/lib/onoffcanvas/onoffcanvas.css">
        
        <!-- animate.css stylesheet -->
        <link rel="stylesheet" href="./vistas/assets/lib/animate.css/animate.css">

        <!-- Sweet Alert -->
        <link rel="stylesheet" href="./vistas/assets/plugins/SweetAlert/dist/sweetalert2.min.css">

            
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css">
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.theme.min.css">
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css">


        <script>
            less = {
                env: "development",
                relativeUrls: false,
                rootpath: "./vistas/assets/"
            };
        </script>
        <link rel="stylesheet" href="./vistas/assets/css/style-switcher.css">
        <link rel="stylesheet/less" type="text/css" href="./vistas/assets/less/theme.less">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
        <script src="https://kit.fontawesome.com/12c1eea883.js" crossorigin="anonymous"></script>


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

                <!--jQuery -->
                <script src="./vistas/assets/lib/jquery/jquery.js"></script>

                        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>


                <!--Bootstrap -->
                <script src="./vistas/assets/lib/bootstrap/js/bootstrap.js"></script>
                <!-- MetisMenu -->
                <script src="./vistas/assets/lib/metismenu/metisMenu.js"></script>
                <!-- onoffcanvas -->
                <script src="./vistas/assets/lib/onoffcanvas/onoffcanvas.js"></script>
                <!-- Screenfull -->
                <script src="./vistas/assets/lib/screenfull/screenfull.js"></script>

                <script src="./vistas/assets/lib/jquery-validation/jquery.validate.js"></script>


                <!-- Metis core scripts -->
                <script src="./vistas/assets/js/core.js"></script>
                <!-- Metis demo scripts -->
                <script src="./vistas/assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formValidation();
                    });
                </script>


                <script src="./vistas/assets/js/style-switcher.js"></script>
                <!-- Sweet Alert scripts -->
                <script src="./vistas/assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
    </body>

</html>
