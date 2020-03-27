<?php 
session_start(['name' => 'SGP']);
if($_SESSION['cod_rol_sgp'] != 'alumno'){ ?>
<?php $codSem = $_GET['cod'] ?>
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
  <title>Actualizar Semestre</title>
</head>

<body>
  <?php require_once "../extras/barra.php"; ?>
  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <header>
                <div class="icons"><i class="fa fa-edit"></i></div>
                <h5>Actualizar Semestre</h5>
              </header>
              <div id="collapse2" class="body">
                <?php require_once "../../core/mainModel.php";
                $c = new mainModel();
                $datos = $c->ejecutar_consulta_simple("SELECT * FROM semestre WHERE cod_semestre = '$codSem'");
                $codSem = mainModel::encryption($codSem);
                foreach ($datos as $rows) {
                };
                ?>
                <form class="form-horizontal" action="" method="POST" id="editSemestre">

                  <fieldset>
                    <!--Fecha Inicio Semestre Actualizar-->
                    <div class="form-group">
                      <label for="fecha_inicio-edit" class="control-label col-lg-2">Fecha Inicio</label>

                      <div class="col-lg-4">
                        <input name="fecha_inicio-edit" type="date" id="fecha_inicio-edit" class="form-control" required value="<?php echo $rows['fecha_inicio'] ?>">
                      </div>

                      <!--Fecha fin Semestre Actualizar-->
                      <label for="fecha_fin-edit" class="control-label col-lg-2">Fecha Fin</label>

                      <div class="col-lg-4">
                        <input name="fecha_fin-edit" type="date" id="fecha_fin-edit" class="form-control" required value="<?php echo $rows['fecha_fin'] ?>">
                      </div>
                    </div>

                    <!--Año Semestre Actualizar-->
                    <div class="form-group">
                      <label for="correo-edit" class="control-label col-lg-2">Año</label>
                      <div class="col-lg-4">
                        <input name="correo" type="text" id="correo-edit" class="form-control" readonly value="<?php echo $rows['ano'] ?>">
                      </div>
                    </div>

                    <input name="cod" type="hidden" id="cod" class="form-control" value="<?php echo $codSem ?>">
                    <div class="form-actions">
                      <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/js/editarsemestre.js"></script>
</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>

</html>

<?php }else{
  session_destroy();
  header("location: ../../index.php");
}
?>