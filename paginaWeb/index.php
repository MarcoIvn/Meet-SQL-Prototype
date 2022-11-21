<?php
session_start();
if(empty($_SESSION["id"])){
  header("location: login.php");
}
?>

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
  <script src="script.js"></script>
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link headerachor" href="index.php">Inicio</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link headerachor" href="login.php">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link headerachor" href="signup.php">Sign Up</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link headerachor" href="basket.php">Carrito</a>
          </li>
          <li class="nav-item">
            <a href="controladores/controlador_logout.php" class = "nav-link headerachor">Salir</a>
          </li>
        </ul>
    </nav>
  </header>
  
  <p></p>
  <center>
    <h1 class="titulo">¡Bienvenidxs!</h1>
  </center>
  <center>
    <div class="scrollmenu">
      <a href="#Uno"> Lo más vendido </a>
      <a href="#Dos"> Res </a>
      <a href="#Tres"> Cerdo </a>
      <a href="#Cuatro"> Pollo </a>
    </div>
  </center>
  <p></p>
  <figure class="avatar-box">
    <center><img src="https://auwi.mx/wp-content/uploads/2021/07/carniceria.jpg" alt="Carniceria Bomnita" width="1000"
        height="500"></center>
  </figure>

  <section id="Uno">
    <div class="col-lg-6 section-1">
      <p></p>
      <h2 class="LoMasVendido">Lo más vendido del mes</h2>
      <div class="page-content">
        <div class="mas-vendido">
          <h4> Carne molida de res </h4>
          <img src="https://s.cornershopapp.com/product-images/2097742.jpg?versionId=y3OV5kE38JeL104yamkeHZHc0nsE2KCY"
            width="150" height="150">
          <h5>$109.00 </h5>
          <h6> 1 KG </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
        <div class="mas-vendido">
          <h4> Costilla de cerdo </h4>
          <img src="https://www.gastronomiavasca.net/uploads/image/file/4152/costilla_de_cerdo.jpg " width="150"
            height="150">
          <h5> $169 </h5>
          <h6> 0.5kg </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
        <div class="mas-vendido">
          <h4> Pechuga de Pollo </h4>
          <img
            src="https://cdn.shopify.com/s/files/1/0491/0759/9516/products/a33b18db350345167028bc9ea1a1b57b_2048x2048_f811b194-0266-46a5-bc44-7962e1285309.jpg?v=1636234542"
            width="150" height="150">
          <h5> $180 </h5>
          <h6> 0.800kg </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
      </div>

    </div>
  </section>
  <section id="Dos">
    <div class="col-lg-6 section-1">
      <h2 class="CarneRes">Carne de Res</h2>
      <div class="page-content">
        <div class="productos-res">
          <h4> Picanha </h4>
          <img src="https://www.buenbifetienda.com/2766-large_default/picana-500-gr.jpg" width="150" height="150">
          <h5>$340.00 </h5>
          <h6> 1 KG </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
        <center></center>
        <div class="productos-res">
          <h4> Carne molida de res </h4>
          <img src="https://s.cornershopapp.com/product-images/2097742.jpg?versionId=y3OV5kE38JeL104yamkeHZHc0nsE2KCY"
            width="150" height="150">
          <h5>$109.00 </h5>
          <h6> 1 KG </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>

      </div>
    </div>
  </section>
  <section id="Tres">
    <div class="col-lg-6 section-1">
      <h2 class="CarneCerdo">Carne de Cerdo</h2>
      <div class="page-content">
        <div class="productos-cerdo">
          <h4> Lomo de Cerdo </h4>
          <img src="https://ingredienta.com/wp-content/uploads/2016/06/lomo-cerdo-ing.jpg" width="150" height="150">
          <h5> $70 </h5>
          <h6> 0.5kg </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
        <center></center>
        <div class="productos-cerdo">
          <h4> Costilla de cerdo </h4>
          <img src="https://www.gastronomiavasca.net/uploads/image/file/4152/costilla_de_cerdo.jpg " width="150"
            height="150">
          <h5> $169 </h5>
          <h6> 0.5kg </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
      </div>
    </div>


  </section>
  <section id="Cuatro">
    <div class="col-lg-6 section-1">
      <h2 class="CarnePollo">Carne de Pollo</h2>
      <div class="page-content">
        <div class="productos-pollo">
          <h4> Pechuga de Pollo </h4>
          <img
            src="https://cdn.shopify.com/s/files/1/0491/0759/9516/products/a33b18db350345167028bc9ea1a1b57b_2048x2048_f811b194-0266-46a5-bc44-7962e1285309.jpg?v=1636234542"
            width="150" height="150">
          <h5> $180 </h5>
          <h6> 0.800kg </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
        <center></center>
        <div class="productos-cerdo">
          <h4> Pierna de pollo </h4>
          <img
            src="https://d3ugyf2ht6aenh.cloudfront.net/stores/001/920/241/products/pierna-de-pollo-la-parcelita1-6e6502f12ff4bba04516363842984637-1024-1024.jpeg "
            width="150" height="150">
          <h5> $120 </h5>
          <h6> 0.5kg </h6>
          <form action="basket.php">
            <input type="submit" value="AGREGAR">
          </form>
        </div>
      </div>
  </section>



</body>



<!--
    - favicon
  -->
<link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">
<!--
    - custom css link
  -->
<link rel="stylesheet" href="./assets/css/style.css">
<!--
    - google font link
  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
      - #MAIN
    -->

  <main>

    <!--
        - #SIDEBAR
      -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">



        <!--</div>
       <button class="info_more-btn" data-sidebar-btn>
          <span>Enseñar Menú</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>  

       </div> -->