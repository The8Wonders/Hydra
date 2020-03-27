<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>
<h1></h1>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema de gestion de proyectos">
  <meta name="keywords" content="Gestión, Proyectos">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb2.png">
  <?php require_once "../extras/estilos.php";
  require_once "../extras/barra.php" ?>
  <title>Lista de Proyectos</title>
</head>

<body>

  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
        <!--Begin Datatables-->
        <div class="row">
          <div class="col-lg-12">
            <div class="box">
              <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Lista de Proyecto</h5>
              </header>
              <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead>
                    <?php require_once "../../core/mainModel.php";
                    $c = new mainModel();
                    $datos = $c->ejecutar_consulta_simple("SELECT * FROM proyecto")
                    ?>
                    <tr>
                      <th>Codigo Proyecto</th>
                      <th>Nombre Proyecto</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Termino</th>
                      <th>Fecha Inicio Real</th>
                      <th>Fecha Termino Real</th>
                      <th>Descripcion</th>
                      <th>Sigla</th>
                      <th>Tipo Desarrollo</th>
                      <th>Codigo Semestre</th>
                      
                      <!--<td>Editar</td>-->
<?php if($_SESSION['cod_rol_sgp']=='profesor'||$_SESSION['cod_rol_sgp']=='administrador' ) {?> <td>Eliminar</td><?php };?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($datos as $rows) : ?>
                      <tr>
                        <td><?php echo $rows['cod_proyecto'] ?></td>
                        <td><a href="#"><?php echo $rows['nom_proyecto']?></a></td>
                        <td><?php echo $rows['fecha_inicio'] ?></td>
                        <td><?php echo $rows['fecha_fin'] ?></td>
                        <td><?php echo $rows['fecha_inicio_real'] ?></td>
                        <td><?php echo $rows['fecha_fin_real'] ?></td>
                        <td><?php echo $rows['descripcion_proyecto'] ?></td>
                        <td><?php echo $rows['sigla'] ?></td>
                        <td><?php echo $rows['tipo_desarrollo'] ?></td>
                        <td><?php echo $rows['cod_semestre'] ?></td>
                       
                        <?php if($_SESSION['cod_rol_sgp']=='profesor'||$_SESSION['cod_rol_sgp']=='administrador' ) {?> <td><a href="../../controladores/proyecto.controlador.eliminar.php?cod=<?php echo $rows["cod_proyecto"] ?>"><i class="fas fa-times"></i></a></td><?php };?>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!--End Datatables-->
      </div>
      <!-- /.inner -->
    </div>
    <!-- /.outer -->
  </div>
  </div>



</body>

</html>

<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>