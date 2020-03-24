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
            <div class="box dark">
              <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Nueva tarea</h5>
              </header>
              <div id="collapse2" class="body">
                <?php require_once "../../core/mainModel.php";
                $c = new mainModel();
                $CodRe = $c->decryption($_GET['cod']);
                $datos = $c->ejecutar_consulta_simple("SELECT * FROM requerimiento WHERE cod_requerimiento = '$CodRe'");
                foreach ($datos as $rows) {
                };
                ?>
                <form class="form-horizontal" action="" method="POST" id="formTarea">

                  <fieldset>
                    <!--Nombre Tarea-->
                    <div class="form-group">
                      <label for="nombre" class="control-label col-lg-2">Nombre</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre" class="form-control" required>
                      </div>

                      <!--Hora tarea-->
                      <label for="hora" class="control-label col-lg-2">Hora Invertida</label>

                      <div class="col-lg-4">
                        <input name="hora" type="text" id="hora" class="form-control" required>
                      </div>
                    </div>

                    <!--Estado Tarea-->
                    <div class="form-group">
                      <label for="estado" class="control-label col-lg-2">Estado Tarea</label>

                      <div class="col-lg-4">
                        <input name="estado" type="text" id="estado" class="form-control" required>
                      </div>
                    </div>

                    <!--Estado Tarea-->
                    <div class="form-group">
                      <label for="nombre_requerimiento" class="control-label col-lg-2">Nombre Requerimiento</label>

                      <div class="col-lg-4">
                        <input readonly name="nombre_requerimiento" type="text" id="nombre_requerimiento" class="form-control" required value="<?php echo $rows['nom_requerimiento'] ?>">
                      </div>

                      <!--Requerimiento-->
                      <label for="codigo_requermiento" class="control-label col-lg-2">Codigo Requerimiento</label>

                      <div class="col-lg-4">
                        <input name="codigo_requermiento" readonly type="text" id="codigo_requermiento" class="form-control" required value="<?php echo $rows['cod_requerimiento'] ?>">
                      </div>
                    </div>
                    <div class="form-actions">
                      <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                  </fieldset>
                </form>
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
  <script src="../assets/js/tarea.js"></script>
</body>

<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>


</html>