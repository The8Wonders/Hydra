<?php
class file{
    public function file(){
        $resultado= null;
        
        if(isset($_POST['form'])){
            $file= $_FILES['work'];
            print_r($file);

            $name=  $_FILES['work']['name'];
            $tmp_name= $_FILES['work']['tmp_name'];
            $error= $_FILES['work']['error'];
            $size= $_FILES['work']['size'];
            $type= $_FILES['work']['type'];

            if($error){
                $resultado= "ha ocurrido un error";
            }else{
                $ruta= 'files/'.$name;
                move_uploaded_file($tmp_name,$ruta);
                $resultado= "se subió el archivo";
            }
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File</title>
</head>
<body>
    <strong><?php echo $resultado;?></strong>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
        <p>file</p>
        <input type="file" name="work" id="work">
        <input type="hidden" name="form">
        <br><br>
        <input type="submit" value="Subir Archivo">
    </form>
</body>
</html>