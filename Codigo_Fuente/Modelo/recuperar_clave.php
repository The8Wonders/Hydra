<?php
require_once "../core/mainModel.php";
class recuperar_clave extends mainModel{
    public function __construct(){
        try{
            if(isset($_POST['email'])){
                $query = mainModel::conectar()->prepare("SELECT contra FROM usuario WHERE correo=:Correo");
                $query->bindParam(":Correo", $_POST['email']);
                $query->execute();
                $res= $query->fetch(PDO::FETCH_ASSOC);
                $res= mainModel::decryption($res['contra']);
                $titulo= "SISTEMA DE RECUPERACIÓN DE CONTRASEÑAS";
                $msje= "SU CONTRASEÑA ES: <p>".$res."<p><br>\r\n Para volver a iniciar sesión solo debe ingresar <a href='http://198-35.eq.ubiobio.cl:1044/'>al enlace</a><br>\r\n Si todavia presenta problemas por favor contacte al administrador.";
                $cabeceras= 'From: sistema-gestion-proyecto@face.ubiobio.cl' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

                mail($_POST['email'],$titulo,$msje,$cabeceras);
                header("Location:../index.php");
            }
        }catch(Exeption $e){
            echo "Error en la línea". $e->getLine();
            echo $e->getMessage();
        }
    }
}
$clave= new recuperar_clave;
?>