

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Administración Carniceria</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "assets/css/style.css">
  </head>
  <body>
  <h1>Administrador Carniceria Bomnita</h1>
  <h2>Inicio de sesión</h2>
    <?php 
    include("conexion_bd.php");
    include("controladores/controlador_login.php");
    ?>
    <form action="" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu email">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input name= "botoningresar" type="submit" value="Enviar">
    </form>
  </body>
</html>
