<?php
include("db.php");
$id_provedor = '';
$nombre_provedor= '';
$direccion= '';
$telefono= '';
$correo_electronico= '';
$producto_principal= '';
$fecha_entrega= '';
$total_productos= '';

if  (isset($_GET['id_provedor'])) {
  $id_provedor = $_GET['id_provedor'];
  $query = "SELECT * FROM tbl_proveedor WHERE id_provedor=$id_provedor";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre_provedor = $row['nombre_provedor'];
    $direccion = $row['direccion'];
    $telefono = $row['telefono'];
    $correo_electronico = $row['correo_electronico'];
    $producto_principal = $row['producto_principal'];
    $fecha_entrega = $row['fecha_entrega'];
    $total_productos = $row['total_productos'];
  }
}

if (isset($_POST['update'])) {
  $id_provedor = $_GET['id_provedor'];
  $nombre_provedor= $_POST['nombre_provedor'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $correo_electronico = $_POST['correo_electronico'];
  $producto_principal = $_POST['producto_principal'];
  $fecha_entrega = $_POST['fecha_entrega'];
  $total_productos = $_POST['total_productos'];

  $query = "UPDATE tbl_proveedor set nombre_provedor = '$nombre_provedor', direccion = '$direccion', telefono = '$telefono', correo_electronico = '$correo_electronico', producto_principal = '$producto_principal', fecha_entrega = '$fecha_entrega', total_productos = '$total_productos'  WHERE id_provedor=$id_provedor";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea actualizada correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id_provedor=<?php echo $_GET['id_provedor']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre_provedor" type="text" class="form-control" value="<?php echo $nombre_provedor; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <input type="text" name="direccion" class="form-control" value="<?php echo $direccion;?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="telefono" type="number" class="form-control" value="<?php echo $telefono; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="correo_electronico" type="text" class="form-control" value="<?php echo $correo_electronico; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="producto_principal" type="text" class="form-control" value="<?php echo $producto_principal; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="fecha_entrega" type="date" class="form-control" value="<?php echo $fecha_entrega; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="total_productos" type="number" class="form-control" value="<?php echo $total_productos; ?>" placeholder="Update Title">
        </div>
        <button class="btn-success" name="update">
        Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
