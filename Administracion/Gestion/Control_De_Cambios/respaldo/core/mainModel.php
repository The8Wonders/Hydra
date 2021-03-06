<?php

  if($peticionAjax){
    require_once "../core/configAPP.php";
  }else{
    require_once "./core/configAPP.php";
  }

  class mainModel{

    protected function conectar(){

      $enlace = new PDO(SGBD,USER,PASS);

      return $enlace;
    }

    protected function ejecutar_consulta_simple($consulta){

      $respuesta = mainModel::conectar()->prepare($consulta);
      $respuesta->execute();

      return $respuesta;
    }

    protected function nuevo_cuenta_rol($dato){
      $sql=self::conectar()->prepare("INSERT INTO rol(cod_rol) VALUES (:Rol)");

      $sql->bindParam(":Rol",$dato);
      $sql->execute();

      return $sql;
    }

    protected function eliminar_cuenta_rol($dato){
      $sql=self::conectar()->prepare("DELETE  FROM usuario WHERE rut== :Dato");
      $sql->bindParam(":Dato", $dato);
      $sql->execute();

      return $sql;
    }

    protected function nueva_cuenta($datos){
      $sql=self::conectar()->prepare("INSERT INTO usuario(rut, nombre, apellido, contraseña, genero, correo, telefono, cod_rol) 
      VALUES (:Rut, :Nombre, :Apellido, :Contraseña, :Genero, :Correo, :Telefono, :Cod_Rol)");

      $sql->bindParam(":Rut",$datos['Rut']);
      $sql->bindParam(":Nombre",$datos['Nombre']);
      $sql->bindParam(":Apellido",$datos['Apellido']);
      $sql->bindParam(":Contraseña",$datos['Contraseña']);
      $sql->bindParam(":Genero",$datos['Genero']);
      $sql->bindParam(":Correo",$datos['Correo']);
      $sql->bindParam(":Telefono",$datos['Telefono']);
      $sql->bindParam(":Cod_Rol",$datos['Cod_Rol']);
      $sql->execute();

      return $sql;
    }

    protected function eliminar_cuenta($codigo){
      $sql=self::conectar()->prepare("DELETE  FROM usuario WHERE rut== :Codigo");
      $sql->bindParam(":Codigo", $codigo);
      $sql->execute();

      return $sql;
    }

    public function encryption($string){
      $output=FALSE;
      $key=hash('sha256', SECRET_KEY);
      $iv=substr(hash('sha256', SECRET_IV),0, 16);
      $output=openssl_encrypt($string, METHOD, $key, 0 ,$iv);
      $output=base64_encode($output);

      return $output;
    }

    protected function decryption($string){
      $key=hash('sha256', SECRET_KEY);
      $iv=substr(hash('sha256', SECRET_IV),0, 16);
      $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);

      return $output;
    }

    protected function generar_codigo_aleatorio($letra, $longitud ,$num){
      for($i=1; $i<=$longitud; $i++){
        $numero = rand(0,9);

        $letra.=$numero;
      }

      return $letra.$num;
    }

    protected function limpiar_rut($variable){
      $variable=str_ireplace(".","",$variable);
      $variable=str_ireplace("-","",$variable);
    }

    protected function limpiar_cadena($cadena){
      /*trim elimina los espacios del string*/
      $cadena=trim($cadena);

      /*stripslashes elimina barras invertidas*/
      $cadena=stripslashes($cadena);

      /*str_ireplace reemplaza lo primero por lo segundo en lo tercero*/
      $cadena=str_ireplace(".<script>", "", $cadena);
      $cadena=str_ireplace(".</script>", "", $cadena);
      $cadena=str_ireplace(".<script src", "", $cadena);
      $cadena=str_ireplace(".<script type=", "", $cadena);
      $cadena=str_ireplace("SELECT * FROM", "", $cadena);
      $cadena=str_ireplace("DELETE FROM", "", $cadena);
      $cadena=str_ireplace("INSERT INTO", "", $cadena);
      $cadena=str_ireplace("--", "", $cadena);
      $cadena=str_ireplace("^", "", $cadena);
      $cadena=str_ireplace("[", "", $cadena);
      $cadena=str_ireplace("]", "", $cadena);
      $cadena=str_ireplace("==", "", $cadena);
      $cadena=str_ireplace("===", "", $cadena);
      $cadena=str_ireplace(";", "", $cadena);

      return  $cadena;
    }

    protected function alertas($datos){
      if($datos['Alerta'] == "simple"){
        $alerta = "
          <script>
            swal.fire(
              '".$datos['Titulo']."',
              '".$datos['Texto']."',
              '".$datos['Tipo']."'
            );
          </script>
        ";
      }elseif($datos['Alerta'] == "recargar"){
        $alerta = "
          <script>
          swal.fire({
            title: '".$datos['Titulo']."',
            text: '".$datos['Texto']."',
            type: '".$datos['Tipo']."',
            confirmButtonText: 'Aceptar'
          }).then(function () {
            location.reload();
          });
          </script>
        ";
      }elseif($datos['Alerta'] == "limpiar"){
        $alerta = "
          <script>
          swal.fire({
            title: '".$datos['Titulo']."',
            text: '".$datos['Texto']."',
            type: '".$datos['Tipo']."',
            confirmButtonText: 'Aceptar'
          }).then(function () {
            $('.FormularioAjax')[0].reset();
          });
          </script>
        ";
      }

      return $alerta;
    }
  }