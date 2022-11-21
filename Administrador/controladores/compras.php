<?php

include_once("conexion_bd.php");

if(!empty($_POST["botonCompras"])){
  if(empty($_POST["numCompra"])){
    ?>
    <h3 class = "bad">Los campos estan vacios</h3>
    <?php
  }else{
    /*Checar Datos */
    $purchaseNum = $_POST['numCompra'];
    $sql = $conexion->query(" SELECT * FROM purchases WHERE purchaseNum ='$purchaseNum'"); 
    if($datos = $sql->fetch_object()){
      $purchaseDate = $datos->purchaseDate;
      $deliveryDate = $datos->deliveryDate;
      $meatID = $datos->meatID;
      $weight = $datos->weight;
      /*Buscar la carne en el catalogo */
      $result1 = $conexion->query(" SELECT supplierID,purchasePrice,name FROM meatscatalogue WHERE meatID = '$meatID'");  
      if($datos1 = $result1->fetch_object()){
        $supplierID = $datos1->supplierID;
        $priceMeat = $datos1->purchasePrice;
        $meatName = $datos1->name;
        $purchase = $weight*$priceMeat;
      }
      /*Buscar al proveedor en la tabla de proveedores*/
      $result2 = $conexion->query(" SELECT name FROM suppliers WHERE supplierID = '$supplierID'");  
      if($datos2 = $result2->fetch_object()){
        $supplierName = $datos2->name;
      }
      ?>
      <ul class="tabla">
        <li>Proveedor:<p><?= $supplierName?> id: <?= $supplierID?></p></li>
        <li>Carne:<p><?= $weight?> Kg de <?= $meatName?></p></li>
        <li>Compra: <p>$<?= $purchase?></p> </li>
        <li>Fecha de pedido: <p><?= $purchaseDate?></p> </li>
        <li>Feecha de entrega: <p><?= $deliveryDate?></p> </li>
      </ul>  
      <?php
    }else{
      ?>
      <h3 class = "bad">El numero de compra no existe</h3>
      <?php
    }
  }
}


?>