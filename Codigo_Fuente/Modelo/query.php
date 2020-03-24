<?php
require_once "../core/mainModel.php";

$query= "INSERT INTO alumno VALUES ('rut','carrera',2020,true,'2020/01/01','fp','2019-2','001') ";
$sql= mainModel::conectar()->prepare($query);
$sql->execute();
if($sql->rowCount()==1){
    echo "se borro correctamente";
}else{
    echo "no se borro";
}





?>