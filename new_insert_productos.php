<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css\font-awesome.css">
  </head>
  <body>
    <style>
    form
    {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
    }

    </style>
    <div class="container text-center">
      <h1 class="jumbotron text-center">Agregar productos</h1>
      <div class="span3">
        <form class="form-horizontal" action="save_producto.php" method="POST" accept-charset="utf-8">
          <div class="form-group text-center">
            <label class="control-label col-md-3" >Descripción: </label>
            <div class="col-md-9"><input type="text" placeholder="Descripcion" required name="descripcion"></div>
          </div>
          <div class="form-group"><label class="control-label col-md-3" >Precio: </label>
            <div class="col-md-9"><input type="text" placeholder="Precio" required name="precio"></div>
          </div>
          <div class="form-group"><label class="control-label col-md-3" >Cantidad: </label>
            <div class="col-md-9"><input type="text" placeholder="Cantidad" required name="cantidad"></div>
          </div>
          <div class="form-group">
               <label class="control-label col-md-3" >Categorias:</label>
               <div class="col-md-6">
                 <select class="form-control col-md-6" name="categoria">
                  <?php
                  header('Content-Type: text/html;charset=utf-8');
                  include_once 'includes/bdd.php';
                  $con = crearConexion();
                  $con -> set_charset("utf-8");
                  $sql = "SELECT id_categoria, descripcion FROM categorias order by descripcion";
                  $result=$con->query($sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$row['id_categoria'].'">'.$row['descripcion'].'</option>';
                  }

                   ?>
                  </select>
                  </div>
            </div>
          <div class="form-group"><label class="control-label col-md-3" hidden="Descripción"></label>
            <div class="col-md-9 text-center"><button type="submit" name="button" class="btn btn-info"><span><i class="fa fa-upload" aria-hidden="true"></i>
    </span>Agregar</button></div>
          </div>
        </form>
      </div>


    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js\bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
