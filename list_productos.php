<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listar productos</title>
    <link rel="stylesheet" href="css\bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron text-center">
        <h2>LISTAR PRODUCTOS</h2>
      </div>
    </div>
      <div class="container">
        <div class="table-responsive">
          <table class="table">
            <?php
            header('Content-Type: text/html;charset=utf-8');
            include_once 'includes/bdd.php';
            $con = crearConexion();
            $con -> set_charset("utf-8");
            $sql="SELECT pro.id_producto,pro.descripcion,pro.precio,pro.cantidad,cat.descripcion from categorias cat inner join productos pro on cat.id_categoria=pro.id_categoria order by pro.descripcion";
            $result=$con->query($sql);
            echo "<thead>";
            echo "<tr>";
            echo "<th>";
            echo "Codigo";
            echo "</th>";
            echo "<th>";
            echo "Descripcion";
            echo "</th>";
            echo "<th>";
            echo "Precio";
            echo "</th>";
            echo "<th>";
            echo "Cantidad";
            echo "</th>";
            echo "<th>";
            echo "Categoria";
            echo "</th>";
            echo "<th>";
            echo "Eliminar";
            echo "</th>";
            echo "</tr>";
            echo "</thead>";
            echo " <tbody>";
            while ($row=$result->fetch_row()) {
              echo "<tr>";
              foreach ($row as $valor) {
                echo "<td>";
                echo "$valor";
                echo "</td>";
              }
              echo "<td>";
             ?>
             <a href="#" onclick="deleteProducto('<?php echo $row[0]; ?>')">x</a>
             <?php
             echo "</td>";
             echo "</tr>";
           }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <hr>
        <div class="col-md-12">
          <p class="text-center">
            &copy 2016 CASA HOMERO todos los derechos reservados
          </p>
        </div>
      </div>
    </div>
    <script src="js\jquery-3.1.1.js" charset="utf-8"></script>
    <script src="js\bootstrap.js" charset="utf-8"></script>
    <script src="js\deleteprod.js"></script>
  </body>
</html>
