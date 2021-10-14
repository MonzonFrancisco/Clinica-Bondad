<?php
$conexion=mysqli_connect("localhost","root","","clinica_bondad");

  $email= $_POST['email'];
	$usuario= $_POST['usuario'];
  $password= md5($_POST['password']);
	$puesto= $_POST['puesto'];

$query="INSERT INTO registroadmin(email, usuario, password, puesto)
VALUES ('$email', '$usuario', '$password', '$puesto')";

//verificar que no se repitan registros el primero sera el correo
$verificacion_correo= mysqli_query($conexion,"SELECT *FROM registroadmin WHERE email='$email'");
if (mysqli_num_rows($verificacion_correo) >0) {
echo '
<script>
alert("Error, el correo ya se encuentra registrado");
window.location="../public/registro.php";
</script>
';
exit();
}

$ejecutar=mysqli_query($conexion, $query);
if ($ejecutar) {
echo '
<script>
    alert("Usuario registrado exitosamente");
    window.location="../public/login.php";
  </script>
  ';
} else {
  echo '
  <script>
      alert("correo y/o usuario ya se encuentran registrados");
      window.location="../public/registro.php";
    </script>
    ';
}

mysqli_close($conexion);

 ?>