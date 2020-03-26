<?php require_once ("../extras/estilos.php");?>
<?php require_once ("../extras/barra.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
        <!--Begin Datatables-->
        <div class="row">
          <div class="col-lg-12">
            <div class="box">
              <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Equipo</h5>
              </header>
              <div id="collapse4" class="body">
              <!--lista grupo para admin y profesor-->
              <?php
              if( $_SESSION['cod_rol_sgp']=='administrador' || $_SESSION['cod_rol_sgp']=='profesor') : ?>
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead>
                  <?php 
                    require_once("../../core/mainModel.php");
                    $c = new mainModel();
                    $mostrar = $c->ejecutar_consulta_simple("SELECT * FROM equipo");
                  ?>
                    <tr>
                      <th>Código Equipo</th>
                      <th>Nombre Equipo</th>
                      <th>Código Semestre</th>
                      <th>Código Proyecto</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($mostrar as $rows) :?>
                    <tr>
                      <td><?php echo $rows['cod_equipo']?></td>
                      <td><a href="lista-alumno-grupo-vista.php"><?php echo $rows['nombre_equipo']?></a></td>
                      <td><?php echo $rows['cod_semestre']?></td>
                      <td><?php echo $rows['cod_proyecto']?></td>
                      <td><a href="formGrupo-update.php?cod=<?php echo $rows["cod_equipo"]?>&cod2=<?php echo $rows['cod_proyecto'];  ?>"><i class="far fa-edit"></i></td></a>
                      <td><a href="../../controladores/grupo.controlador-eliminar.php?cod=<?php echo $rows["cod_equipo"]; ?>"><i class="fas fa-times"></i></a></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              <?php endif ?>
              <!--lista grupo para alumno-->
              <?php
              if( $_SESSION['cod_rol_sgp']=='alumno') : ?>
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead>
                  <?php 
                    require_once("../../core/mainModel.php");
                    $c = new mainModel();
                    $mostrar = $c->ejecutar_consulta_simple("SELECT * FROM equipo");
                  ?>
                    <tr>
                      
                      <th>Código Equipo</th>
                      <th>Nombre Equipo</th>
                      <th>Código Semestre</th>
                      <th>Código Proyecto</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($mostrar as $rows) :?>
                    <tr>
                      <td><?php echo $rows['cod_equipo']?></td>
                      <td><a href="lista-alumno-grupo-vista.php"><?php echo $rows['nombre_equipo']?></a></td>
                      <td><?php echo $rows['cod_semestre']?></td>
                      <td><?php echo $rows['cod_proyecto']?></td>
                      <td><a href="formGrupo-update.php?cod=<?php echo $rows["cod_equipo"]?>&cod2=<?php echo $rows['cod_proyecto'];  ?>"><i class="far fa-edit"></i></td></a>
                    </tr>
                    <?php endforeach ?>
                  
                  </tbody>
                </table>
              <?php endif ?>    
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!--End Datatables-->
      </div>
      <!-- /.inner -->
    </div>
    <!-- /.outer -->
  </div>
<?php 
require_once "../extras/footer.php";
require_once "../extras/script.php";
?>
</body>
</html>