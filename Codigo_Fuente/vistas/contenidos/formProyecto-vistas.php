
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema de gestion de proyectos">
  <meta name="keywords" content="Gestión, Proyectos">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
  <?php require_once "../extras/estilos.php";
  require_once "../extras/barra.php" ?>
  <title>Nuevo Proyecto</title>
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
                <h5>Nuevo Proyecto</h5>
              </header>

              <?php

   $rut=$_SESSION['rut_sgp']; 
  $codigoe=$_SESSION['equipo_sgp'];

  include "../../core/mainModel.php";
  $c = new mainModel();
  $sql = $c->ejecutar_consulta_simple("SELECT * FROM usuario u, alumno a, equipo e WHERE
   u.rut=a.rut AND a.cod_equipo=e.cod_equipo AND a.rut='$rut'	");

  if($sql->rowCount()>=1){
   $cantidad=1;

  } else {$cantidad=0;}



?>

          <?php if($_SESSION['cod_rol_sgp']=='alumno'):?>
          <?php if($codigoe!=NULL): ?>

            <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formProyecto">

                  <fieldset>
                    <!--Nombre Proyecto-->
                    <div class="form-group">
                      <label for="nombre" class="control-label col-lg-2">Nombre del Proyecto</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre" placeholder="Nombre Equipo" class="validate[required] form-control" required>
                      </div>
                   
                      <!--Sigle Proyecto-->

                      <label for="sigla" class="control-label col-lg-2">Sigla del Proyecto</label>

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

                        <textarea name="descripcion" rows="10" cols="80" data-placeholder="Escribe aqui la descripción del proyecto en 256 caracteres"></textarea>
                      <input type="hidden" name="codE" required value ="<?php echo $codigoe ?>">

                      </div>
                    </div>

                    <?php
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

                          <?php endif; ?>

            <?php if($codigoe==NULL):  ?>

              <div id="collapse2" class="body">
              <?php echo $cantidad; ?>
                <div><h2>Crea primero un Equipo</h2></div>

                <div><a href="formGrupo-vistas.php" class="btn btn-primary" role="button">Crear Equipo</a></div>
              
            </div>
            <?php endif; ?>


          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/js/proyecto.js"></script>
            <?php endif; ?>
  <?php if($_SESSION['cod_rol_sgp']=='profesor' || $_SESSION['cod_rol_sgp']=='administrador'){
    header("Location: home-vistas.php");
  } ?>
<
</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>