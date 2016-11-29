function deleteProducto(id){
  if (window.confirm("¿Desea Eliminar el producto seleccionado?")) {
    document.location.href = 'delete_producto.php?id=' + id;
  }
}
