<?php
$dir= "https://api.trello.com/1/members/me/boards?key=7ff5e189041bce080b065154e779a324&token=cbbcfa25fe2b21d4d323bd2f0f2fea0457fcaf5b8c37cb4b052a19c1cbd3e62a";

$dir_json= file_get_contents($dir);
$dir_array= json_decode($dir_json,true);
//var_dump($dir_array[0]['url']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
  <?php require_once "../extras/estilos.php"; ?>
  <title>Home</title>
</head>
<body>
  <?php require_once "../extras/barra.php"; ?>

  <?php if($_SESSION['cod_rol_sgp']=='administrador'):?>
    <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
                <h1>Esta es la pantalla del Administrador</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php endif ?>

  <?php if($_SESSION['cod_rol_sgp']=='alumno'):?>
    <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
      <div class="container">
      <div class="row">
          <div class="col-md-6">
            <div class="box dark">
                <h1>Esta es la pantalla del Alumno</h1>
            </div>
           <?php $rut= $_SESSION['rut_sgp'];
           include "../../core/mainModel.php";
           $c = new mainModel();
           $sql = $c->ejecutar_consulta_simple("SELECT *  FROM usuario u, alumno a, 
           equipo e WHERE u.rut=a.rut AND a.cod_equipo= e.cod_equipo AND u.rut='$rut'");
            if($sql->rowCount()==0){ ?>
            <div class="row">
              <div class="col-lg-12">
              <h3>¿Qué deseas hacer?</h3>
              <br> 

              
              <a href="#" class="btn btn-primary" role="button">Crear Equipo</a>

              <!--cambiar color-->
              <a href="#" class="btn btn-primary" role="button">Ver Equipos disponibles</a>
                </div>
              </div><?php }?>

              <?php if($sql->rowCount()>=1){ ?>
            <div class="row">
              <div class="col-lg-12">
              <h3>¿Qué deseas hacer?</h3>
              <br> 

              
              <a href="mi.grupo-vista.php" class="btn btn-primary" role="button">Ver Mi Equipo</a>

              <!--cambiar color-->
              <a href="tableGrupo-vistas.php" class="btn btn-primary" role="button">Ver Listado de Equipos</a>
                </div>
              </div><?php }?>
              
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h3>Conectate con Trello</h3>
          <blockquote class="trello-board-compact">
              <a href="<?php echo $dir_array[0]['url']; ?>">Tablero Trello</a>
          </blockquote>
        </div>
      </div>
      </div>
    </div>
  </div>
  </div>
  <?php endif ?>

  <?php if($_SESSION['cod_rol_sgp']=='profesor'):?>
    <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">


        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
                <h1>Esta es la pantalla del Profesor</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php endif ?>

  <script src="https://p.trellocdn.com/embed.min.js"></script>
  <script src="../assets/js/administrador.js"></script>
  <?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>
</body>
</html>
