<?php

include_once("conexion_bd.php");
if(!empty($_POST["botonProv"])){
  if(empty($_POST["nombre"]) && empty($_POST["email"]) && empty($_POST["telefono"])){
    /*echo "Los campos estan vacios";*/
    ?>
    <h3 class = "bad">Los campos estan vacios</h3>
    <?php
  }else{
    $name = $_POST['nombre'];
    $phoneNumber = $_POST['telefono'];
    $email = $_POST['email'];
    $sql = "INSERT INTO suppliers(name, phoneNumber, email) VALUES ('$name','$phoneNumber','$email')";
    $resultado = mysqli_query($conexion,$sql);
    if($resultado){
      /*echo "Proveedor registrado con exito";*/
      ?>
      <h3 class = "ok">Proveedor registrado con exito</h3>
      <?php
    }else{
      ?>  
      <h3 class = "bad">Uy, ha ocurrdio un error</h3>
      <?php
    }
  }
}


?>