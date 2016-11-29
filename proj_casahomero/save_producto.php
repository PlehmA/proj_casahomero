<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Casa homero</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
<style media="screen">
  h3{
    text-align: center;
    padding-bottom: 25px;
  }
  a{
    width: 420px;
    margin: 0 auto;
  }
  #caja{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);

  }
</style>
  </head>
  <body>
    <script src="js/jquery-3.1.1.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
<?php
  $nombre = $_POST['descripcion'];
  $valor = $_POST['precio'];
  $cant = $_POST['cantidad'];
  $id_cat = $_POST['categoria'];
  header('Content-Type: text/html;charset=utf-8');
  include_once 'includes/bdd.php';
  $con = crearConexion();
  $con -> set_charset("utf-8");
  $sql = 'INSERT INTO productos(descripcion,cantidad,precio,id_categoria) values (?,?,?,?)';
  $stmt=$con->prepare($sql);
  $stmt->bind_param('sidi', $nombre, $cant, $valor, $id_cat);
  $stmt->execute();
  $con->close();
  echo "<div id='caja'>";
  echo "<h3>¡ Producto almacenado correctamente !</h3>";
  echo "<a href='new_insert_productos.php' class='btn btn-info'>Ingresar un nuevo producto</a>";
  echo "<br>";
  echo "<br>";
  echo "<a href='welcome.php' class='btn btn-danger'>Salir</a>";
  echo "</div> ";
?>
