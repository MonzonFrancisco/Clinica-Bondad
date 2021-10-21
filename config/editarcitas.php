<?php
//llamamos a la conexion que tenemos con la BD
include("conexion.php");
//Sirve para no tener acceso en dado caso de que no hagamos login
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

//creamos variable id
$id=$_GET["id"];
//Seleccionamos la base de datos de citas
$citados = "SELECT *FROM citas WHERE id = '$id'";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Editar-citas-Clinica Bondad</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../images/home.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styleshome.css" rel="stylesheet" />
</head>
<body>
     
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Editar-citas-Clinica Bondad</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../images/home.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styleshome.css" rel="stylesheet" />
</head>
<body>
    <!-- seccion de citas-->
    <section class="content-section bg-light" id="citas">
            <div class="container px-0 px-lg-12 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12">
                        <h2>Modificando Cita</h2>
                        <p class="lead mb-5" style="color: red;">
                            <b>¡¡Respetar media hora por paciente en cada cita!!</b> </p>

                            
                            <!--Tabla de citas, llamado desde la BD-->
                            <table class="table">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Síntomas</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <!--Mandamos a llamar las filas o campos que tengamos en la BD-->
                            <form action="actualizarcita.php" method="$_POST">
                            <tbody>
                                <!--Operaciones php-->
                                <?php
                                $resultado=mysqli_query($conexion, $citados);
                                while($row=mysqli_fetch_assoc($resultado))
                                { ?>
                                    <!--Filas de la BD-->
                                    <tr>
                                    <th scope="row"><input type="text" readonly="true" disabled="true" 
                                    value="<?php echo $row['id'];?> " name="id"></th>
                                    <td><input type="text" value="<?php echo $row['name'];?>" name="name"></td>
                                    <td><input type="text" value="<?php echo $row['number'];?>" name="number"></td>
                                    <td><textarea name="symptoms"><?php echo $row['symptoms'];?></textarea></td>
                                    <td><input type="date" value="<?php echo $row['date'];?>" name="date"></td>
                                    <td><input type="time" value="<?php echo $row['time'];?>" name="time"></td>                        
                                <?php } mysqli_free_result($resultado); ?>  
                                    <td>
                                    <input type="submit" name="guardar cita" class="btn btn-primary btn-sm" value="Guardar">
                                    </td>
                                    </tr> 
                            </tbody> 
                            </form>                         
                            </table>
                                
				        </div>
                    </div>
                </div>        
        </section>
</body>
</html>
</body>
</html>