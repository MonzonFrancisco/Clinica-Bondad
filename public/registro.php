<?php
session_start();
if (isset($_SESSION['usuario'])) {
  header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro-Clinica Bondad</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/x-icon" href="../images/hospital.ico"/>
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="../images/icons/registro.png" alt="">
                <h2>Clinica Bondad</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login">Login</li></a>
                <a href="registro.php"><li class="module-register active">Registro</li></a>
            </div>
        </div>
        
        <form action="../config/conexion_registro.php" method="post" class="form">
            <div class="welcome-form"><h1><b>Bienvenido</b></h1><h2>Administrador</h2></div>
            
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Correo electronico" name="email" required="">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre completo" name="usuario" required="">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="password" required="">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Puesto desempeñado" name="puesto" required="">
            </div>
            
            <button type="submit">Registrar<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>
</body>
</html>