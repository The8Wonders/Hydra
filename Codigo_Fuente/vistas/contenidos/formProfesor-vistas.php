<?php 
session_start(['name' => 'SGP']);
if($_SESSION['cod_rol_sgp'] == 'administrador'){ ?>
<?php 
session_start(['name' => 'SGP']);
if($_SESSION['cod_rol_sgp'] == 'administrador'){ ?>
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
                <form class="form-horizontal" action="" method="POST" id="formProfesor">

                  <fieldset>
                    <!--Nombres Profesor-->
                    <div class="form-group">
                      <label for="nombre1" class="control-label col-lg-2">Primer Nombre</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre" placeholder="Matias" class="validate[required] form-control" required>
                      </div>

                      <label for="nombre2" class="control-label col-lg-2">Segundo Nombre</label>

                      <div class="col-lg-4">
                        <input name="nombre2" type="text" id="nombre2" placeholder="Ignacio" class="validate[required] form-control" required>
                      </div>
                    </div>

                    <!--Apellidos Profesor-->
                    <div class="form-group">
                      <label for="apellido1" class="control-label col-lg-2">Apellido Paterno</label>

                      <div class="col-lg-4">
                        <input name="apellido" type="text" id="apellido" placeholder="Castro" class="validate[required] form-control" required>
                      </div>

                      <label for="apellido2" class="control-label col-lg-2">Apellido Materno</label>

                      <div class="col-lg-4">
                        <input name="apellido2" type="text" id="apellido2" placeholder="Pulgar" class="validate[required] form-control" required>
                      </div>
                    </div>

                    <!--Rut Profesor-->
                    <div class="form-group">
                      <label for="rut" class="control-label col-lg-2">R.U.T</label>

                      <div class="col-lg-4">
                        <input name="rut" type="text" id="rut" name="rut" placeholder="11.111.111-k" class="validate[required] form-control" required>
                      </div>
                    </div>

                    <!--Contraseña Profesor-->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="contra" class="validate[required] form-control" type="password" id="contra" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2">Repetir Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="re-contra" class="validate[required,equals[pass1]] form-control" type="password" id="re-contra" required />
                      </div>
                    </div>

                    <!--E-Mail Profesor-->
                    <div class="form-group">
                      <label class="control-label col-lg-2">E-Mail</label>

                      <div class=" col-lg-6">
                        <input name="correo" class="validate[required,custom[email]] form-control" type="text" placeholder="Ejemplo@gmail.com" id="correo" required />
                      </div>
                    </div>

                    <!--Telefono Profesor-->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Telefono Celular</label>

                      <div class="col-lg-1">
                        <input type="text" value="+56" readonly class="form-control">
                      </div>

                      <div class=" col-lg-3">
                        <input name="telefono" class="validate[required,custom[number]] form-control" type="number" min="920000000" pattern="^[0-9]+" id="telefono" maxlength="9" required />
                      </div>
                    </div>
                    <input type="hidden" name="rol" value="profesor">
                    
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
  <script src="../assets/js/profesor.js"></script>
  <?php
    require_once "../extras/footer.php";
    require_once "../extras/script.php";?>
</body>
</html>

<?php }else{
  session_destroy();
  header("location: ../../index.php");
}
?>

<?php }else{
  session_destroy();
  header("location: ../../index.php");
}
?>