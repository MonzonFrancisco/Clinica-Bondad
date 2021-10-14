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
    <title>Login-Clinica Bondad</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/login.css"> 
    <link rel="icon" type="image/x-icon" href="../images/hospital.ico"/>
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="../images/icons/user.png" alt="">
                <h2>Clinica Bondad</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login active">Login</li></a>
                <a href="registro.php"><li class="module-register">Registro</li></a>
            </div>
        </div>
        
        <form action="../config/login_usuario.php" method="post" class="form">
            <div class="welcome-form"><h1><b>Bienvenido</b></h1><h2>Administrador</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="email" placeholder="Correo/Usuario" name="email">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="password">
            </div>
            
            <button type="submit">Entrar<label class="lnr lnr-chevron-right"></label></button>
        </form>
    </div>
    
  
</body>
</html>