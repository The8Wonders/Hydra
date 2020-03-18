<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de gestion de proyectos">
    <meta name="keywords" content="Gestión, Proyectos">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
    <?php require_once "../extras/estilos.php";?>
    <title>Mi perfil</title>
</head>
<body>
<?php require_once "../extras/barra.php";?>
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
              <?php if(1): //if soy un alumno ?>
                <form class="form-horizontal" action="" method="POST" id="formAdmin">
                  <fieldset>
                    <!--Nombres Alumno-->
                    <div class="form-group">
                      <label for="nombre1" class="control-label col-lg-2">Nombres</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre"  class="validate[required] form-control" required>
                      </div>

                      <label for="nombre2" class="control-label col-lg-2">Apellidos</label>

                      <div class="col-lg-4">
                        <input name="apellido" type="text" id="nombre2" class="validate[required] form-control" required>
                      </div>
                    </div>

                    <!--Rut Alumno-->
                    <div class="form-group">
                      <label for="rut" class="control-label col-lg-2">R.U.T</label>

                      <div class="col-lg-4">
                        <input name="rut" type="text" id="rut" name="rut" class="validate[required] form-control" readonly required>
                      </div>

                      <!-- Email -->
                      <label class="control-label col-lg-2">E-Mail</label>

                      <div class=" col-lg-4">
                        <input name="correo" class="validate[required,custom[email]] form-control" type="text" readonly placeholder="Ejemplo@gmail.com" id="correo" required />
                      </div>
                    </div>

                    <!--Contraseña Alumno-->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="contra" class="validate[required] form-control" type="password" id="contra" required />
                      </div>

                      <!-- Telefono -->
                      <label class="control-label col-lg-2">Telefono Celular</label>

                      <div class="col-lg-1">
                        <input type="text" value="+56" readonly class="form-control">
                      </div>

                      <div class=" col-lg-3">
                        <input name="telefono" class="validate[required,custom[number]] form-control" type="number" min="920000000" pattern="^[0-9]+" id="telefono" maxlength="9" required />
                      </div>

                    </div>

                    <!-- Repetir contraseña -->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Repetir Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="re-contra" class="validate[required,equals[pass1]] form-control" type="password" id="re-contra" required />
                      </div>

                      <!--Genero Alumno-->
                      <label class="control-label col-lg-2">Genero</label>
                      <div class="col-lg-4">
                        <div class="checkbox">
                          <label>
                            <input class="uniform" type="radio" name="optionsGenero" value="Masculino" checked>Masculino
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="uniform" type="radio" name="optionsGenero" value="Femenino">Femenino
                          </label>
                        </div>
                      </div>
                    </div>
            
                    <input type="hidden" name="rol" value="Alumno">
        
                    <!-- Carrera alumno -->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Carrera</label>
                      <div class="col-lg-4">
                        <input type="text" value="Ingeniería de ejecución en computación e informatica" readonly name="carrera" class="form-control">
                      </div>

                      <!-- Año Ingreso -->
                      <label class="control-label col-lg-2">Año De Ingreso</label>
                      <div class="col-lg-4">
                        <input type="text" value="2017" readonly name="ano_ingreso" class="form-control">
                      </div>
                    </div>

                    <!-- Cargo -->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Cargo</label>
                      <div class="col-lg-4">
                        <input type="text" value="Desarrollador" readonly name="cargo" class="form-control">
                      </div>

                      <!-- Codigo Semestre -->
                      <label class="control-label col-lg-2">Codigo Semestre</label>
                      <div class="col-lg-4">
                        <input type="text" value="2019-2" readonly name="cod_semestre" class="form-control">
                      </div>
                    </div>
                    
                    <!-- Codigo Equipo -->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Codigo Equipo</label>
                      <div class="col-lg-4">
                        <input type="text" value="(0001) The Eight Wonders" readonly name="cod_eq" class="form-control">
                      </div>
                    </div>
                    
                    <!-- submit -->
                    <div class="form-actions">
                      <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                  </fieldset>
                </form>
              <?php endif;?>
  
              <!-- perfil profesor -->
              <?php if(1): // if soy un profesor ?>
              <form class="form-horizontal" action="" method="POST" id="formAdmin">
                  <fieldset>
                    <!--Nombres Profesor-->
                    <div class="form-group">
                      <label for="nombre1" class="control-label col-lg-2">Nombres</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre"  class="validate[required] form-control" required>
                      </div>

                      <label for="nombre2" class="control-label col-lg-2">Apellidos</label>

                      <div class="col-lg-4">
                        <input name="nombre2" type="text" id="nombre2" class="validate[required] form-control" required>
                      </div>
                    </div>

                    <!--Rut Profesor-->
                    <div class="form-group">
                      <label for="rut" class="control-label col-lg-2">R.U.T</label>

                      <div class="col-lg-4">
                        <input name="rut" type="text" id="rut" name="rut" class="validate[required] form-control" readonly required>
                      </div>

                      <!-- Email Profesor -->
                      <label class="control-label col-lg-2">E-Mail</label>

                      <div class=" col-lg-4">
                        <input name="correo" class="validate[required,custom[email]] form-control" type="text" readonly placeholder="Ejemplo@gmail.com" id="correo" required />
                      </div>
                    </div>

                    <!--Contraseña Profesor-->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="contra" class="validate[required] form-control" type="password" id="contra" required />
                      </div>

                      <!-- Telefono -->
                      <label class="control-label col-lg-2">Telefono Celular</label>

                      <div class="col-lg-1">
                        <input type="text" value="+56" readonly class="form-control">
                      </div>

                      <div class=" col-lg-3">
                        <input name="telefono" class="validate[required,custom[number]] form-control" type="number" min="920000000" pattern="^[0-9]+" id="telefono" maxlength="9" required />
                      </div>

                    </div>

                    <!-- Repetir contraseña -->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Repetir Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="re-contra" class="validate[required,equals[pass1]] form-control" type="password" id="re-contra" required />
                      </div>

                      <!--Genero profesor-->
                      <label class="control-label col-lg-2">Genero</label>
                      <div class="col-lg-4">
                        <div class="checkbox">
                          <label>
                            <input class="uniform" type="radio" name="optionsGenero" value="Masculino" checked>Masculino
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="uniform" type="radio" name="optionsGenero" value="Femenino">Femenino
                          </label>
                        </div>
                      </div>
                    </div>
            
                    <input type="hidden" name="rol" value="Profesor">

                    <!-- submit -->
                    <div class="form-actions">
                      <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                  </fieldset>
              </form>
              <?php endif;?>

              <!-- perfil administrador -->
              <?php if(1): // if soy un Administrador ?>
              <form class="form-horizontal" action="" method="POST" id="formAdmin">
                  <fieldset>
                    <!--Nombres Administrador-->
                    <div class="form-group">
                      <label for="nombre1" class="control-label col-lg-2">Nombres</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre"  class="validate[required] form-control" required>
                      </div>

                      <label for="nombre2" class="control-label col-lg-2">Apellidos</label>

                      <div class="col-lg-4">
                        <input name="nombre2" type="text" id="nombre2" class="validate[required] form-control" required>
                      </div>
                    </div>

                    <!--Rut admin-->
                    <div class="form-group">
                      <label for="rut" class="control-label col-lg-2">R.U.T</label>

                      <div class="col-lg-4">
                        <input name="rut" type="text" id="rut" name="rut" class="validate[required] form-control" readonly required>
                      </div>

                      <!-- Email admin -->
                      <label class="control-label col-lg-2">E-Mail</label>

                      <div class=" col-lg-4">
                        <input name="correo" class="validate[required,custom[email]] form-control" type="text" readonly placeholder="Ejemplo@gmail.com" id="correo" required />
                      </div>
                    </div>

                    <!--Contraseña admin-->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="contra" class="validate[required] form-control" type="password" id="contra" required />
                      </div>

                      <!-- Telefono -->
                      <label class="control-label col-lg-2">Telefono Celular</label>

                      <div class="col-lg-1">
                        <input type="text" value="+56" readonly class="form-control">
                      </div>

                      <div class=" col-lg-3">
                        <input name="telefono" class="validate[required,custom[number]] form-control" type="number" min="920000000" pattern="^[0-9]+" id="telefono" maxlength="9" required />
                      </div>

                    </div>

                    <!-- Repetir contraseña -->
                    <div class="form-group">
                      <label class="control-label col-lg-2">Repetir Contraseña</label>

                      <div class=" col-lg-4">
                        <input name="re-contra" class="validate[required,equals[pass1]] form-control" type="password" id="re-contra" required />
                      </div>

                      <!--Genero admin-->
                      <label class="control-label col-lg-2">Genero</label>
                      <div class="col-lg-4">
                        <div class="checkbox">
                          <label>
                            <input class="uniform" type="radio" name="optionsGenero" value="Masculino" checked>Masculino
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="uniform" type="radio" name="optionsGenero" value="Femenino">Femenino
                          </label>
                        </div>
                      </div>
                    </div>
            
                    <input type="hidden" name="rol" value="Administrador">

                    <!-- submit -->
                    <div class="form-actions">
                      <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                  </fieldset>
              </form>
              <?php endif;?>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/administrador.js"></script>
  <?php
    require_once "../extras/footer.php";
    require_once "../extras/script.php"; ?>
</body>
</html>