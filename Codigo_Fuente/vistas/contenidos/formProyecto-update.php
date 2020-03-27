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
  <title>Actualizar Proyecto</title>
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
                <h5>Editar Mi Proyecto</h5>
              </header>
              <div id="collapse2" class="body">

                <?php

                session_start(['name' => 'SGP']);
                include "../../core/mainModel.php";
                $equipo= $_SESSION['cod_proyecto_sgp'];

                $cod=$_SESSION['equipo_sgp'];
                 //echo $cod;
                
                $c = new mainModel();
                $sql = $c->ejecutar_consulta_simple("SELECT * FROM equipo e, proyecto p WHERE p.cod_proyecto=e.cod_proyecto and cod_equipo='$cod'
                ");

                foreach ($sql as $rows) {
                    }; 
                ?>


                <form class="form-horizontal" action="" method="POST" id="editProyecto">

                  <fieldset>
                    <!--Nombre Proyecto-->
                    <input type="hidden" id="cod" name="cod" required value="<?php echo $rows['cod_proyecto'] ?>">
                    <div class="form-group">
                      <label for="nombre" class="control-label col-lg-2">Nombre del Proyecto</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre-edit" class="form-control" required value="<?php echo $rows['nom_proyecto'] ?>">
                      </div>
                    
                      <!--Sigle Proyecto-->

                      <label for="sigla" class="control-label col-lg-2">Sigla del Proyecto</label>

                      <div class="col-lg-4">
                        <input name="sigla" type="text" id="sigla" placeholder="Sigla del Grupo" class="form-control" required value="<?php echo $rows['sigla'] ?>">
                      </div>
                    </div>


                    <!--Fecha Inicio-->
                    <div class="form-group">
                      <label for="fechaInicio" class="control-label col-lg-2">Fecha de Inicio</label>

                      <div class="col-lg-4">
                        <input name="fechaInicio" type="date" id="fechaInicio" class="validate[required] form-control" required value="<?php echo $rows['fecha_inicio'] ?>">
                      </div>


                      <!--Fecha Termino-->
                      <label for="fechaInicio" class="control-label col-lg-2">Fecha de Termino</label>

                      <div class="col-lg-4">
                        <input name="fechaTermino" type="date" id="fechaTermino" class="validate[required] form-control" required value="<?php echo $rows['fecha_fin'] ?>">
                      </div>
                    </div>
                    <!--Fechas Reales Inicio modificar probablemente-->
                    <div class="form-group">
                      <label for="fechaInicioR" class="control-label col-lg-2">Fecha de Inicio Real</label>

                      <div class="col-lg-4">
                        <input name="fechaInicioR" type="date" id="fechaInicioR" class="validate[required] form-control" required value="<?php echo $rows['fecha_inicio_real'] ?>">
                      </div>


                      <!--Fecha Reales Termino modificar probablemente-->
                      <label for="fechaTerminoR" class="control-label col-lg-2">Fecha de Termino Real</label>

                      <div class="col-lg-4">
                        <input name="fechaTerminoR" type="date" id="fechaTerminoR" class="validate[required] form-control" required value="<?php echo $rows['fecha_fin_real'] ?>">
                      </div>
                    </div>


                    <!--modificar select tipo desarrollo -->


                    <div class="form-group">

                      <label for="TipoProyecto" class="control-label col-lg-2">Tipo de desarrollo</label>

                      <div class="col-lg-4 "><select data-placeholder="Ingrese su tipo de proyecto" id="tipoProyecto" name="tipoProyecto" class="form-control">
                          <option required value="<?php echo $rows['tipo_desarrollo'] ?>"><?php echo $rows['tipo_desarrollo'] ?></option>
                          <?php $value = $rows['tipo_desarrollo'];
                          if ($value == "Desarrollo Web") : ?>
                            <option value="Desarrollo Movil">Desarrollo Movil</option> <?php endif ?>
                          <?php if ($value == "Desarrollo Movil") : ?>
                            <option value="Desarrollo Movil">Desarrollo Web</option> <?php endif ?>

                        </select>
                      </div>

                    </div>
                    <!--Descripcion proyecto-->
                    <div class=" form-group">
                      <label for="DescripcionProyecto" class="control-label col-lg-2">Descripcion del Proyecto</label>

                      <div class="col-lg-4">
                      <textarea name="descripcion" rows="10" cols="80" data-placeholder="Escribe aqui la descripción del proyecto en 256 caracteres">Dispones de 256 caracteres para describir tu proyecto, por favor borrar este texto antes de escribir</textarea>
                      </div>
                    </div>

                    <?php
                    require_once "../../core/mainModel.php";
                    $ins = new mainModel();
                    $codi = $rows['cod_semestre'];


                    $datos = $ins->ejecutar_consulta_simple("SELECT cod_semestre FROM semestre Where cod_semestre!='$codi'");
                    ?>

                    <!--Codigo Semestre-->
                    <div class="form-group">

                      <!--<label for="codigoSemestre" class="control-label col-lg-2">Semestre</label>-->

                      <input type="hidden" name="codS" id="codS" required value="<?php echo $rows['cod_semestre'] ?>">

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
  <script src="../assets/js/editproyecto.js"></script>

  <?php
  require_once "../extras/footer.php";
  require_once "../extras/script.php"; ?>
</body>

</html>