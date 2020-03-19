<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  
  <!--empezar if aca-->
  <div class="container">
  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">


        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <h1>Bienvenido Alumno</h1>

              <h3>Parece que no tienes grupo</h3>
              <h3>¿Qué deseas hacer?</h3>
              <br> 

              
              <a href="#" class="btn btn-primary" role="button">Crear nuevo grupo</a>

              <!--cambiar color-->
              <a href="#" class="btn btn-primary" role="button">Unirse a grupo</a>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!--cerrar if aca-->


<!--en caso de que ya tenga grupo-->
   <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">


        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <h1>Bienvenido Alumno</h1>
              <h3>¿Qué deseas hacer?</h3>
              <br> 

              
              <a href="#" class="btn btn-primary" role="button">Ver proyecto</a>

              <!--cambiar color-->
              <a href="#" class="btn btn-primary" role="button">Ver grupo</a>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!--cerrar if aca-->
</div>

</body>

<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>

</html>