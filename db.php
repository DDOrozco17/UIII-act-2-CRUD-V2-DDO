<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'BD_Papeleria'
) or die(mysqli_error($mysqli));

?>
