<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto</title>
</head>

<body>

  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
        <!--Begin Datatables-->
        <div class="row">
          <div class="col-lg-12">
            <div class="box">
              <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Proyecto</h5>
              </header>
              <div id="collapse4" class="body">
                
                <?php include "../../core/mainModel.php";
                $c=new mainModel();


              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!--End Datatables-->
      </div>
      <!-- /.inner -->
    </div>
    <!-- /.outer -->
  </div>
  </div>



</body>

</html>

<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>