<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema de gestion de proyectos">
  <meta name="keywords" content="Gestión, Proyectos">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
  <?php require_once "../extras/estilos.php"; ?>
  <title>Mi perfil</title>
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
                <h5>Editar mi perfil</h5>
              </header>
              <div id="collapse2" class="body">

                <!-- perfil alumno -->
                <?php if ($_SESSION['cod_rol_sgp'] == 'alumno') : //if soy un alumno 
                ?>
                  <form class="form-horizontal" action="" method="POST" id="perfilAlumno">
                    <fieldset>
                      <!--Nombres Alumno-->
                      <div class="form-group">
                        <label for="nombre1" class="control-label col-lg-2">Nombres</label>

                        <div class="col-lg-4">
                          <input name="nombre" type="text" id="nombre" class="validate[required] form-control" required value="<?php echo $_SESSION['nombre_sgp'] ?>" >
                        </div>

                        <label for="nombre2" class="control-label col-lg-2">Apellidos</label>

                        <div class="col-lg-4">
                          <input name="apellido" type="text" id="nombre2" class="validate[required] form-control" required value="<?php echo $_SESSION['apellido_sgp'] ?>" >
                        </div>
                      </div>

                      <!--Rut Alumno-->
                      <div class="form-group">
                        <label for="rut" class="control-label col-lg-2">R.U.T</label>

                        <div class="col-lg-4">
                          <input name="rut" type="text" id="rut" name="rut" class="validate[required] form-control" readonly required value="<?php echo $_SESSION['rut_sgp'] ?>">
                        </div>

                        <!-- Email -->
                        <label class="control-label col-lg-2">E-Mail</label>

                        <div class=" col-lg-4">
                          <input name="correo" class="validate[required,custom[email]] form-control" type="text" readonly placeholder="Ejemplo@gmail.com" id="correo" required value="<?php echo $_SESSION['correo_sgp'] ?>">
                        </div>
                      </div>

                      <!--Contraseña Alumno-->
                      <div class="form-group">                        
                        <!-- Telefono -->
                        <label class="control-label col-lg-2">Telefono Celular</label>

                        <div class="col-lg-1">
                          <input type="text" value="+56" readonly class="form-control">
                        </div>

                        <div class=" col-lg-3">
                          <input name="telefono" class="validate[required,custom[number]] form-control" type="number" min="920000000" pattern="^[0-9]+" id="telefono" maxlength="9" required value="<?php echo $_SESSION['telefono_sgp'] ?>">
                        </div>

                      </div>

                      
                      <div class="form-group">

                      <input type="hidden" name="rol" value="<?php echo $_SESSION['cod_rol_sgp'] ?>">

                      <!-- Carrera alumno -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Carrera</label>
                        <div class="col-lg-4">
                          <input type="text"  readonly name="carrera" class="form-control" value="<?php echo $_SESSION['carrera_sgp'] ?>">
                        </div>

                        <!-- Año Ingreso -->
                        <label class="control-label col-lg-2">Año De Ingreso</label>
                        <div class="col-lg-4">
                          <input type="text" readonly name="ano_ingreso" class="form-control" value="<?php echo $_SESSION['ano_ingreso_sgp'] ?>">
                        </div>
                      </div>

                      <!-- Cargo -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Cargo</label>
                        <div class="col-lg-4">
                          <input type="text" readonly name="cargo" class="form-control" value="<?php echo $_SESSION['cargo_sgp'] ?>">
                        </div>

                        <!-- Codigo Semestre -->
                        <label class="control-label col-lg-2">Codigo Semestre</label>
                        <div class="col-lg-4">
                          <input type="text" readonly name="cod_semestre" class="form-control" value="<?php echo $_SESSION['semestre_sgp'] ?>">
                        </div>
                      </div>

                      <!-- Codigo Equipo -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Codigo Equipo</label>
                        <div class="col-lg-4">
                          <input type="text" readonly name="cod_eq" class="form-control" value="<?php echo $_SESSION['equipo_sgp'] ?>">
                        </div>
                      </div>

                      <!-- submit -->
                      <input type="hidden" name="rol" value="<?php echo $_SESSION['cod_rol_sgp']; ?>">
                      <div class="form-actions">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                      </div>
                    </fieldset>
                  </form>
                <?php endif; ?>

                <!-- perfil profesor -->
                <?php if ($_SESSION['cod_rol_sgp'] == 'profesor') : // if soy un profesor 
                ?>
                  <form class="form-horizontal" action="" method="POST" id="perfilProfesor">
                    <fieldset>
                      <!--Nombres Administrador-->
                      <div class="form-group">
                        <label for="nombre1" class="control-label col-lg-2">Nombres</label>

                        <div class="col-lg-4">
                          <input name="nombre" type="text" id="nombre" class="validate[required] form-control" required value="<?php echo $_SESSION['nombre_sgp'] ?>">
                        </div>

                        <label for="nombre2" class="control-label col-lg-2">Apellidos</label>

                        <div class="col-lg-4">
                          <input name="apellido" type="text" id="nombre2" class="validate[required] form-control" required value="<?php echo $_SESSION['apellido_sgp'] ?>">
                        </div>
                      </div>

                      <!--Rut admin-->
                      <div class="form-group">
                        <label for="rut" class="control-label col-lg-2">R.U.T</label>

                        <div class="col-lg-4">
                          <input name="rut" type="text" id="rut" name="rut" class="validate[required] form-control" readonly required value="<?php echo $_SESSION['rut_sgp'] ?>">
                        </div>

                        <!-- Email admin -->
                        <label class="control-label col-lg-2">E-Mail</label>

                        <div class=" col-lg-4">
                          <input name="correo" class="form-control" type="email" placeholder="Ejemplo@gmail.com" id="correo" required value="<?php echo $_SESSION['correo_sgp'] ?>">
                        </div>
                      </div>

                      <!--Contraseña admin-->
                      <div class="form-group">
                        <!-- Telefono -->
                        <label class="control-label col-lg-2">Telefono Celular</label>

                        <div class="col-lg-1">
                          <input type="text" value="+56" readonly class="form-control">
                        </div>

                        <div class=" col-lg-3">
                          <input name="telefono" class="form-control" type="number" min="920000000" pattern="^[0-9]+" id="telefono" maxlength="9" required value="<?php echo $_SESSION['telefono_sgp'] ?>">
                        </div>

                      </div>

                      <!-- Repetir contraseña -->
                      <div class="form-group">
                        <input type="hidden" name="rol"value="<?php echo $_SESSION['cod_rol_sgp']?>" >
                        <!-- submit -->
                        <div class="form-actions">
                          <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                    </fieldset>
                  </form>
                <?php endif; ?>

                <!-- perfil administrador -->
                <?php if ($_SESSION['cod_rol_sgp'] == 'administrador') : // if soy un Administrador 
                ?>
                  <form class="form-horizontal" action="" method="POST" id="perfilAdmin">
                    <fieldset>
                      <!--Nombres Administrador-->
                      <div class="form-group">
                        <label for="nombre1" class="control-label col-lg-2">Nombres</label>

                        <div class="col-lg-4">
                          <input name="nombre" type="text" id="nombre" class="validate[required] form-control" required value="<?php echo $_SESSION['nombre_sgp'] ?>">
                        </div>

                        <label for="nombre2" class="control-label col-lg-2">Apellidos</label>

                        <div class="col-lg-4">
                          <input name="apellido" type="text" id="nombre2" class="validate[required] form-control" required value="<?php echo $_SESSION['apellido_sgp'] ?>">
                        </div>
                      </div>

                      <!--Rut admin-->
                      <div class="form-group">
                        <label for="rut" class="control-label col-lg-2">R.U.T</label>

                        <div class="col-lg-4">
                          <input name="rut" type="text" id="rut" name="rut" class="validate[required] form-control" readonly required value="<?php echo $_SESSION['rut_sgp'] ?>">
                        </div>

                        <!-- Email admin -->
                        <label class="control-label col-lg-2">E-Mail</label>

                        <div class=" col-lg-4">
                          <input name="correo" class="form-control" type="email" placeholder="Ejemplo@gmail.com" id="correo" required value="<?php echo $_SESSION['correo_sgp'] ?>">
                        </div>
                      </div>
                    
                        <!-- Telefono -->
                        <label class="control-label col-lg-2">Telefono Celular</label>

                        <div class="col-lg-1">
                          <input type="text" value="+56" readonly class="form-control">
                        </div>

                        <div class=" col-lg-3">
                          <input name="telefono" class="form-control" type="number" min="920000000" pattern="^[0-9]+" id="telefono" maxlength="9" required value="<?php echo $_SESSION['telefono_sgp'] ?>">
                        </div>

                      </div>

                      <!-- Repetir contraseña -->
                      <div class="form-group">
                        <input type="hidden" name="rol" value="administrador">
                        <!-- submit -->
                        <div class="form-actions">
                          <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                    </fieldset>
                  </form>
                <?php endif; ?>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php if($_SESSION['cod_rol_sgp']== 'administrador'): ?>
  <script src="../assets/js/perfil_admin.js"></script>
  <?php endif; ?>
  <?php if($_SESSION['cod_rol_sgp']== 'profesor'): ?>
  <script src="../assets/js/perfil_profe.js"></script>
  <?php endif; ?>
  <?php if($_SESSION['cod_rol_sgp']== 'alumno'): ?>
  <script src="../assets/js/perfil_alumno.js"></script>
  <?php endif; ?>
  <?php
  require_once "../extras/footer.php";
  require_once "../extras/script.php"; ?>
</body>

</html>