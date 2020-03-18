<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail</title>
</head>
<body>
    <form action="mail.php" method="post" encrypte="multipart/form-data">
        <input type="mail" name="destino" placeholder="Para:"><br><br>
        <input type="text" name="asunto" placeholder="Asunto:"><br><br>
        <input type="text"name="msje"placeholder="Mensaje:"><br><br>
        <input type="submit" value="Enviar Correo">
    </form>
</body>
</html>