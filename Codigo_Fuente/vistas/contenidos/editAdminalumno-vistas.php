<?php $rutPr = $_GET['rut'] ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
  <?php require_once "../extras/estilos.php";?>
  <title>Actualizar Alumno</title>
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
                <h5>Actualizar Alumno</h5>
              </header>
              <div id="collapse2" class="body">
                <?php require_once "../../core/mainModel.php";
                $c = new mainModel();
                $datos = $c->ejecutar_consulta_simple("SELECT * FROM usuario WHERE cod_rol = 'alumno' AND rut = '$rutPr'");
                
                foreach ($datos as $rows) {
                };
                ?>
                <form class="form-horizontal" action="" method="POST" id="editAlumno">

                  <fieldset>
                    <!--Nombre alumno Actualizar-->
                    <div class="form-group">
                      <label for="nombre-edit" class="control-label col-lg-2">Nombres</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre-edit" class="form-control" required value="<?php echo $rows['nombre'] ?>">
                      </div>

                      <!--Apellido alumno Actualizar-->
                      <label for="apellido-edit" class="control-label col-lg-2">Apellidos</label>

                      <div class="col-lg-4">
                        <input name="apellido" type="text" id="apellido-edit" class="form-control" required value="<?php echo $rows['apellido'] ?>">
                      </div>
                    </div>

                    <!--Correo alumno Actualizar-->
                    <div class="form-group">
                      <label for="correo-edit" class="control-label col-lg-2">Correo</label>

                      <div class="col-lg-4">
                        <input name="correo" type="text" id="correo-edit" class="form-control" required value="<?php echo $rows['correo'] ?>">
                      </div>

                      <!--Telefono alumno Actualizar-->
                      <label for="telefono-edit" class="control-label col-lg-2">Telefono</label>

                      <div class="col-lg-4">
                        <input name="telefono" type="text" id="telefono-edit" class="form-control" required value="<?php echo $rows['telefono'] ?>">
                      </div>
                    </div>

                













                      <input name="rut" type="hidden" id="edicion" class="form-control" value="<?php echo $rutPr ?>">

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
  <script src="../assets/js/editaralumno.js"></script>
</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>

</html>