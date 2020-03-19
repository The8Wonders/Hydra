<?php
require_once "sendmail.php";
class recuperar_clave extends Enviarcorreo{

    public function __construct(){

        try{
            if(isset($_POST['email'])){
                $destino= $_POST['email'];
                $asunto= "[SGP] Recuperar contraseña";
                $query= "SELECT * FROM usuario WHERE correo='$destino'";
                $row= mainModel::ejecutar_consulta_simple($query);

                if($row->rowCount()==1){
                    $array= $row->fetch(PDO::FETCH_ASSOC);
                    $contraseña= mainModel::decryption($array['contraseña']);
                    $mensaje= "Su clave es: ". $contraseña;
                    Enviarcorreo::sendmail($destino,$asunto,$mensaje);
                }
                
                return header("Location:../index.php");
            }else{
                return header("Location:../index.php");
            }
        }catch(Exception $e){
            $e->getLine();
            $e->getMessege();
        }
    }
}
$email= new recuperar_clave;
?>