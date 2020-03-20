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
                <h5>Nuevo Requerimiento</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formRequerimiento">

                  <fieldset>
                    <!--Tipo de requerimiento-->
                    <div class="form-group">
                      <label for="tipo" class="control-label col-lg-2">Tipo de requerimiento</label>

                      <div class="col-lg-4">
                        <input name="tipo" type="text" id="tipo" placeholder="Tipo requerimiento" class="validate[required] form-control" required>
                      </div>



                       <!--Nombre Requerimiento-->
                    
                      <label for="nombre" class="control-label col-lg-2">Nombre del requerimiento</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre" placeholder="Nombre requerimiento" class="validate[required] form-control" required>
                      </div>
                      </div>

                       <!--Descripcion requerimiento-->
                    <div class="form-group">
                      <label for="descrip" class="control-label col-lg-2">Descripcion requerimiento</label>

                      <div class="col-lg-4">
                        <input name="descrip" type="text" id="descrip" placeholder="Descripcion requerimiento" class="validate[required] form-control" required>
                      </div>



                       <!--Complejidad requerimiento-->
                      <label for="complejidad" class="control-label col-lg-2">complejidad</label>

                      <div class="col-lg-4">
                        <input name="complejidad" type="text" id="complejidad" placeholder="Complejidad" class="validate[required] form-control" required>
                      </div>
                      </div>



                       <!--horas del requerimiento-->
                    <div class="form-group">
                      <label for="hora" class="control-label col-lg-2">Horas requerimiento</label>

                      <div class="col-lg-4">
                        <input name="hora" type="number" id="hora" placeholder="En horas" class="validate[required] form-control" required>
                      </div>



                       <!--Control de cambio-->
                 
                      <label for="cambio" class="control-label col-lg-2">Control de cambios</label>

                      <div class="col-lg-4">
                        <input name="cambio" type="text" id="cambio" placeholder="Control de cambio" class="validate[required] form-control" required>
                      </div>
                      </div>


                       <!--Prioridad del requerimiento-->
                    <div class="form-group">
                      <label for="prioridad" class="control-label col-lg-2">Prioridad</label>

                      <div class="col-lg-4">
                        <input name="prioridad" type="text" id="prioridad" placeholder="Prioridad" class="validate[required] form-control" required>
                      </div>



                       <!--Estado del requerimiento-->
             
                      <label for="estado" class="control-label col-lg-2">Estado</label>

                      <div class="col-lg-4">
                        <input name="estado" type="text" id="estado" placeholder="Ingrese estado" class="validate[required] form-control" required>
                      </div>
                      </div>


                       <!--Impacto del requerimiento-->
                    <div class="form-group">
                      <label for="impacto" class="control-label col-lg-2">Impacto</label>

                      <div class="col-lg-4">
                        <input name="impacto" type="text" id="impacto" placeholder="Ingrese impacto" class="validate[required] form-control" required>
                      </div>
                      </div>



                      

                    <?php
                    require_once "../../core/mainModel.php";
                    $ins = new mainModel();
                    $datos = $ins->ejecutar_consulta_simple("SELECT cod_proyecto FROM proyecto");
                    ?>

                    <!--Codigo Semestre-->
                    <div class="form-group">

                      <label for="codigoProyecto" class="control-label col-lg-2">Codigo de Proyecto</label>

                      <div class="col-lg-4 "><select data-placeholder="Your Favorite Type of Bear" class="form-control" name="codigoProyecto" id="codigoProyecto">
                          <option value=""></option>
                          <?php foreach ($datos as $rows) { ?>
                            <option name="optionproyecto" value="<?php echo $rows['cod_proyecto'] ?>"> <?php echo $rows['cod_proyecto'] ?> </option>
                          <?php } ?>
                        </select>
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
  <script src="../assets/js/requerimiento.js"></script>

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>