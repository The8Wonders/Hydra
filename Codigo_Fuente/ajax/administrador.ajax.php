
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
      echo'<script> window.location.href="../index.php" </script>';
    }