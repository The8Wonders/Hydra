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
                      <td>Editar</td>
                      <td>Eliminar</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($datos as $rows):?>
                    <tr>
                      <td><?php echo $rows['cod_proyecto']?></td>
                      <td><?php echo $rows['nom_proyecto']?></td>
                      <td><?php echo $rows['fecha_inicio']?></td>
                      <td><?php echo $rows['fecha_fin']?></td>
                      <td><?php echo $rows['fecha_inicio_real']?></td>
                      <td><?php echo $rows['fecha_termino_real']?></td>
                      <td><?php echo $rows['descripcion_proyecto']?></td>
                      <td><?php echo $rows['sigla']?></td>
                      <td><?php echo $rows['tipo_desarrollo']?></td>
                      <td><?php echo $rows['cod_semestre']?></td>
                      


                      <td><a href="../../controladores/proyecto.controlador.php?cod=<?php echo $rows["cod_proyecto"] ?>"><i class="far fa-edit"></i></a></td>
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