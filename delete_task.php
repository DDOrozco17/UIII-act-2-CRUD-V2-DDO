<?php

include("db.php");

if(isset($_GET['id_provedor'])) {
  $id_provedor = $_GET['id_provedor'];
  $query = "DELETE FROM tbl_proveedor WHERE id_provedor = $id_provedor";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea eliminada con éxito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
