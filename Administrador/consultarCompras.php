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
    <title>Consulta Compras</title> 
    <link rel = "stylesheet" href = "assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php'?> 
    <form method = "post">
      <h1>Consultar una compra</h1>
      <input type="text" name = "numCompra" placeholder = "Numero de compra">
      <input type ="submit" name = "botonCompras"> 
    </form>
    <?php
    include("conexion_bd.php");
    include("controladores/compras.php");
    ?>
  </body>
</html>