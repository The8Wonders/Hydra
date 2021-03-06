<?php //include "estilos.php";

if($_SESSION['cod_rol_sgp']=='alumno'){

  $rut = $_SESSION['rut_sgp'];
                include "../../core/mainModel.php";
                $c = new mainModel();
                $sql = $c->ejecutar_consulta_simple("SELECT *  FROM usuario u, alumno a, 
                  equipo e, proyecto p WHERE u.rut=a.rut AND a.cod_equipo= e.cod_equipo AND e.cod_proyecto=p.cod_proyecto AND u.rut='$rut'");
                if($sql->rowCount()>1){
                  $cantidad=1;
                }else{
                  $cantidad=0;
                }

}


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
                  <li><a href="../contenidos/tableGrupo-vistas.php">Grupos</a></li>
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
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador'):?>
                  <li><a href="../contenidos/formAdmin-vistas.php">Administrador</a></li>
                  <?php endif;?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador'):?>
                  <li><a href="../contenidos/nuevoProfesor-vistas.php">Profesor</a></li>
                  <?php endif;?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                  <li><a href="../contenidos/formSemestre-vistas.php">Semestre</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                  <li><a href="../contenidos/formGrupo-vistas.php">Grupo</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['cod_rol_sgp'] == 'administrador' || $_SESSION['cod_rol_sgp'] == 'profesor') : ?>
                  <li><a href="../contenidos/formProyecto-vistas.php">Proyecto</a></li>
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
          <img class="media-object img-thumbnail user-img" alt="User Picture" src="../assets/img/escudo.png" height="64" widht="64">
          <!--<span class="label label-danger user-label">16</span>-->
        </a>

        <div class="media-body">
          <h5 class="media-heading">R.U.T: <?php echo $_SESSION['rut_sgp'] ?></h5>
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
            <a href="../contenidos/nuevoProfesor-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Enviar Formulario Profesor </a>
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
          <!--<li>
            <a href="../contenidos/formAlumno-vistas.php">
              <i class="fa fa-angle-right"></i>&nbsp; Nuevo Alumno </a>
          </li>-->
          <li>
            <a href="../contenidos/tableAlumnos-vistas.php">
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
            <a href="../contenidos/mi.grupo-vista.php?code=<?php echo $_SESSION['equipo_sgp'] ?>">
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
           <?php if($_SESSION['cod_rol_sgp'] == 'alumno' && $_SESSION['equipo_sgp']==NULL) :?> 
            
                  <a href="../contenidos/formProyecto-vistas.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Nuevo Proyecto </a> 
              
            <?php endif ?>
            <?php if($_SESSION['equipo_sgp']!=""): ?>
              <a href="../contenidos/formProyecto-update.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Mi Proyecto </a> 
            <?php endif; ?>
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