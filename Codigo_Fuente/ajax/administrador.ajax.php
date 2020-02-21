<?php require_once "../core/general.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <!-- Sweet Alert -->
 <link rel="stylesheet" href="<?php echo RUTA ?>vistas/assets/plugins/SweetAlert/dist/sweetalert2.min.css">
<script src="<?php echo RUTA?>vistas/assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
  
</body>
</html>
<?php
    
    $peticionAjax=true;
    
   



    if(isset($_POST['rut'])){
        require_once "../controladores/administrador.controlador.php";
        $insAdmin = new administradorcontrolador(); 

        if(isset($_POST['rut']) && isset($_POST['nombre1']) && isset($_POST['nombre2']) && isset($_POST['apellido1']) && isset($_POST['apellido2'])){
            echo $insAdmin->nuevo_administrador_controlador();
        }
    }else{
      session_start();
      session_destroy();
      echo'<script> window.location.href="'.RUTA.'login/" </script>';
    }