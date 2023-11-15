<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $id_provedor = $_POST['id_provedor'];
  $nombre_provedor = $_POST['nombre_provedor'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $correo_electronico = $_POST['correo_electronico'];
  $producto_principal = $_POST['producto_principal'];
  $fecha_entrega = $_POST['fecha_entrega'];
  $total_productos = $_POST['total_productos'];
  $query = "INSERT INTO tbl_proveedor(id_provedor, nombre_provedor, direccion, telefono, correo_electronico, producto_principal, fecha_entrega, total_productos) VALUES ('$id_provedor', '$nombre_provedor', '$direccion', '$telefono', '$correo_electronico', '$producto_principal', '$fecha_entrega', '$total_productos')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea guardada correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
