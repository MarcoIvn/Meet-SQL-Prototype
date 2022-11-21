<?php
session_start();
if(!empty($_POST["botoningresar"])){
  if(empty($_POST["email"]) && empty($_POST["password"])){
    /*echo "Los campos estan vacios";*/
    ?>
    <h3 class = "bad">Los campos estan vacios</h3>
    <?php
  }else{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pmd5 = md5($password);
    $sql = $conexion->query(" SELECT personID,email,password FROM persons WHERE email ='$email' && password = '$pmd5'");  
    if($datos = $sql->fetch_object()){
      $_SESSION["id"] = $datos->personID;
      $_SESSION["email"] = $datos->email;
      header("location:index.php");
    }else{
      /*echo "Lo siento, Usuario o Contraseña incorrectos";*/
      ?>
      <h3 class = "bad">Lo siento, Usuario o Contraseña incorrectos</h3>
      <?php
    }
  }
}
?>