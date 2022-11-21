
<?php

include_once("conexion_bd.php");
$sql = " SELECT * FROM meatscatalogue ORDER BY name DESC ";
$result = $conexion->query($sql);
if($result->num_rows > 0){
  while($row = mysqli_fetch_assoc($result)){
    $meatid = $row['meatID'];
    $name = $row['name'];
    $supplier = $row['supplierID'];
    $pprice = $row['purchasePrice'];
    ?>
    <ul class="tabla">
      <li>ID carne: <p><?= $meatid?></p> </li>
      <li>nombre: <p><?= $name?></p> </li>
      <li>ID proveedor: <p><?= $supplier?></p> </li>
      <li>precio de compra: <p>$<?= $pprice?></p> </li>
    </ul>  
    <?php
  }
}else{
  ?>
  <h3 class = "bad">El catalogo esta vacio</h3>
  <?php
}
?>