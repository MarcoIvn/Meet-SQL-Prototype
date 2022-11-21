<?php

include_once("conexion_bd.php");

if(!empty($_POST["botonClientes"])){
  if(empty($_POST["clienteid"])){
    ?>
    <h3 class = "bad">Los campos estan vacios</h3>
    <?php
  }else{
    /*Checar Datos */
    $personID = $_POST['clienteid'];
    $sql = $conexion->query(" SELECT name,homeAdress,phoneNumber,email FROM persons WHERE personID ='$personID'");  
    /*checar numero de ventas*/
    $result1 = $conexion->query(" SELECT COUNT(*) AS count FROM orders WHERE customerID = '$personID'");  
    $row1 = mysqli_fetch_assoc($result1);
    $numventas = $row1['count'];
    /*Checar total de ventas*/
    

    if($datos = $sql->fetch_object()){
      $nombre = $datos->name;
      $direccion = $datos->homeAdress;
      $telefono = $datos->phoneNumber;
      $correo = $datos->email;
   
    ?>
    <ul class="tabla">
      <li>Nombre: <p><?= $nombre?></p> </li>
      <li>Dirección: <p><?= $direccion?></p> </li>
      <li>Telefono: <p><?= $telefono?></p> </li>
      <li>Correo electronico: <p><?= $correo?></p> </li>
      <li>Ventas realizadas: <p><?= $numventas?></p> </li>
    </ul>  
    <?php
    }else{
      ?>
      <h3 class = "bad">El id del cliente no existe</h3>
      <?php
    }

  }

}
?>