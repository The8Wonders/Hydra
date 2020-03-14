<?php
require_once "../core/mainModel.php";

class Enviarcorreo extends Mainmodel{
    public static function sendmail($destino,$asunto,$msje){
        try{
            $contenido=
            '<html>'.
            '<head>
                <title>Sistema De Gestión De Proyectos</title>
            </head>'.
            '<body>
                <h1>'.$asunto.'</h1>'
                .$msje.
                '<hr>'.
                'Enviado automaticamente. No responder'.
            '</body>'.
            '</html>';
            $cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $cabeceras.= 'From: no-responder@face.ubiobio.cl' . "\r\n" . "\r\n";
            mail($destino,$asunto,$contenido,$cabeceras);

        }catch(Exception $e){
            echo $e->getMessage();
            echo "<br> La línea de error es: ". $e->getLine();
            echo $e->errorInfo();
        }
    }
}
?>