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
  <title>Nuevo Grupo</title>
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
                <h5>Nuevo Grupo</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formGrupo">

                  <fieldset>
                    <div class="form-group">
                        
                    </div><br>
                    <div class="form-group">
                      <label for="nom_equi" class="control-label col-lg-2">Nombre Equipo</label>
                      <div class="col-lg-4">
                        <input name="nom_equi" type="text" id="nom_equi"  class="validate[required] form-control" required>
                      </div>
                    </div>
                    <?php
                    require_once "../../core/mainModel.php";
                    $ins = new mainModel();
                    $y = date("Y");
                    $datos = $ins->ejecutar_consulta_simple("SELECT * FROM semestre WHERE ano = '$y'");
                    ?>
                    <!--Codigo Proyectos-->
                    <div class="form-group">

                      <label for="codigoProyecto" class="control-label col-lg-2">Codigo Semestre</label>

                      <div class="col-lg-4 "><select  data-placeholder="Your Favorite Type of Bear" class="form-control" name="cod_sem" id="cod_sem" required>
                          <option value=""></option>
                          <?php foreach ($datos as $rows) { ?>
                            <option name="optionproyecto" value="<?php echo $rows['cod_semestre'] ?>"> <?php echo $rows['cod_semestre'] ?> </option>
                          <?php } ?>
                        </select>
                      </div>

                    </div>
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