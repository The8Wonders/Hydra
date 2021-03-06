<?php 
session_start(['name' => 'SGP']);
if($_SESSION['cod_rol_sgp'] != 'alumno'){ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema de gestion de proyectos">
  <meta name="keywords" content="Gestión, Proyectos">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
  <?php require_once "../extras/estilos.php";
  require_once "../extras/barra.php" ?>
  <title>Lista Semestre</title>
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
                <h5>Semestres</h5>
              </header>
              <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead>
                    <?php require_once "../../core/mainModel.php";
                    $c = new mainModel();
                    $datos = $c->ejecutar_consulta_simple("SELECT * FROM semestre");
                    ?>
                    <tr>
                      <th>Codigo</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Fin</th>
                      <th>Año</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($datos as $rows) { ?>
                      <tr>
                        <td><?php echo $rows['cod_semestre'] ?></td>
                        <td><?php echo $rows['fecha_inicio'] ?></td>
                        <td><?php echo $rows['fecha_fin'] ?></td>
                        <td><?php echo $rows['ano'] ?></td>
                        <?php echo "<td><a href='editSemestre-vistas.php?cod=". $rows['cod_semestre'] ."'><i class='far fa-edit'></i></a></td>" ?>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                      </tr>
                    <?php } ?>
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
  <script src="../assets/js/proyecto.js"></script>

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>

<?php }else{
  session_destroy();
  header("location: ../../index.php");
}
?>