<?php

/*class sql {

    private $db;

    public function __construct(){

        try{
            require "conexion.php";

            $this->db= Conectar::Conexion();

        }catch(Exception $e){
            echo "La Línea de error es: ". $e->getLine();
        }
    }

    public function agregar_cuenta(){
        try{
            $query= "INSERT INTO cuenta VALUES (1,'ewkme','kwemke','kmwekmew')";

            $sql= $this->db->prepare($query);

            $sql->execute();

            return $sql;
        }catch(Excepcion $e){
            echo "La Línea de error es: ". $e->getLine();
        }
    }

}

$cuenta= new sql();
$cuenta->agregar_cuenta();*/

require "conexion.php";
$db= Conectar::Conexion();
$query= "INSERT INTO cuenta VALUES (1,'ewkme','kwemke','kmwekmew')";
$sql= $db->query($query);
if($sql){
    echo "se ingreso a cuenta";
}else{
    echo "no se ingreso a cuenta";
}
echo "<br><br><br>";

$query= "SELECT * FROM cuenta";
$sql= $db->query($query);
while($fila= $sql->fetch(PDO::FETCH_ASSOC)){
    $usuario[]= $fila;
}

foreach($usuario as $fila){
    echo $fila;
}








?>