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
  <title>Nuevo Semestre</title>
</head>
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
                    <!--Fecha Inicio-->
                    <div class="form-group">
                      <label for="fechaInicio" class="control-label col-lg-2">Fecha de Inicio</label>

                      <div class="col-lg-4">
                        <input name="fechaInicio" type="date" id="fechaInicio" class="form-control" required>
                      </div>
                      <!--Fecha Termino-->
                      <label for="fechaFin" class="control-label col-lg-2">Fecha de Termino</label>

                      <div class="col-lg-4">
                        <input name="fechaFin" type="date" id="fechaFin" class="form-control" required>
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

<?php }else{
  session_destroy();
  header("location: ../../index.php");
}
?>