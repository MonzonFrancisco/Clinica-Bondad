<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  echo'
  <script>
  alert("Por favor debes iniciar sesión");
  </script>
  ';
  header("location: ../public/login.php");
  session_destroy();
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/home.ico"/>
    <title>Home</title>
</head>
<body>
    
    <h1>Bienvenido administrador que tenga un excelente turno</h1>
    <div>
        <h1>Agenda de citas</h1>
    </div>
    <div>
        <h1>Agenda de laboratorio</h1>
    </div>
    <div>
        <h1>Personal Activo</h1>
    </div>
    <div>
        <h1></h1>
    </div>
    <a class="nav-link js-scroll-trigger" href="../config/cerrar_sesion.php"><b>Cerrar sesión</b></a>
</body>
</html>