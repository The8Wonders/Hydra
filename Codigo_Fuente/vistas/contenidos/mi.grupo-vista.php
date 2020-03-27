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
  <title>Lista Grupos</title>
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
                <h5>Equipo</h5>
              </header>
              <div id="collapse4" class="body">
              <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                <thead>
                  <?php 
                    require_once("../../core/mainModel.php");
                    $codigo_e = $_GET['cod'];
                    $c = new mainModel();
                    $mostrar = $c->ejecutar_consulta_simple("SELECT  DISTINCT al.rut,al.carrera,al.ano_ingreso,al.cod_semestre,al.cod_equipo FROM alumno al, equipo e WHERE al.cod_equipo='$codigo_e'");
                  ?>
                    <tr>
                      <th>R.U.T</th>
                      <th>Carrera</th>
                      <th>Año ingreso</th>
                      <th>Código Semestre</th>
                      <th>Código Equipo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($mostrar as $rows) :?>
                    <tr>
                      <td><?php echo $rows['rut']?></td>
                      <td><?php echo $rows['carrera']?></td>
                      <td><?php echo $rows['ano_ingreso']?></td>
                      <td><?php echo $rows['cod_semestre']?></td>
                      <td><?php echo $rows['cod_equipo']?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>

                </table>
                <?php 
                 $sql = $c->ejecutar_consulta_simple("SELECT * FROM alumno Where cod_equipo= '$_SESSION[equipo_sgp]'")  
                 ?>
                <?php if($sql->rowCount()==0) { ?>
                <div class="container row">
                    <a class="btn btn-primary" href="formProyecto-vistas.php" role="button">Crear Proyecto</a>
                </div><br><br>
                <?php } ?>
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
<?php 
require_once "../extras/footer.php";
require_once "../extras/script.php";
?>
</body>
</html>