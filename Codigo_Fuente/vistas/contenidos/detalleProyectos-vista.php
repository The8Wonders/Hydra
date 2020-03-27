<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>

<body>


<?php $rut = $_SESSION['rut_sgp'];
                include "../../core/mainModel.php";
                $c = new mainModel();
                $sql = $c->ejecutar_consulta_simple("SELECT p.cod_proyecto,p.nom_proyecto,p.fecha_inicio,p.fecha_fin, p.fecha_inicio_real,
                    p.fecha_fin_real,p.descripcion_proyecto, p.sigla,p.tipo_desarrollo,p.cod_semestre  FROM usuario u, alumno a, 
                    equipo e, proyecto p WHERE u.rut=a.rut AND a.cod_equipo= e.cod_equipo AND e.cod_proyecto=p.cod_proyecto AND u.rut='$rut'");

                 /*   if($sql->rowcount()>0){
                      echo exito;
                    }else{
                      echo fallo;
                    }*/

                foreach ($sql as $rows) {
                };

?>

  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">


        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <header>
                <div class="icons"><i class="fa fa-edit"></i></div>
                <h5>Mi Proyecto</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formProyecto">

                  <fieldset>
                    <!--Nombre Proyecto-->
                    <div class="form-group">
                      <label for="nombre" class="control-label col-lg-2">Nombre del Equipo</label>

                      <label for="nombre" class="control-label col-lg-4"><?php echo $rows['nom_proyecto'] ?></label>


                      <!--Sigle Proyecto-->

                      <label for="sigla" class="control-label col-lg-2">Sigla del Equipo</label>

                      <div class="col-lg-4">
                        <input name="sigla" type="text" id="sigla" placeholder="Sigla del Equipo" class="validate[required] form-control" required>
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

                      <div class="col-lg-4 "><select data-placeholder="Inrese el tipo de desarrollo" id="tipoProyecto" name="tipoProyecto" class="form-control" >
                        <option value="Desarrollo Web">Desarrollo Web</option>
                        <option value="Desarrollo Movil">Desarrollo Movil</option>       
                      </select>
                      </div>

                    </div>


                    <!--Descripcion proyecto-->
                    <div class=" form-group">
                      <label for="DescripcionProyecto" class="control-label col-lg-2">Descripcion del Proyecto</label>

                      <div class="col-lg-4">
                        <input class="form-control validate[required] form-control" required id="descripcion" name="descripcion" type="text" placeholder="Solo hay 256 caracteres disponibles">

                      </div>
                    </div>

                    <?php
                    require_once "../../core/mainModel.php";
                    $ins = new mainModel();
                    $datos = $ins->ejecutar_consulta_simple("SELECT cod_semestre FROM semestre");
                    ?>

                    <!--Codigo Semestre-->
                    <div class="form-group">

                      <label for="codigoSemestre" class="control-label col-lg-2">Semestre</label>

                      <div class="col-lg-4 "><select data-placeholder="Your Favorite Type of Bear" class="form-control" name="codigoSemestre" id="codigoSemestre">
                          <option value=""></option>
                          <?php foreach ($datos as $rows) { ?>
                            <option name="optionSemestre" value="<?php echo $rows['cod_semestre'] ?>"> <?php echo $rows['cod_semestre'] ?> </option>
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
  <script src="../assets/js/proyecto.js"></script>

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>