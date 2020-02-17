<div id="content">
  <div class="outer">
    <div class="inner bg-light lter"> 
               
    
        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <header>
                <div class="icons"><i class="fa fa-edit"></i></div>
                  <h5>Nuevo Administrador</h5>
              </header>
              <div id="collapse2" class="body">
              <form class="form-horizontal" id="popup-validation">

                  <!--Nombres Administrador-->
                  <div class="form-group">
                        <label for="nombre1" class="control-label col-lg-2">Primer Nombre</label>

                        <div class="col-lg-4">
                            <input type="text" id="nombre1" placeholder="Matias" class="validate[required] form-control">
                        </div>

                        <label for="nombre2" class="control-label col-lg-2">Segundo Nombre</label>

                        <div class="col-lg-4">
                            <input type="text" id="nombre2" placeholder="Ignacio" class="validate[required] form-control">
                        </div>
                  </div>

                  <!--Apellidos Administrador-->
                  <div class="form-group">
                        <label for="apellido1" class="control-label col-lg-2">Apellido Paterno</label>

                        <div class="col-lg-4">
                            <input type="text" id="apellido1" placeholder="Castro" class="validate[required] form-control">
                        </div>

                        <label for="apellido2" class="control-label col-lg-2">Apellido Materno</label>

                        <div class="col-lg-4">
                            <input type="text" id="apellido2" placeholder="Pulgar" class="validate[required] form-control">
                        </div>
                  </div>

                  <!--Rut Administrador-->
                  <div class="form-group">
                        <label for="rut" class="control-label col-lg-2">R.U.T</label>

                        <div class="col-lg-4">
                            <input type="text" id="rut" placeholder="11.111.111-k" class="validate[required] form-control">
                        </div>
                  </div>

                  <!--Contraseña Administrador-->
                  <div class="form-group">
                        <label class="control-label col-lg-2">Contraseña</label>

                        <div class=" col-lg-4">
                            <input class="validate[required] form-control" type="password" name="pass1" id="pass1"/>
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-lg-2">Repetir Contraseña</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2"
                                      id="pass2"/>
                        </div>
                  </div>

                  <!--E-Mail Administrador-->
                  <div class="form-group">
                        <label class="control-label col-lg-2">E-Mail</label>

                        <div class=" col-lg-6">
                            <input class="validate[required,custom[email]] form-control" type="text" name="email1" placeholder="Ejemplo@gmail.com"
                                   id="email1"/>
                        </div>
                 </div>

                 <!--Telefono Administrador-->
                 <div class="form-group">
                        <label class="control-label col-lg-2">Telefono Celular</label>

                        <div class="col-lg-1">
                          <input type="text" value="+56" readonly class="form-control">
                        </div>

                        <div class=" col-lg-3">
                            <input class="validate[required,custom[number]] form-control" type="number" min="920000000" pattern="^[0-9]+"
                                   name="numbe2r" id="number2" maxlength="9"/>
                        </div>
                </div>

                 <!--Genero Administrador-->
                <div class="form-group">
                        <label class="control-label col-lg-2">Genero</label>

                        <div class="col-lg-8">
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="optionsRadios" value="option1" checked>Masculino
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="optionsRadios" value="option2">Femenino
                                </label>
                            </div>
                        </div>
                </div>

                <div class="form-actions no-margin-bottom">
                        <input type="submit" value="Guardar" class="btn btn-success">
                </div>
              
              </form>
              </div>
            </div>
          </div>
        </div>



    </div>
  </div>
</div>