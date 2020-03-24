<?php

    require("../../core/mainModel.php");

    

    class grupo_modelo extends mainModel{
       
        private $bd;
        private $grupo;


        function __construct(){

            try{
            $this->bd=mainModel::conectar();
             self::getGrupo();   
            $this->grupo= array();
            }catch(Exception $e){
                echo "Error:" . $e->getMessage();
                echo "Linea:" . $e->getLine();
            }    


        }

        public function setGrupo($datos){

            $insertar=$this->bd->prepare("INSERT INTO equipo VALUES (:nomE,:codS)");
            $insertar->bindParam(":nomE",$datos['nombre_equipo']);
            $insertar->bindParam(":codS",$datos['cod_semestre']);
            $insertar->execute();
            
            return $insertar;

        }

        public function getGrupo(){

            try{
            $resultado=$this->bd->query("SELECT * FROM equipo");

            while( $fila = $resultado->fetch(PDO::FETCH_ASSOC)){

                $this->grupo [] = $fila;

            }
                return $this->grupo;
            }catch(Exception $e){
                echo "Error:" . $e->getMessage();
                echo "Linea:" . $e->getLine();
            }
            

        }

        public function deleteGrupo($cod){

            $eliminar=$this->bd->prepare("DELETE FROM equipo WHERE cod_equipo=:cod");
            $eliminar->bindParaman(":cod",$cod);
            $eliminar->execute();

            return $eliminar;

        }

        public function updateGrupoAl($datos){

            $actualizar=$this->bd->prepare("UPDATE equipo SET nombre_equipo=:datos");
            $actualizar->bindParam(":datos",$datos);
            $actualizar->execute();

            return $actualizar ;
        }


        public function updateGrupoAdm($datos){

            $actualizar=$this->bd->prepare("UPDATE equipo SET cod_equipo = :code, nombre_equipo=:nome, cod_semestre=:cods, cod_proyecto=:codp");
            $actualizar_adm->bindParam(":code",$datos['cod_equipo']);
            $actualizar_adm->bindParam(":nome",$datos['nombre_equipo']);
            $actualizar_adm->bindParam(":cods",$datos['cod_semestre']);
            $actualizar_adm>bindParam(":codp",$datos['cod_proyecto']);

            $actualizar_adm->execute();

            return $actualizar_adm ;
        }



     
    }







    


?>