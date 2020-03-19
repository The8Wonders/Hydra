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
                <form class="form-horizontal" action="../../controladores/grupo.controlador.php" method="POST" id="formGrupo">

                  <fieldset>
                    <!--Codigo equipo-->
                    <div class="form-group">
                      <label for="cod_equipo" class="control-label col-lg-2">Código Grupo</label>
                      <div class="col-lg-4">
                        <input name="cod_equipo" type="text" id="cod_equipo" placeholder="000" class="validate[required] form-control" required>
                      </div>
                      <label for="nom_equi" class="control-label col-lg-2">Nombre Equipo</label>
                      <div class="col-lg-4">
                        <input name="nom_equi" type="text" id="nom_equi" placeholder="Nombre equipo" class="validate[required] form-control" required>
                      </div>
                    </div>


                    <!--Nombre Equipo-->
                    <div class="form-group">
                        <label for="cod_sem" class="control-label col-lg-2">Código Semestre</label>
                        <div class="col-lg-4">
                            <input name="cod_sem" type="text" id="cod_sem" placeholder="2000-1" class="validate[required] form-control" required>
                        </div>
                        <label for="cod_pro" class="control-label col-lg-2">Código Proyecto</label>
                        <div class=" col-lg-4">
                            <input name="cod_pro" class="validate[required] form-control" placeholder="000" type="text" id="cod_pro" required />
                        </div>
                    </div>

                    <!--Código semestre-->
                    

                    
                    <!--Codigo proyecto-->

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
<!--<script src="../assets/js/administrador.js"></script>-->

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>