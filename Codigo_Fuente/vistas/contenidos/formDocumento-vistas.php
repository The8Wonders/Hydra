<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema de gestion de proyectos">
  <meta name="keywords" content="Gestión, Proyectos">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logoubb.png">
  <?php require_once "../extras/estilos.php";
  require_once "../extras/barra.php" ?>
  <title>Subir Documento</title>
</head>

<body>
  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">


        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <header>
                <div class="icons"><i class="fa fa-edit"></i></div>
                <h5>Nuevo Administrador</h5>
              </header>
              <div id="collapse2" class="body">
                <form class="form-horizontal" action="" method="POST" id="formDocumento" enctype="multipart/form-data">

                  <fieldset>
                    <!--Nombres Administrador-->
                    <div class="form-group">
                      <label for="nombre" class="control-label col-lg-2">Nombre Documento</label>

                      <div class="col-lg-4">
                        <input name="nombre" type="text" id="nombre" class="form-control" required>
                      </div>

                      <label for="tamaño" class="control-label col-lg-2">Tamaño Docuento</label>

                      <div class="col-lg-4">
                        <input name="tamaño" type="text" id="tamño" class="form-control" required>
                      </div>
                    </div>

                    <!--Apellidos Administrador-->
                    <div class="form-group">
                      <label for="tipo" class="control-label col-lg-2">Tipo Documento</label>

                      <div class="col-lg-4">
                        <input name="tipo" type="text" id="tipo" class="form-control" required>
                      </div>

                      <label for="descripcion" class="control-label col-lg-2">Descripcion Documento</label>

                      <div class="col-lg-4">
                        <input name="descripcion" type="text" id="descripcion" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Documento</label>
                      <div class="col-lg-4">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <span class="btn btn-default btn-file">
                            <span class="fileinput-new">Selecione Documento</span>
                            <input type="file" name="documento">
                          </span>
                          <span class="fileinput-filename"></span>
                        </div>

                      </div>
                      <label for="nombre-pro" class="control-label col-lg-2"> Proyecto </label>

                      <div class="col-lg-4">
                        <input name="nombre-pro" type="text" id="nombre-pro" class="form-control" value="<?php echo $_GET['nombre'] ?>">
                      </div>
                    </div>

                    <?php require_once "../../core/mainModel.php";
                    $c = new mainModel();
                    $CodPro = $c->decryption($_GET['cod']); ?>
                    <input type="hidden" name="cod_proyecto" value="<?php $CodPro ?>">

                    <div class="form-actions">
                      <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/js/documento.js"></script>

</body>
<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>