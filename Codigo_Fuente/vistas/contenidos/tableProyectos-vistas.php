<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
                <h5>Proyectos</h5>
              </header>
              <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead> 
                    <?php require_once "../../core/mainModel.php";
                      $c = new mainModel();
                      $datos = $c->ejecutar_consulta_simple("SELECT * FROM proyecto")
                    ?>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Fin</th>
                      <th>Sigla</th>
                      <th>Tipo Desarrollo</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($datos as $rows){?>
                    <tr>
                      <td><?php echo $rows['cod_proyecto']?></td>
                      <td><?php echo $rows['nom_proyecto']?></td>
                      <td><?php echo $rows['fecha_inicio']?></td>
                      <td><?php echo $rows['fecha_fin']?></td>
                      <td><?php echo $rows['sigla']?></td>
                      <td><?php echo $rows['tipo_desarrollo']?></td>
                     <?php echo "<td><a href='editAdmin-vistas.php?rut=".$rows['rut']."'><i class='far fa-edit'></i></a></td>" ?>
                      <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <?php }?>
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
<script src="../assets/js/editAdmin.js"></script>
</body>

<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>


</html>