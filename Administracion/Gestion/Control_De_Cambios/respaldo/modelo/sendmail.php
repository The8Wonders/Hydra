<?php
class Enviarcorreo{
    public static function sendmail($destino,$asunto,$msje){
        try{

            mail($destino,$asunto,$msje);

        }catch(Exception $e){
            echo $e->getMessage();
            echo "<br> La línea de error es: ". $e->getLine();
            echo $e->errorInfo();
        }
    }
}
?>