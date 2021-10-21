<?php
session_start();
include 'conexion.php';
$email= $_POST['email'];
$password= $_POST['password'];
$password =md5($_POST['password']);

$validar_login= mysqli_query($conexion, "SELECT *FROM registroadmin WHERE email='$email'
  and password='$password'");

  if (mysqli_num_rows($validar_login) >0) {
    $_SESSION['usuario']= $email;
    header("location: ../public/home.php");
    exit();
  }
  else {
    echo '
    <script>
    alert("¡ERROR! Correo Y/O contraseña ingresados son incorrectos");
      window.location= "../public/login.php";
    </script>
    ';
    exit();
  }
  ?>