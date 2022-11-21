<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prototipo Assesment</title>
    <link rel="icon" href="Image/engineer.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Montserrat:wght@400;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>
  
<body class="container-fluid body_section">
        <header>
              <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand brand-name" href="#">Carnicería Bomnita</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link headerachor" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link headerachor" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link headerachor" href="basket.php">Carrito</a> 
                    </li>
                  </ul>
              </nav>
        </header>
</body>
<?php 
  include("conexion_bd.php");
  include("controladores/controlador_signup.php");
  ?>
<form action="" class = "lsform" method="POST">
    <input name="name" class = "lsinput" type="text" placeholder="Ingresa tu nombre">
    <input name="email" class = "lsinput" type="text" placeholder="Ingresa tu email">
    <input name="homeadress" class = "lsinput" type="text" placeholder="Ingresa tu direccion de domicilio">
    <input name="phone" class = "lsinput" type="text" placeholder="Ingresa tu telefono">
    <input name="password" class = "lsinput" type="password" placeholder="Ingresa tu contraseña">
    <input name= "botonregistrarse" class = "lssubmit" type="submit" value="Enviar">
</form>
