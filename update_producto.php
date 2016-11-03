<?php
session_start();
if ($_SESSION['logeado']) {
  header('Content-Type: text/html;charset=utf-8');
  include_once 'includes/bdd.php';
  $con = crearConexion();
  $con -> set_charset("utf-8");
  if (isset($_GET['id'])) {
  $codUpdate = $_GET['id'];
    $sql = "SELECT p.id_producto,p.id_categoria,p.descripcion,p.cantidad,p.precio,c.descripcion from productos p inner join categorias c on p.id_categoria=c.id_categoria WHERE p.id_producto=".$codUpdate;
    $result = $con->query($sql);
    $row =$result->fetch_row();

  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="css\font-awesome.css" media="screen" title="no title">
  </head>
  <body>
    <!-- Form Name -->
    <h1 class="jumbotron text-center">Actualizar productos</h1>
    <form class="form-horizontal" action="save_producto_all.php" method="POST">
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcion"></label>
  <div class="col-md-5">
  <input id="descripcion" name="descripcion" type="text" placeholder="Descripcion" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="precio"></label>
  <div class="col-md-5">
  <input id="precio" name="precio" type="text" placeholder="Precio" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cantidad"></label>
  <div class="col-md-5">
  <input id="cantidad" name="cantidad" type="text" placeholder="Cantidad" class="form-control input-md">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="categoria"></label>
  <div class="col-md-5">
    <select id="categoria" name="categoria" class="form-control">
      <option value="<php $row=[2] ?>"></option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="guardar"></label>
  <div class="col-md-4">
    <button id="guardar" name="guardar" class="btn btn-success">Guardar</button>
  </div>
</div>

</fieldset>
</form>
<script src="js\jquery-3.1.1.js" charset="utf-8"></script>
<script src="js\bootstrap.js" charset="utf-8"></script>
  </body>
</html>