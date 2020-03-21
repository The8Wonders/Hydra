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
                <h5>Requerimientos</h5>
              </header>
              <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead> 
                    <?php require_once "../../core/mainModel.php";
                      $c = new mainModel();
                      $datos = $c->ejecutar_consulta_simple("SELECT * FROM requerimiento")
                    ?>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Complejidad</th>
                      <th>Horas</th>
                      <th>Estado</th>
                      <th>Impacto</th>
                      <th>Prioridad</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($datos as $rows){?>
                    <tr>
                      <td><?php echo $rows['cod_requerimiento']?></td>
                      <td><?php echo $rows['nom_requerimiento']?></td>
                      <td><?php echo $rows['tipo_requerimiento']?></td>
                      <td><?php echo $rows['complejidad']?></td>
                      <td><?php echo $rows['horas_requerimiento']?></td>
                      <td><?php echo $rows['estado']?></td>
                      <td><?php echo $rows['impacto']?></td>
                      <td><?php echo $rows['prioridad']?></td>
                     <?php echo "<td><a href='editAdmin-vistas.php?rut=".$rows['cod_requerimiento']."'><i class='far fa-edit'></i></a></td>" ?>
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