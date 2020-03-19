<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>

<body>


  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">


        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <header>
                <div class="icons"><i class="fa fa-edit"></i></div>
                <h5>Nuevo Semestre</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formSemestre">

                  <fieldset>
                    <div class="form-group">
                      <label class="control-label col-lg-2">Fecha Inicio</label>

                      <div class="col-lg-4">
                        <input name="fechaInicio" type="date" class="form-control" required>
                      </div>

                      <label for="fechaFin" class="control-label col-lg-2">Fecha Fin</label>

                      <div class="col-lg-4">
                        <input name="nombre2" type="date" placeholder="Ignacio" class="form-control" required>
                      </div>
                    </div>
              </div>
              <br>
              <div class="form-actions">
                <input type="submit" value="Guardar" class="btn btn-primary">
              </div>
              <br>
              </fieldset>
              </form>

              <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Administradores</h5>
              </header>
              <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead>
                    <?php require_once "../../core/mainModel.php";
                    $c = new mainModel();
                    $datos = $c->ejecutar_consulta_simple("SELECT * FROM semestre")
                    ?>
                    <tr>
                      <th>Cod Semestre</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Fin</th>
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
                        <td><a href="" onclick="edit()"><i class="far fa-edit"></i></a></td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/js/semestre.js"></script>

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>

</html>


<div class="form-actions">
  <input type="submit" value="Guardar" class="btn btn-primary">
</div>