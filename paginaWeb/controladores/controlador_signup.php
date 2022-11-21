<?php
session_start();
if(!empty($_POST["botonregistrarse"])){
  if(empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["homeadress"]) && empty($_POST["phone"]) && empty($_POST["password"])){
    /*echo "Los campos estan vacios";*/
    ?>
    <h3 class = "bad">Los campos estan vacios</h3>
    <?php
  }else{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $homeadress = $_POST["homeadress"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $pmd5 = md5($password);   
    $sql = "INSERT INTO persons(name,homeAdress,phoneNumber,email,password) VALUES ('$name','$homeadress','$phone','$email','$pmd5')";
    $resultado = mysqli_query($conexion,$sql);
    if($resultado){
      /*echo "Proveedor registrado con exito";*/
      ?>
      <h3 class = "ok">Usuario registrado con exito</h3>
      <?php
      header("location:index.php");
      /*$sql = $conexion->query(" SELECT id,email,password FROM users WHERE email ='$email' && password = '$password'");  
      if($datos = $sql->fetch_object()){
        $_SESSION["id"] = $datos->id;
        $_SESSION["email"] = $datos->email;
        header("location:index.php");
      }*/
    }else{
      ?>  
      <h3 class = "bad">Uy, ha ocurrdio un error</h3>
      <?php
    }
  }
}
?>