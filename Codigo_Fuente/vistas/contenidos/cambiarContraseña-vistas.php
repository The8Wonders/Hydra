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
  <title>Cambiar Contraseña</title>
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
                <h5>Cambiar Contraseña</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="cambioContra">
                  <fieldset>
                    <!--Rut-->
                    <div class="form-group">
                      <label for="rut" class="control-label col-lg-2">R.U.T</label>

                      <div class="col-lg-4">
                        <input readonly name="rut" type="text" class="form-control" required value="<?php echo $_SESSION['rut_sgp'] ?>">
                      </div>
                    </div>
                    <!--Contraseña Actual-->
                    <div class="form-group">
                      <label for="rut" class="control-label col-lg-2">Contraseña Actual</label>

                      <div class="col-lg-4">
                        <input name="contraActual" type="password" class="form-control" required">
                      </div>
                    </div>

                    <!--Contraseña Nueva-->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Nueva Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="contraNueva" class="form-control" type="password" required />
                      </div>

                      <!-- Repetir contraseña Nueva -->
                      <label class="control-label col-lg-2">Repetir Nueva Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="reContraNueva" class="form-control" type="password" required />
                      </div>
                    </div>
                    <!-- submit -->
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
  <script src="../assets/js/contraseña.js"></script>
  <?php
  require_once "../extras/footer.php";
  require_once "../extras/script.php"; ?>
</body>

</html>