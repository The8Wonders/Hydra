<?php
$dir= "https://api.trello.com/1/members/me/boards?key=7ff5e189041bce080b065154e779a324&token=cbbcfa25fe2b21d4d323bd2f0f2fea0457fcaf5b8c37cb4b052a19c1cbd3e62a";

$dir_json= file_get_contents($dir);
$dir_array= json_decode($dir_json,true);
var_dump($dir_array[0]['url']);
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

  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">


        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
                <h1>Esta es la pantalla Home</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/js/administrador.js"></script>
  <?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>
</body>
</html>
