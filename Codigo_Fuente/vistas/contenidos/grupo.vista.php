<?php 
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>
<h1></h1>
<?php 
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>

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
                <h5>Equipo</h5>
              </header>
              <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead> 
                  <?php require_once "../../core/mainModel.php";
                      $c = new mainModel();
                      $datos = $c->ejecutar_consulta_simple("SELECT * FROM equipo")
                    ?>
                    <tr>
                      <th>Código Equipo</th>
                      <th>Nombre Equipo</th>
                      <th>Código Semestre</th>
                      <th>Código Proyecto</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($datos as $rows):?>
                    <tr>
                      <td><?php echo $rows['cod_equipo']?></td>
                      <td><?php echo $rows['nombre_equipo']?></td>
                      <td><?php echo $rows['cod_semestre']?></td>
                      <td><?php echo $rows['cod_proyecto']?></td>
                      <td><a href="../../controladores/grupo.controlador.php?cod=<?php echo $rows["cod_equipo"] ?>"><i class="far fa-edit"></i></a></td>
                      <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <?php endforeach;?>
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

</body>
</html>