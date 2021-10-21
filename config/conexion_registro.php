<?php
<<<<<<< HEAD
include'conexion.php';
=======
$conexion = mysqli_connect("localhost","root","","clinica_bondad");
>>>>>>> 9e7a887fb9584a41afc983c48204d9f8afcb6878

$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);
$puesto = $_POST['puesto'];

$query = "INSERT INTO registroadmin (email, usuario, password, puesto) VALUES('$email', '$usuario', '$password', '$puesto')";

<<<<<<< HEAD
// verificar que no se repitan registros el primero sera el correo
$verificacion_correo =   mysqli_query ( $conexion , "SELECT * FROM registroadmin WHERE email = '$email'" );

if ( mysqli_num_rows ( $verificacion_correo )> 0 ) {
    echo  "<script> alert ('Error, el correo ya se encuentra registrado');
        window.location = '../public/registro.php'; </script> " ;
=======
//verificar que no se repitan registros el primero sera el correo
$verificacion_correo =  mysqli_query($conexion,"SELECT *FROM registroadmin WHERE email='$email'");

if (mysqli_num_rows($verificacion_correo) > 0) {
    echo "<script> alert('Error, el correo ya se encuentra registrado');
        window.location='../public/registro.php'; </script>";
>>>>>>> 9e7a887fb9584a41afc983c48204d9f8afcb6878
    exit();
}

$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
    echo "<script> alert('Usuario registrado exitosamente');
    window.location='../public/login.php'; </script>";
} else {
  echo "<script> alert('correo y/o usuario ya se encuentran registrados');
      window.location='../public/registro.php'; </script>";
}
<<<<<<< HEAD
mysqli_close($conexion);

 ?>
=======

mysqli_close($conexion);
>>>>>>> 9e7a887fb9584a41afc983c48204d9f8afcb6878
