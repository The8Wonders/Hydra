<?php //include "estilos.php";
session_start(['name' => 'SGP']);
if($_SESSION['rut_sgp'] != ''){ ?>
  
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
            <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
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
                  <li><a href="../contenidos/tableGrupo-vistas">Grupos</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
            <li class='dropdown '>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Nuevo <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="../contenidos/formAdmin-vistas.php">Administrador</a></li>
                  <li><a href="../contenidos/formProfesor-vistas.php">Profesor</a></li>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                  <li><a href="../contenidos/formProfesor-vistas.php">Alumno</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                  <li><a href="../contenidos/formProfesor-vistas.php">Semestre</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                  <li><a href="../contenidos/formProfesor-vistas.php">Grupo</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                  <li><a href="../contenidos/formProfesor-vistas.php">Proyecto</a></li>
                  <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
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
            <li>Rol: <a ><?php echo $_SESSION['cod_rol_sgp'] ?></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- #menu -->
    <ul id="menu" class="bg-blue dker">
      <li class="nav-header">Menu</li>
      <li class="nav-divider"></li>
      <li class="">
        <a href="../contenidos/perfil-vistas.php">
          <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Mi Perfil</span>
        </a>
      </li>
      <li class="">
        <a href="../contenidos/cambiarContraseña-vistas.php">
          <i class="fa fa-key"></i><span class="link-title">&nbsp;Cambiar Contraseña</span>
        </a>
      </li>
      <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : ?>
      <li class="">
        <a href="javascript:;">
          <i class="far fa-id-badge"></i>
          <span class="link-title">Administradores</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formAdmin-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Administrador </a>
          </li>
          <li>
            <a href="../contenidos/tableAdmin-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Administrador </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>
      <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : ?>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-user-graduate "></i>
          <span class="link-title">Profesores</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formProfesor-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Profesor </a>
          </li>
          <li>
            <a href="../contenidos/tableProfesor-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Profesor </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>
      <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-child "></i>
          <span class="link-title">Alumnos</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formAlumno-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Alumno </a>
          </li>
          <li>
            <a href="../contenidos/tableAlumno-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Alumnos </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>
      <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-book-reader "></i>
          <span class="link-title">Semestre</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formSemestre-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Semestre </a>
          </li>
          <li>
            <a href="../contenidos/tableSemestre-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Semestres </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>
      <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor' || ($_SESSION['cod_rol_sgp'] == 'alumno' )) : ?>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-people-carry "></i>
          <span class="link-title">Grupo</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
        <?php if($_SESSION['equipo_sgp'] != '' ) : ?>
          <li>
            <a href="../contenidos/mi.grupo-vista.php">
              <i class="fa fa-angle-right"></i>&nbsp; Mi Grupo </a>
          </li>
          <?php endif; ?>
          <?php if($_SESSION['equipo_sgp'] == '') : ?>
          <li>
            <a href="../contenidos/formGrupo-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Grupo </a>
          </li>
          <?php endif; ?>

          <li>
            <a href="../contenidos/tableGrupo-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Grupo </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-desktop "></i>
          <span class="link-title">Proyectos</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formProyecto-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Proyecto </a>
          </li>
          <li>
            <a href="../contenidos/proyecto-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Proyecto </a>
          </li>
        </ul>
      </li>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-cogs "></i>
          <span class="link-title">Requerimientos</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formRequerimiento-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Requerimiento </a>
          </li>
          <li>
            <a href="../contenidos/tableRequerimiento-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Requerimientos </a>
          </li>
        </ul>
      </li>
      <li class="">
        <a href="javascript:;">
          <i class="far fa-folder-open "></i>
          <span class="link-title">Documento</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formSemestre-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Documento </a>
          </li>
          <li>
            <a href="../contenidos/tableSemestre-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Documentos </a>
          </li>
        </ul>
      </li>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-file-signature "></i>
          <span class="link-title">Tarea</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formTarea-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nueva Tarea </a>
          </li>
          <li>
            <a href="../contenidos/tableTarea-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Tareas </a>
          </li>
        </ul>
      </li>
      <li class="">
        <a href="javascript:;">
          <i class="fas fa-robot "></i>
          <span class="link-title">Tecnologia</span>
          <span class="fa arrow"></span>
        </a>
        <ul class="collapse">
          <li>
            <a href="../contenidos/formTecnologia-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nueva Tecnologia </a>
          </li>
          <li>
            <a href="../contenidos/tableTecnologia-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Listado Tecnologias </a>
          </li>
        </ul>
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
      <li class="nav-divider"></li>
      <li>
        <a href="../../modelo/cerrar_sesion.php">
          <i class="fa fa-sign-in"></i>
          <span class="link-title">
            Cerrar Sesión
          </span>
        </a>
      </li>
    </ul>
    <!-- /#menu -->
  </div>
<?php }else{
  session_destroy();
  header("location: ../../index.php");
}
?>