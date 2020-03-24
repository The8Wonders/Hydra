<?php
    require("../../modelo/grupo.modelo.php");

   class equipocontrolador_delete extends grupo_modelo{


        public function nuevo_equipo(){

            $id = $_GET["nombre"];
            
            $eliminar = grupo_modelo::deleteGrupo($id);

            return $eliminar;

        }
   }

   $res = new equipocontrolador_delete;
   $sql = $res->nuevo_equipo();

   header("Location:../vistas/contenidos/tableGrupo-vistas");

?>