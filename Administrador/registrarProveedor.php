<?php
session_start();
if(empty($_SESSION["id"])){
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Registro Proveedor</title> 
    <link rel = "stylesheet" href = "assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php'?> 
    <form method = "post">
      <h1>Registrar un proveedor</h1>
      <?php
      include("conexion_bd.php");
      include("controladores/registroProveedor.php");
      ?>
      <input type="text" name = "nombre" placeholder = "Nombre del proveedor">
      <input type="text" name = "email" placeholder = "Email del proveedor">
      <input type="text" name = "telefono" placeholder = "Telefono del proveedor">
      <input type ="submit" name = "botonProv"> 
    </form>
  </body>
</html>