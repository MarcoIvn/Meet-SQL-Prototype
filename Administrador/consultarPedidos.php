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
    <title>Consulta Pedidos</title> 
    <link rel = "stylesheet" href = "assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php'?> 
    <form method = "post">
      <h1>Consultar un pedido</h1>
      <input type="text" name = "numPedido" placeholder = "Numero de pedido">
      <input type ="submit" name = "botonPedidos"> 
    </form>
    <?php
    include("conexion_bd.php");
    include("controladores/pedidos.php");
    ?>
  </body>
</html>