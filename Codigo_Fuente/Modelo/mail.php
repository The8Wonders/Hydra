<?php

$destino= $_POST['destino'];
$asunto= $_POST['asunto'];
$msje= $_POST['msje'];
mail($destino,$asunto,$msje);
header("Location:form_mail.php");
?>