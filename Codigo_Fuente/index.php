<?php 
    session_start(['name'=>'SGP']); 
    if(isset($_SESSION['rut_sgp'])){
        header("Location:vistas/contenidos/home-vistas.php");
    }else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="vistas/assets/img/logoubb.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vistas/assets/lib/bootstrap/css/bootstrap.css">
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="vistas/assets/css/main.css">
    <title>Sistema Gestion Proyectos</title>
</head>
<body class="login">
    <div class="container-fluid">
        <div class="row">
            <!-- IMAGEN Y TITULO -->
            
            <!-- FIN IMAGEN TITULO -->

            <!-- FORMULARIO LOGIN -->
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="form-signin">
                    <div class="text-center">
                        <img class="logoubb" src="vistas/assets/img/ubb_logo_new.png" alt="Metis Logo">
                    </div>
                    <hr>
                    <div class="tab-content">
                        <div id="login" class="tab-pane active">
                            <!-- L O G I N -->
                            <form action="" method="POST" autocomplete="off" id="formLogin">
                                <p class="text-muted text-center">
                                    Ingrese su Rut y Contraseña 
                                </p>

                                <div class="box1">
                                    <input type="text" placeholder="Rut" class="form-control top" name="rut_usuario" required=""> <!-- nuevo div-->
                                </div>

                                <div class="box1 pb-3">
                                    <input type="password" placeholder="Contraseña" class="form-control bottom" name="contra" required=""> <!-- nuevo div-->
                                </div>

                                <!-- FIN RECUERDAME -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                            </form>
                            <!-- FIN LOGIN -->
                        </div>
                        <div id="forgot" class="tab-pane">
                            <!-- RECUPERAR CONTRASEÃ‘A -->
                            <form action="" id="recuperarClave" method="POST">
                                <p class="text-muted text-center">Ingresa tu Correo</p>
                                <input type="email" placeholder="ejemplo@dominio.com" class="form-control" name="email">
                                <br>
                                <button class="btn btn-lg btn-danger btn-block" type="submit">Recuperar Contraseña</button>
                            </form>
                            <!-- FIN RECUPERAR CONTRASEÃ‘A  -->
                        </div>
                        <div id="signup" class="tab-pane">
                            <!-- REGISTRAR ALUMNO -->
                            <form action="" method="POST" id="formAlumno">
                                <input type="text" placeholder="Rut" name="rut" class="form-control top">
                                <input type="text" placeholder="Nombre" name="nombre" class="form-control middle">
                                <input type="text" placeholder="Apellido" name="apellido" class="form-control middle">
                                <input type="email" placeholder="ejemplo@dominio.com" name="correo" class="form-control middle">
                                <input type="number" placeholder="Telefono" name="telefono" class="form-control middle">
                                <input type="password" placeholder="Contraseña" name="contra" class="form-control middle">
                                <input type="password" placeholder="Repetir Contraseña" name="re-contra" class="form-control bottom">
                                <input type="hidden" name="rol" value="alumno">

                                <button class="btn btn-lg btn-success btn-block" type="submit">Registrar</button>
                            </form>
                            <!-- FIN REGISTRO ALUMNO -->
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <ul class="list-inline">
                            <li><a class="text-muted" href="#login" data-toggle="tab">Iniciar Sesion</a></li>
                            <li><a class="text-muted" href="#forgot" data-toggle="tab">Olvidé Mi Clave</a></li>
                            <li><a class="text-muted" href="#signup" data-toggle="tab">Registrarse</a></li>
                        </ul>
                    </div>
                </div>
            </div>

               <div class="imagenTotal col-sm-6 col-md-7 col-lg-8">
                       <div class="titulo " >
                            <h2>Sistema de Gestion de Proyectos</h2>
                        </div>
    
                        <div class="container-fluid">
                            <img class="img-fluid" src="vistas/assets/img/kanban2.jpg" alt="">
                        </div>
                </div>


        </div>
        <!-- FIN FORMULARIO LOGIN -->
    </div>
    </div>
    <?php require_once "vistas/extras/footer.php"; ?>

    <!--jQuery -->
    <script src="vistas/assets/lib/jquery/jquery.js"></script>
    <script src="vistas/assets/js/formularios.js"></script>
    <script src="vistas/assets/js/recuperarClave.js"></script>

    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "vistas/assets/"
        };
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
    <script src="https://kit.fontawesome.com/12c1eea883.js" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>


    <!--Bootstrap -->
    <script src="vistas/assets/lib/bootstrap/js/bootstrap.js"></script>
    <!-- MetisMenu -->
    <script src="vistas/assets/lib/metismenu/metisMenu.js"></script>
    <!-- onoffcanvas -->
    <script src="vistas/assets/lib/onoffcanvas/onoffcanvas.js"></script>
    <!-- Screenfull -->
    <script src="vistas/assets/lib/screenfull/screenfull.js"></script>

    <script src="vistas/assets/lib/jquery-validation/jquery.validate.js"></script>
    <!-- Metis core scripts -->
    <script src="vistas/assets/js/core.js"></script>
    <!-- Metis demo scripts -->
    <script src="vistas/assets/js/app.js"></script>
    <!-- Sweet Alert scripts -->
    <script src="vistas/assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>


    <style>
        .img-fluid{
            border-radius: 15px;
            max-height: 415px;
        }

        .titulo{
            margin-left: 60px;
        }
    </style>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
</body>
</html>
<?php } ?>