<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto</title>
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
                <h5>Proyecto</h5>
              </header>
              <div id="collapse4" class="body">

                <?php require_once "../../core/mainModel.php";
                $c = new mainModel;
                $codigo_proyecto = $_GET['cod'];
                $datos = $c->ejecutar_consulta_simple("SELECT * FROM proyecto WHERE cod_proyecto='$codigo_proyecto' "); ?>

                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                  <thead>

                    <tr>
                      <th>Codigo Proyecto</th>
                      <th>Nombre Proyecto</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Termino</th>
                      <th>Fecha Inicio Real</th>
                      <th>Fecha Termino Real</th>
                      <th>Descripcion</th>
                      <th>Sigla</th>
                      <th>Tipo Desarrollo</th>
                      <th>Codigo Semestre</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach ($datos as $rows) { ?>
                        <td><?php echo $rows['cod_proyecto'] ?></td>
                        <td><?php echo $rows['nom_proyecto'] ?></a></td>
                        <td><?php echo $rows['fecha_inicio'] ?></td>
                        <td><?php echo $rows['fecha_fin'] ?></td>
                        <td><?php echo $rows['fecha_inicio_real'] ?></td>
                        <td><?php echo $rows['fecha_fin_real'] ?></td>
                        <td><?php echo $rows['descripcion_proyecto'] ?></td>
                        <td><?php echo $rows['sigla'] ?></td>
                        <td><?php echo $rows['tipo_desarrollo'] ?></td>
                        <td><?php echo $rows['cod_semestre'] ?></td>
                      <?php } ?>
                    </tr>
                  </tbody>
                </table>

                <?php
                $alumnos = $c->ejecutar_consulta_simple("SELECT * FROM alumno a, equipo e, proyecto p , usuario u
                WHERE u.rut=a.rut and p.cod_proyecto=e.cod_proyecto and e.cod_equipo=a.cod_equipo and p.cod_proyecto='$codigo_proyecto' ");

                if ($alumnos->rowCount() >= 1) { ?>
                  <div>
                    <h2>Alumnos pertenecientes al Proyecto</h2>
                  </div>

                  <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                    <thead>
                      <tr>
                        <th>R.U.T</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carrera</th>
                        <th>Año ingreso</th>
                        <th>Código Equipo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php foreach ($alumnos as $fila) { ?>
                          <td><?php echo $fila['rut'] ?></td>
                          <td><?php echo $fila['nombre'] ?></td>
                          <td><?php echo $fila['apellido'] ?></td>
                          <td><?php echo $fila['carrera'] ?></td>
                          <td><?php echo $fila['ano_ingreso'] ?></td>
                          <td><?php echo $fila['cod_equipo'] ?></td>
                        <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  </div>



</body>

</html>

<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>