<?php
include_once("conexion_bd.php");

if(!empty($_POST["botonPedidos"])){
  if(empty($_POST["numPedido"])){
    ?>
    <h3 class = "bad">Los campos estan vacios</h3>
    <?php
  }else{
    /*Checar Datos */
    $orderNum = $_POST['numPedido'];
    $sql = $conexion->query(" SELECT orderDate,deliveryDate,customerID FROM orders WHERE orderNum ='$orderNum'");  
    /*checar detalles de pedido*/
    $result1 = $conexion->query(" SELECT * FROM orderdetails WHERE orderNum = '$orderNum'");  
    
    if($datos = $sql->fetch_object()){
      $orderDate = $datos->orderDate;
      $deliveryDate = $datos->deliveryDate;
      $customerID = $datos->customerID;
    /*Checar total de ventas*/
      if($datos1 = $result1->fetch_object()){
        $meatID = $datos1->meatID;
        $weight = $datos1->weight;
      }
    /*Buscar la carne en el catalogo */
      $result2 = $conexion->query(" SELECT salePrice,name FROM meatscatalogue WHERE meatID = '$meatID'");  
      if($datos2 = $result2->fetch_object()){
        $priceMeat = $datos2->salePrice;
        $meatName = $datos2->name;
        $sale = $weight*$priceMeat;
      }
    ?>
    <ul class="tabla">
      <li>ID del cliente: <p><?= $customerID?></p> </li>
      <li>Carne:<p><?= $weight?> Kg de <?= $meatName?></p></li>
      <li>Venta: <p>$<?= $sale?></p> </li>
      <li>Fecha de pedido: <p><?= $orderDate?></p> </li>
      <li>Feecha de entrega: <p><?= $deliveryDate?></p> </li>
    </ul>  
    <?php
    }else{
      ?>
      <h3 class = "bad">Este pedido no existe</h3>
      <?php
    }

  }

}
?>