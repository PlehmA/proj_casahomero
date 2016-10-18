<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Casa homero</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
  </head>
  <body>

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
  echo "<a href='new_insert_productos.html' class='btn btn-info'>Ingresar un nuevo producto</a>";
  echo "<br>";
  echo "<br>";
  echo "<a href='welcome.php' class='btn btn-danger'>Salir</a>";
  echo "</div> ";
?>
