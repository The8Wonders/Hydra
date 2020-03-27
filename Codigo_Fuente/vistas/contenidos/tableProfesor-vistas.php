<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
  <?php require_once "../extras/estilos.php";?>
  <title>Lista de Profesores</title>
</head>
<body>
<?php require_once "../extras/barra.php";?>
  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
        <!--Begin Datatables-->
        <div class="row">
          <div class="col-lg-12">
            <div class="box">
              <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Profesores</h5>
              </header>
              <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead>
                    <?php require_once "../../core/mainModel.php";
                    $c = new mainModel();
                    $datos = $c->ejecutar_consulta_simple("SELECT * FROM usuario WHERE cod_rol='profesor'")
                    ?>
                    <tr>
                      <th>Rut</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($datos as $rows) { ?>
                      <tr>
                        <td><?php echo $rows['rut'] ?></td>
                        <td><?php echo $rows['nombre'] ?></td>
                        <td><?php echo $rows['apellido'] ?></td>
                        <td><?php echo $rows['correo'] ?></td>
                        <td><?php echo $rows['telefono'] ?></td>
                        <?php echo "<td><a href='editProfesor-vistas.php?rut=" . $rows['rut'] . "'><i class='far fa-edit'></i></a></td>" ?>
                        <?php echo "<td><a href='../../controladores/eliminar.profesor.controlador.php?rut=" . $rows['rut'] . "'><i class='fas fa-times'></i></a></td>" ?>
                        
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
  <?php
    require_once "../extras/footer.php";
    require_once "../extras/script.php"; ?>
</body>
</html>