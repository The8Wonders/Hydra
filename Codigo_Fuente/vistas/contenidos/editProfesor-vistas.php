<?php echo $_GET['rut']?>
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
                <h5>Actualizar Profesor</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="editAdmin">

                  <fieldset>
                    <!--Nombre Profesor Actualizar-->
                    <div class="form-group">
                      <label for="nombre-edit" class="control-label col-lg-2">Nombre</label>

                      <div class="col-lg-4">
                        <input name="nombre-edit" type="text" id="nombre-edit" class="form-control" required value="">
                      </div>

                      <!--Apellido Profesor Actualizar-->
                      <label for="apellido-edit" class="control-label col-lg-2">Apellido</label>

                      <div class="col-lg-4">
                        <input name="apellido-edit" type="text" id="apellido-edit" class="form-control" required>
                      </div>
                    </div>

                    <!--Correo Profesor Actualizar-->
                    <div class="form-group">
                      <label for="correo-edit" class="control-label col-lg-2">Correo</label>

                      <div class="col-lg-4">
                        <input name="correo-edit" type="text" id="correo-edit" class="form-control" required>
                      </div>

                      <!--Telefono Profesor Actualizar-->
                      <label for="telefono-edit" class="control-label col-lg-2">Telefono</label>

                      <div class="col-lg-4">
                        <input name="telefono-edit" type="text" id="telefono-edit" class="form-control" required>
                      </div>
                    </div>

                    <!--Rol Profesor Actualizar-->
                    <div class="form-group">
                      <label for="rol-edit" class="control-label col-lg-2">Rol</label>

                      <div class="col-lg-4">
                        <input name="rol-edit" type="text" id="rol-edit" class="form-control" required>
                      </div>

                      <!--Rut del Profesor-->
                      <label for="rut" class="control-label col-lg-2">Rut</label>

                      <div class="col-lg-4">
                        <input disabled name="rut" type="text" id="rut" class="form-control" required>
                      </div>
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

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>

</html>