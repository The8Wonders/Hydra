<?php

require_once "configAPP.php";

class mainModel
{

  public function conectar()
  {

    $enlace = new PDO(SGBD, USER, PASS);

    return $enlace;
  }

  public function ejecutar_consulta_simple($consulta)
  {

    $respuesta = mainModel::conectar()->prepare($consulta);
    $respuesta->execute();

    return $respuesta;
  }

  public function nueva_cuenta($datos)
  {
    $sql = self::conectar()->prepare("INSERT INTO usuario VALUES (:Rut, :Nombre, :Apellido, :Clave, :Correo, :Telefono, :Rol)");

    $sql->bindParam(":Rut", $datos['Rut']);
    $sql->bindParam(":Nombre", $datos['Nombre']);
    $sql->bindParam(":Apellido", $datos['Apellido']);
    $sql->bindParam(":Clave", $datos['Contra']);
    $sql->bindParam(":Correo", $datos['Correo']);
    $sql->bindParam(":Telefono", $datos['Telefono']);
    $sql->bindParam(":Rol", $datos['Rol']);
    $sql->execute();

    return $sql;
  }

  public function eliminar_cuenta($codigo)
  {
    $sql = self::conectar()->prepare("DELETE  FROM usuario WHERE rut= :Codigo");
    $sql->bindParam(":Codigo", $codigo);
    $sql->execute();

    return $sql;
  }

  public function update_cuenta($datos){ 
    $sql= self::conectar()->prepare("UPDATE usuario SET 
    nombre=:Nombre, apellido=:Apellido, telefono=:Telefono, contraseña=:Clave WHERE rut=:Rut");

    $sql->bindParam(":Rut",$datos['Rut']);
    $sql->bindParam(":Nombre",$datos['Nombre']);
    $sql->bindParam(":Apellido",$datos['Apellido']);
    $sql->bindParam(":Telefono",$datos['Telefono']);
    $sql->bindParam(":Clave",$datos['Contra']);
    $sql->execute();

    return $sql;
  }

  public function contraseña_cuenta($datos){ 
    $sql= self::conectar()->prepare("UPDATE usuario SET 
   contraseña=:Clave WHERE rut=:Rut");

    $sql->bindParam(":Rut",$datos['Rut']);
    $sql->bindParam(":Clave",$datos['Contra']);
    $sql->execute();

    return $sql;
  }


  public function encryption($string)
  {
    $output = FALSE;
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
    $output = base64_encode($output);

    return $output;
  }

  public function decryption($string)
  {
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);

    return $output;
  }

  public function generar_codigo_aleatorio($letra, $longitud, $num)
  {
    for ($i = 1; $i <= $longitud; $i++) {
      $numero = rand(0, 9);

      $letra .= $numero;
    }

    return $letra . $num;
  }

  public function limpiar_rut($variable)
  {
    $variable = str_ireplace(".", "", $variable);
    $variable = str_ireplace("-", "", $variable);
    return $variable;
  }

  public function limpiar_cadena($cadena)
  {
    /*trim elimina los espacios del string*/
    $cadena = trim($cadena);

    /*stripslashes elimina barras invertidas*/
    $cadena = stripslashes($cadena);

    /*str_ireplace reemplaza lo primero por lo segundo en lo tercero*/
    $cadena = str_ireplace(".<script>", "", $cadena);
    $cadena = str_ireplace(".</script>", "", $cadena);
    $cadena = str_ireplace(".<script src", "", $cadena);
    $cadena = str_ireplace(".<script type=", "", $cadena);
    $cadena = str_ireplace("SELECT * FROM", "", $cadena);
    $cadena = str_ireplace("DELETE FROM", "", $cadena);
    $cadena = str_ireplace("INSERT INTO", "", $cadena);
    $cadena = str_ireplace("--", "", $cadena);
    $cadena = str_ireplace("^", "", $cadena);
    $cadena = str_ireplace("[", "", $cadena);
    $cadena = str_ireplace("]", "", $cadena);
    $cadena = str_ireplace("==", "", $cadena);
    $cadena = str_ireplace("===", "", $cadena);
    $cadena = str_ireplace(";", "", $cadena);

    return  $cadena;
  }
}
