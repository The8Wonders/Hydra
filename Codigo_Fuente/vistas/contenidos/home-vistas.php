<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php require_once "../extras/barra.php"; ?>
    <h1> Bienvenido Sr(a). <?php echo $_SESSION['nombre']." ". $_SESSION['apellido']; ?>. Esta es la pantalla de Home de Usted Como <?php echo " ".$_SESSION['rol']; ?></h1>
    <?php 
        require_once "../extras/footer.php"; 
        require_once "../extras/script.php";
    ?>
</body>
</html>