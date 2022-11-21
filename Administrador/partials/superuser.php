<?php
$conexion = new mysqli("localhost","root","0f5173b7/WAMP","butcherShop");
$conexion->set_charset("utf-8");
session_start();
$pmd5 = md5(12345);     
$sql = "INSERT INTO users(email,password) VALUES ('marco@gmail.com','$pmd5')";
    $resultado = mysqli_query($conexion,$sql);

?>