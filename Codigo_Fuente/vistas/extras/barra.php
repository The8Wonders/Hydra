<?php //include "estilos.php";
session_start(['name' => 'SGP']);
?>

<body class="  ">
  <div class="bg-dark dk" id="wrap">
    <div id="top">
      <!-- .navbar -->
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">


          <!-- Brand and toggle get grouped for better mobile display -->
          <header class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="../contenidos/home-vistas.php" class="navbar-brand"><img src="../assets/img/ubb_logo_new.png" height="42" width="121" alt=""></a>

          </header>



          <div class="topnav">
            <!-- P A N T A L L A      C O M P L E T A  -->
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Pantalla Completa" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                <i class="glyphicon glyphicon-fullscreen"></i>
              </a>
            </div>
            <!-- F I N      P A N T A L L A   C O M P L E T A  -->

            <div class="btn-group">
              <!--  C O R R E O  -->
              <a data-placement="bottom" data-original-title="Notificaciones" data-toggle="tooltip" class="btn btn-default btn-sm">
                <i class="fa fa-envelope"></i>
                <span class="label label-warning">5</span>
              </a>
              <!-- F I N    C O R R E O  -->

              <!--  M E N S A J E S  -->
              <a data-placement="bottom" data-original-title="Mensajes" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                <i class="fa fa-comments"></i>
                <span class="label label-danger">4</span>
              </a>
              <!--  F I N   M E N S A J E S  -->

              <!-- A Y U D A  -->
              <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                <i class="fa fa-question"></i>
              </a>
              <!-- F I N  A Y U D A  -->
            </div>

            <!--  C E R R A R    S E S I O N  -->
            <div class="btn-group">
              <a href="../../modelo/cerrar_sesion.php" data-toggle="tooltip" data-original-title="Cerrar Sesión" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                <i class="fa fa-power-off"></i>
              </a>
            </div>
            <!-- F I N  C E R R A R    S E S I O N  -->
            <div class="btn-group">
              <!--    -->
              <a data-placement="bottom" data-original-title="Ver / Ocultar / Acoplar" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                <i class="fa fa-bars"></i>
              </a>
              <!--  F I N   V E R / O C U L T A R  -->

              <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                <span class="fa fa-fw fa-comment"></span>
              </a>
            </div>

          </div>




          <div class="collapse navbar-collapse navbar-ex1-collapse">

            <!-- .nav -->
            <ul class="nav navbar-nav">
              <li><a href="../contenidos/home-vistas.php">Inicio</a></li>
              <li class='dropdown '>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Listados <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : ?>
                    <li><a href="../contenidos/tableAdmin-vistas.php">Administrador</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : ?>
                    <li><a href="../contenidos/tableProfesor-vistas.php">Profesor</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                    <li><a href="../contenidos/tableAlumnos-vistas.php">Alumno</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : ?>
                    <li><a href="../contenidos/proyecto-vistas.php">Proyectos</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : ?>
                    <li><a href="../contenidos/tableGrupo-vistas.php">Grupos</a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <li class='dropdown '>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Nuevo <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : ?>
                    <li><a href="../contenidos/formAdmin-vistas.php">Administrador</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'profesor' || $_SESSION['cod_rol_sgp'] == 'administrador') : ?>
                    <li><a href="../contenidos/formProfesor-vistas.php">Profesor</a></li>
                  <?php endif; ?>
                </ul>
              </li>
            </ul>
            <!-- /.nav -->
          </div>
        </div>
        <!-- /.container-fluid -->
      </nav>
      <!-- /.navbar -->
      <header class="head">
        <!-- B A R R A    D E   B U S Q U E D A -->
        <div class="search-bar">
          <form class="main-search" action="">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar  ...">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-sm text-muted" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </div>
        <!-- F I N   B A R R A    D E   B U S Q U E D A -->
        <!-- /.main-search -->
        <!-- /.search-bar -->
        <!-- B A R R A    D E   M A I N -->
        <div class="main-bar">
          <h3><i class="fa fa-home"></i>&nbsp;Sistema De Gestión De Proyectos</h3>
        </div>
        <!-- F I N    B A R R A    D E   M A I N -->
        <!-- /.main-bar -->
      </header>
      <!-- /.head -->
    </div>
    <!-- /#top -->
    <div id="left">
      <!-- U S U A R I O  -->
      <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
          <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
          <a class="user-link" href="../contenidos/perfil-vistas.php">
            <img class="media-object img-thumbnail user-img" alt="User Picture" src="../assets/img/user.gif">
            <span class="label label-danger user-label">16</span>
          </a>

          <div class="media-body">
            <h5 class="media-heading"><?php echo $_SESSION['rut_sgp'] ?></h5>
            <h5 class="media-heading"><?php echo $_SESSION['nombre_sgp'] ?><?php echo " "; ?><?php echo $_SESSION['apellido_sgp'] ?></h5>
            <ul class="list-unstyled user-info">
              <li><a href=""><?php echo $_SESSION['cod_rol_sgp'] ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- #menu -->
      <ul id="menu" class="bg-blue dker">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <li class="">
          <a href="../contenidos/dashboard-vistas.php">
            <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="../contenidos/formSemestre-vistas.php">
            <i class="fa fa-address-book"></i><span class="link-title">&nbsp;Semestre</span>
          </a>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-building "></i>
            <span class="link-title">Layouts</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="../contenidos/boxed-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a>
            </li>
            <li>
              <a href="../contenidos/fixed-header-boxed-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a>
            </li>
            <li>
              <a href="fixed-header-fixed-mini-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a>
            </li>
            <li>
              <a href="fixed-header-menu.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a>
            </li>
            <li>
              <a href="fixed-header-mini-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a>
            </li>
            <li>
              <a href="fixed-header.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a>
            </li>
            <li>
              <a href="fixed-menu-boxed.html">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a>
            </li>
            <li>
              <a href="fixed-menu.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a>
            </li>
            <li>
              <a href="fixed-mini-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a>
            </li>
            <li>
              <a href="fxhmoxed.html">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a>
            </li>
            <li>
              <a href="no-header-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a>
            </li>
            <li>
              <a href="no-header.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Header </a>
            </li>
            <li>
              <a href="no-left-right-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a>
            </li>
            <li>
              <a href="no-left-sidebar-main-search.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a>
            </li>
            <li>
              <a href="no-left-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a>
            </li>
            <li>
              <a href="no-main-search.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Main Search </a>
            </li>
            <li>
              <a href="no-right-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a>
            </li>
            <li>
              <a href="sm.html">
                <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span class="link-title">Components</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="../contenidos/bgcolor-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
            </li>
            <li>
              <a href="../contenidos/bgimage-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
            </li>
            <li>
              <a href="../contenidos/button-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
            </li>
            <li>
              <a href="../contenidos/icon-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
            </li>
            <li>
              <a href="pricing.html">
                <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
            </li>
            <li>
              <a href="../contenidos/progress-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-pencil"></i>
            <span class="link-title">
              Forms
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="../contenidos/formGeneral-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Form General </a>
            </li>
            <li>
              <a href="../contenidos/formValidation-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Form Validation </a>
            </li>
            <li>
              <a href="../contenidos/formWizard-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a>
            </li>
            <li>
              <a href="../contenidos/formWysiwyg-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../contenidos/table-vistas.php">
            <i class="fa fa-table"></i>
            <span class="link-title">Tables</span>
          </a>
        </li>
        <li>
          <a href="../contenidos/typography-vistas.php">
            <i class="fa fa-font"></i>
            <span class="link-title">
              Typography
            </span> </a>
        </li>
        <li>
          <a href="maps.html">
            <i class="fa fa-map-marker"></i><span class="link-title">
              Maps
            </span>
          </a>
        </li>
        <li>
          <a href="../contenidos/chart-vistas.php">
            <i class="fa fa fa-bar-chart-o"></i>
            <span class="link-title">
              Charts
            </span>
          </a>
        </li>
        <li>
          <a href="../contenidos/calendar-vistas.php">
            <i class="fa fa-calendar"></i>
            <span class="link-title">
              Calendar
            </span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-exclamation-triangle"></i>
            <span class="link-title">
              Error Pages
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="403.html">
                <i class="fa fa-angle-right"></i>&nbsp;403</a>
            </li>
            <li>
              <a href="../contenidos/error-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp;error</a>
            </li>
            <li>
              <a href="405.html">
                <i class="fa fa-angle-right"></i>&nbsp;405</a>
            </li>
            <li>
              <a href="500.html">
                <i class="fa fa-angle-right"></i>&nbsp;500</a>
            </li>
            <li>
              <a href="503.html">
                <i class="fa fa-angle-right"></i>&nbsp;503</a>
            </li>
            <li>
              <a href="../contenidos/offline-vistas.php">
                <i class="fa fa-angle-right"></i>&nbsp;offline</a>
            </li>
            <li>
              <a href="countdown.html">
                <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../contenidos/grid-vistas.php">
            <i class="fa fa-columns"></i>
            <span class="link-title">
              Grid
            </span>
          </a>
        </li>
        <li>
          <a href="blank.html">
            <i class="fa fa-square-o"></i>
            <span class="link-title">
              Blank Page
            </span>
          </a>
        </li>
        <li class="nav-divider"></li>
        <li>
          <a href="../../modelo/cerrar_sesion.php">
            <i class="fa fa-sign-in"></i>
            <span class="link-title">
              Cerrar Sesión
            </span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-code"></i>
            <span class="link-title">
              Unlimited Level Menu
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="javascript:;">Level 1 <span class="fa arrow"></span> </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a> </li>
                <li> <a href="javascript:;">Level 2</a> </li>
                <li>
                  <a href="javascript:;">Level 2 <span class="fa arrow"></span> </a>
                  <ul class="collapse">
                    <li> <a href="javascript:;">Level 3</a> </li>
                    <li> <a href="javascript:;">Level 3</a> </li>
                    <li>
                      <a href="javascript:;">Level 3 <span class="fa arrow"></span> </a>
                      <ul class="collapse">
                        <li> <a href="javascript:;">Level 4</a> </li>
                        <li> <a href="javascript:;">Level 4</a> </li>
                        <li>
                          <a href="javascript:;">Level 4 <span class="fa arrow"></span> </a>
                          <ul class="collapse">
                            <li> <a href="javascript:;">Level 5</a> </li>
                            <li> <a href="javascript:;">Level 5</a> </li>
                            <li> <a href="javascript:;">Level 5</a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li> <a href="javascript:;">Level 4</a> </li>
                  </ul>
                </li>
                <li> <a href="javascript:;">Level 2</a> </li>
              </ul>
            </li>
            <li> <a href="javascript:;">Level 1</a> </li>
            <li>
              <a href="javascript:;">Level 1 <span class="fa arrow"></span> </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a> </li>
                <li> <a href="javascript:;">Level 2</a> </li>
                <li> <a href="javascript:;">Level 2</a> </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /#menu -->
    </div>
    <?php //include "script.php" 
    ?>