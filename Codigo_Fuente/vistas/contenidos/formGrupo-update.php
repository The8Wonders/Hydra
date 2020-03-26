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
                <h5>Editar Grupo</h5>
              </header>
              <div id="collapse2" class="body">

              <?php 
                require_once "../../core/mainModel.php";
                $cod_equipo = $_SESSION['equipo_sgp'];
                $c = new mainModel();
                $datos = mainModel::ejecutar_consulta_simple("SELECT * FROM equipo WHERE cod_equipo='$cod_equipo'");
              ?>
                <!--editar para profesor y administrador -->

                <?php if($_SESSION['cod_rol_sgp']=='administrador') : ?>
                <?php foreach($datos as $rows) : ?>  
                <form class="form-horizontal" action="../../controladores/grupo.controlador-update.php" method="POST" id="formGrupo">
                  <fieldset>
                  <div class="form-group">
                      <label for="cod_equi" class="control-label col-lg-2">Código Equipo</label>
                      <div class="col-lg-4">
                        <input name="cod_equi"  value="<?php echo $rows['cod_equipo'] ?>" type="text" id="cod_equi" class="validate[required] form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom_equi" class="control-label col-lg-2">Nombre Equipo</label>
                      <div class="col-lg-4">
                        <input name="nom_equi" value="<?php echo $rows['nombre_equipo'] ?>" type="text" id="nom_equi"  class="validate[required] form-control" >
                      </div>
                    </div>
                    <!--Nombre Equipo-->
                    <div class="form-group">
                        <label for="cod_sem" class="control-label col-lg-2">Código Semestre</label>
                        <div class="col-lg-4">
                            <input name="cod_sem"  value="<?php echo $rows['cod_semestre'] ?>" type="text" id="cod_sem" class="validate[required] form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="cod_pro" class="control-label col-lg-2">Código Proyecto</label>
                      <div class="col-lg-4">
                        <input name="cod_pro"  value="<?php echo $rows['cod_proyecto'] ?>" type="text" id="cod_pro"  class="validate[required] form-control">
                      </div>
                    </div><br>
                    <div class="form-actions">
                      <input  type="submit" value="Editar" class="btn btn-primary">
                    </div>
                  </fieldset>
                </form>
                <?php endforeach;?> 
                <?php endif; ?>
              <!--alumno -->
                <?php if($_SESSION['cod_rol_sgp'] == 'alumno') :?>  
                <?php foreach($datos as $rows) : ?>  
                <form class="form-horizontal" action="../../controladores/grupo.controlador-update.php" method="POST" id="formGrupo">
                  <fieldset>
                  <div class="form-group">
                      <label for="cod_equi" class="control-label col-lg-2">Código Equipo</label>
                      <div class="col-lg-4">
                        <input name="cod_equi" readonly="readonly" value="<?php echo $rows['cod_equipo'] ?>" type="text" id="cod_equi" class="validate[required] form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom_equi" class="control-label col-lg-2">Nombre Equipo</label>
                      <div class="col-lg-4">
                        <input name="nom_equi" value="<?php echo $rows['nombre_equipo'] ?>" type="text" id="nom_equi"  class="validate[required] form-control" >
                      </div>
                    </div>
                    <!--Nombre Equipo-->
                    <div class="form-group">
                        <label for="cod_sem" class="control-label col-lg-2">Código Semestre</label>
                        <div class="col-lg-4">
                            <input name="cod_sem" readonly="readonly" value="<?php echo $rows['cod_semestre'] ?>" type="text" id="cod_sem" class="validate[required] form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="cod_pro" class="control-label col-lg-2">Código Proyecto</label>
                      <div class="col-lg-4">
                        <input name="cod_pro" readonly="readonly" value="<?php echo $rows['cod_proyecto'] ?>" type="text" id="cod_pro"  class="validate[required] form-control">
                      </div>
                    </div><br>
                    <div class="form-actions">
                      <input  type="submit" action="../../controladores/grupo.controlador-update.php" value="Editar" class="btn btn-primary">
                    </div>
                  </fieldset>
                </form>
                <?php endforeach;?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<!--<script src="../assets/js/administrador.js"></script>-->

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>