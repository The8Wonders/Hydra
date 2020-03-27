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
  <title>Nuevo Profesor</title>
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
                <h5>Nuevo Profesor</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="../../controladores/nuevoProfeCorreo.controlador.php" method="POST" id="formProfesor">

                    <div class="form-group">
                      <label class="control-label col-lg-2">Ingrese E-Mail del profesor</label>

                      <div class=" col-lg-6">
                        <input name="correo" class="validate[required,custom[email]] form-control" type="text" placeholder="Ejemplo@gmail.com" id="correo" required >
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
  <?php
    require_once "../extras/footer.php";
    require_once "../extras/script.php";?>
</body>
</html>