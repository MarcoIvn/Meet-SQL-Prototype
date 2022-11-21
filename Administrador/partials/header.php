<header>
  <div class="logo">
    <img src = "assets/imagenes/logo.png" alt="logo carniceria">
    <h2 class = "tituloCarniceria">Carniceria Bomnita: Administrador</h2>
  </div>
  <nav>
    <h3>
      Email ingresado:
      <?php   
      echo $_SESSION["email"];
      ?>
    </h3> 
    <a href="/carniceria/Administrador/inicio.php" class = "nav-link">Inicio</a>
    <a href="controladores/controlador_logout.php" class = "nav-link">Salir</a>
    <!-- <a href="" class = "nav-link"></a> -->
  </nav>
</header>