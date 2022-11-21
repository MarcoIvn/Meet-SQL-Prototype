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
    <title>Consulta Catalogo</title> 
    <link rel = "stylesheet" href = "assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php'?> 
    <h1>Consultar el catalogo</h1>
      <!--input type="text" name = "nombre" placeholder = "Nombre del proveedor">-->
    <?php
    include("conexion_bd.php");
    include("controladores/catalogo.php");
    ?>
  </body>
</html>