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
    <title>Consulta Clientes</title> 
    <link rel = "stylesheet" href = "assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php'?> 
    <form method = "post">
      <h1>Consultar un cliente</h1>
      <input type="text" name = "clienteid" placeholder = "id del cliente">
      <input type ="submit" name = "botonClientes"> 
    </form>
    <?php
      include("conexion_bd.php");
      include("controladores/clientes.php");
      ?>
  </body>
</html>