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
                <h5>Nuevo Proyecto</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formProyecto">

                  <fieldset>
                    <!--Nombre Proyecto-->
                    <div class="form-group">
                      <label for="nombre" class="control-label col-lg-2">Nombre del Grupo</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre" placeholder="Nombre Grupo" class="validate[required] form-control" required>
                      </div>



                      <!--Sigle Proyecto-->

                      <label for="sigla" class="control-label col-lg-2">Sigla del Grupo</label>

                      <div class="col-lg-4">
                        <input name="sigla" type="text" id="sigla" placeholder="Sigla del Grupo" class="validate[required] form-control" required>
                      </div>
                    </div>


                    <!--Fecha Inicio-->
                    <div class="form-group">
                      <label for="fechaInicio" class="control-label col-lg-2">Fecha de Inicio</label>

                      <div class="col-lg-4">
                        <input name="fechaInicio" type="date" id="fechaInicio" class="validate[required] form-control" required>
                      </div>


                      <!--Fecha Termino-->
                      <label for="fechaInicio" class="control-label col-lg-2">Fecha de Termino</label>

                      <div class="col-lg-4">
                        <input name="fechaTermino" type="date" id="fechaTermino" class="validate[required] form-control" required>
                      </div>
                    </div>
                    <!--Fechas Reales Inicio modificar probablemente-->
                    <div class="form-group">
                      <label for="fechaInicioR" class="control-label col-lg-2">Fecha de Inicio Real</label>

                      <div class="col-lg-4">
                        <input name="fechaInicioR" type="date" id="fechaInicioR" class="validate[required] form-control" required>
                      </div>


                      <!--Fecha Reales Termino modificar probablemente-->
                      <label for="fechaInicio" class="control-label col-lg-2">Fecha de Termino Real</label>

                      <div class="col-lg-4">
                        <input name="fechaTerminoR" type="date" id="fechaTerminoR" class="validate[required] form-control" required>
                      </div>
                    </div>


                    <!--modificar select tipo desarrollo -->


                    <div class="form-group">

                      <label for="TipoProyecto" class="control-label col-lg-2">Tipo de desarrollo</label>

<<<<<<< HEAD
                      <div class="col-lg-4 "><select data-placeholder="Inrese el tipo de desarrollo" id="tipoProyecto" name="tipoProyecto" class="form-control" >
                        <option value="Desarrollo Web">Desarrollo Web</option>
                        <option value="Desarrollo Movil">Desarrollo Movil</option>       
                      </select>
=======
                      <div class="col-lg-4 "><select data-placeholder="Your Favorite Type of Bear" class="form-control" name="tipoProyecto" id="tipoProyecto">
                          <option name="optionProyecto" vale="Desarrollo Web">Desarrollo Web</option>
                          <option name="optionProyecto" vale="Desarrollo Movil">Desarrollo Movil</option>
                        </select>
>>>>>>> cad486d389bb872d720f7ef72244ec45c9ab5560
                      </div>

                    </div>


                    <!--Descripcion proyecto-->
                    <div class=" form-group">
                      <label for="DescripcionProyecto" class="control-label col-lg-2">Descripcion del Proyecto</label>

                      <div class="col-lg-4">
                        <input class="form-control validate[required] form-control" required id="descripcion" name="descripcion" type="text" placeholder="Solo hay 256 caracteres disponibles">

                      </div>
                    </div>


                    <!--Codigo Semestre-->
                    <div class="form-group">
                      <label for="codigoSemestre" class="control-label col-lg-2">Codigo Semestre</label>

                      <div class="col-lg-4">
                        <input name="codigoSemestre" type="text" id="codigoSemestre" placeholder="Codigo Semestre" class="validate[required] form-control" required>
                      </div>



                      <!--Codigo Grupo-->

                      <label for="codigoProyecto" class="control-label col-lg-2">Codigo Proyecto</label>

                      <div class="col-lg-4">
                        <input name="codigoProyecto" type="text" id="codigoProyecto" placeholder="Codigo Proyecto " class="validate[required] form-control" required>
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
  <script src="../assets/js/proyecto.js"></script>

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>