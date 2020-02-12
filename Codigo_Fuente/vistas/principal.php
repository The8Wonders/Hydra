<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Form General</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
       
        <?php include "./vistas/extras/css.php" ?>
        
        <script type="text/javascript" src="vistas/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->
    </head>
    <body>
        <!-- #wrap -->
        <div id="wrap">
            <!-- #top -->
            <div id="top">
                <!-- .navbar -->
                <?php include "./vistas/extras/navbar.php" ?>
                <!-- /.navbar -->
            </div>
            <!-- /#top -->

            <!-- BEGIN HEADER.head -->
            <?php include "./vistas/extras/header.php" ?>
            <!-- END HEADER.head -->


            <!-- #left -->
            <div id="left">
                <!-- .user-media -->
                <div class="media user-media hidden-phone">
                    <a href="" class="user-link">
                        <img src="assets/img/user.gif" alt="" class="media-object img-polaroid user-img">
                        <span class="label user-label">16</span>
                    </a>

                    <div class="media-body hidden-tablet">
                        <h5 class="media-heading">Archie</h5>
                        <ul class="unstyled user-info">
                            <li><a href="">Administrator</a></li>
                            <li>Last Access : <br/>
                                <small><i class="icon-calendar"></i> 16 Mar 16:32</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.user-media -->
                <!-- #menu -->
                <?php include "./vistas/extras/menu.php"?>
                <!-- /#menu -->

            </div>
            <!-- /#left -->

            <!-- #content -->

            <!-- /#content -->
            <!-- #push do not remove -->
            <div id="push"></div>
            <!-- /#push -->
        </div>
        <!-- /#wrap -->

        <div class="clearfix"></div>
        <div id="footer">
            <p>2013 © Metis Admin</p>
        </div>


        <!-- #helpModal -->
        <?php include "./vistas/extras/helpmodal.php"?>
        <!-- /#helpModal -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="assets/js/vendor/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>


        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script type="text/javascript" src="assets/js/lib/bootstrap-progressbar.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.mousewheel.js"></script>
        
        <script type="text/javascript" src="assets/js/lib/prettify.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.dualListBox-1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/bootstrap-inputmask.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.autosize-min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.inputlimiter.1.3.1.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.tagsinput.min.js"></script>
        
        <script type="text/javascript" src="assets/chosen/chosen/chosen.jquery.min.js"></script>
        
        <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
        
        <script type="text/javascript" src="assets/js/lib/jquery.validVal-4.3.2.js"></script>
        <script type="text/javascript" src="assets/js/lib/date.js"></script>
        <script type="text/javascript" src="assets/js/lib/daterangepicker.js"></script>
        <script type="text/javascript" src="assets/js/lib/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="assets/js/lib/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/js/lib/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.toggle.buttons.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        
        <script>
            $(function() {
                formGeneral();
            });
        </script>
        
        <script type="text/javascript" src="assets/js/style-switcher.js"></script>
        
    </body>
</html>