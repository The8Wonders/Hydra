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
    $sql = self::conectar()->prepare("DELETE FROM usuario WHERE rut= :Codigo");
    $sql->bindParam(":Codigo", $codigo);
    $sql->execute();

    return $sql;
  }

  public function update_cuenta($datos)
  {
    $sql = self::conectar()->prepare("UPDATE usuario SET 
    nombre=:Nombre, apellido=:Apellido, telefono=:Telefono, correo=:Correo, cod_rol=:Cod WHERE rut=:Rut");

    $sql->bindParam(":Rut", $datos['Rut']);
    $sql->bindParam(":Nombre", $datos['Nombre']);
    $sql->bindParam(":Apellido", $datos['Apellido']);
    $sql->bindParam(":Telefono", $datos['Telefono']);
    $sql->bindParam(":Correo", $datos['Correo']);
    $sql->bindParam(":Cod", $datos['Rol']);
    $sql->execute();

    return $sql;
  }

  public function contraseña_cuenta($datos)
  {
    $sql = self::conectar()->prepare("UPDATE usuario SET 
   contraseña=:Clave WHERE rut=:Rut");

    $sql->bindParam(":Rut", $datos['Rut']);
    $sql->bindParam(":Clave", $datos['Contra']);
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

  public function verificar_rut($string)
  {
    $largo = strlen($string) - 1;
    $arr1 = str_split($string);
    $verificador = $arr1[$largo];

    for ($i = 1; $i <= $largo; $i++) {
      $giro[$i - 1] = $arr1[$largo - $i];
    }

    for ($i = 0; $i < $largo; $i++) {
      if ($i == 0) {
        $mul = 2;
        $sum1 = 0;
      } else {
        if ($mul == 7) {
          $mul = 2;
        } else {
          $mul = $mul + 1;
        }
      }
      $sum1 = ($giro[$i] * $mul) + $sum1;
    }
    $sum2 = intval($sum1 / 11);
    $sum2 = $sum2 * 11;
    $div = abs($sum1 - $sum2);
    $Sverificador = 11 - $div;
    if ($Sverificador == $verificador) {
      $cadena = "TRUE";
    } else {
      if ($Sverificador == 11 && $verificador == 0) {
        $cadena = "TRUE";
      } else {
        if ($Sverificador == 10 && ($verificador == 'k' || $verificador == 'K')) {
          $cadena = "TRUE";
        } else {
          $cadena = "FALSE";
        }
      }
    }
    return $cadena;
  }

  public static function sendmail($destino, $asunto, $msje)
  {
    try {
      $contenido =
        '<html>' .
        '<head>
            <title>Sistema De Gestión De Proyectos</title>
        </head>' .
        '<body>
            <h3>Sistema De Gestión De Proyectos</h3>'
        . '<p>' . $msje . '</p>' 
        . '<hr>' .
        'Enviado automaticamente. No responder' .
        '</body>' .
        '</html>';
      $cabeceras = 'MIME-Version: 1.0' . "\r\n";
      $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      //$cabeceras.= 'From: no-responder@face.ubiobio.cl' . "\r\n" . "\r\n";
      mail($destino, $asunto, $contenido, $cabeceras);
    } catch (Exception $e) {
      echo $e->getMessage();
      echo "<br> La línea de error es: " . $e->getLine();
      echo $e->errorInfo();
    }
  }
}
