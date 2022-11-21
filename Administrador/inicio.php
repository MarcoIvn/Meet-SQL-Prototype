<?php
session_start();
if(empty($_SESSION["id"])){
  header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Administración Carniceria</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "assets/css/style.css">
  </head>
  <body>
  <?php require 'partials/header.php'?> 
    <ul class="menu">
      <li><a href = "registrarProveedor.php">Registrar Proveedor</a></li>
      <li><a href = "consultarPedidos.php">Consultar Pedidos</a></li>
      <li><a href = "consultarCompras.php">Consultar Compras</a></li>
      <li><a href = "consultarClientes.php">Consultar Clientes</a></li>
      <li><a href = "consultarCatalogo.php">Consultar catalogo de carnes</a></li>
    </ul>
  </body>
</html>


