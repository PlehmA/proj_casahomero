<?php
session_start();
if ($_SESSION['logeado']) {
  header('Content-Type: text/html;charset=utf-8');
  include_once 'includes/bdd.php';
  $con = crearConexion();
  $con -> set_charset("utf-8");
  if (isset($_POST['guardar'])) {
    $idProducto = $_POST['idpro'];
    $idCategoria = $_POST['categoria'];
    $precioPro = $_POST['precio'];
    $descripcionPro = $_POST['descripcion'];
    $cantidadPro = $_POST['cantidad'];
    $sql = "UPDATE productos set id_categoria='$idCategoria',descripcion='$descripcionPro',cantidad='$cantidadPro',precio='$precioPro' WHERE id_producto=".$idProducto;
    $result = $con->query($sql);
    $con->close();
    header("Location:list_productos.php");
  }
}
 ?>
