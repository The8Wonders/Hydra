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
                <h5>Nuevo Grupo</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formGrupo">

                  <fieldset>
                    <div class="form-group">
                        <label for="cod_sem" class="control-label col-lg-2">Código Equipo</label>
                        <div class="col-lg-4">
                            <input name="cod_sem" readonly="readonly" type="text" id="cod_sem" placeholder="2000-1" class="validate[required] form-control" required>
                        </div>
                    </div><br>
                    <div class="form-group">
                      <label for="nom_equi" class="control-label col-lg-2">Nombre Equipo</label>
                      <div class="col-lg-4">
                        <input name="nom_equi" type="text" id="nom_equi" placeholder="Nombre equipo" class="validate[required] form-control" required>
                      </div>
                    </div>
                    <?php require_once "../../core/mainModel";
                      $sql = new mainModel();
                      $datos = $sql::ejecutar_consulta_simple("SELECT  FROM  semestre where ano < getdate(year)"); 
                    ?>
                    <div class="form-group">
                        <label for="cod_sem" class="control-label col-lg-2">Código Semestre</label>
                        <div class="col-lg-4">
                          <select data-placeholder="Your Favorite Type of Bear" class="form-control" name="cod_sem" id="cod_sem">
                          <option value=""></option>
                          <?php foreach($datos as $rows) { ?> 
                            <option name="opciongrupo" value="<?php echo $rows['cod_semestre'] ?>"><?php echo $rows['cod_semestre'] ?></option>
                          <?php } ?>
                          </select>
                        </div>
                    </div><br>
                    <div class="form-actions">
                      <input  type="submit" value="Insertar" class="btn btn-primary">
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
<script src="../assets/js/grupo.js"></script>

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>