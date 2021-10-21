<?php

    include("conexion.php");
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $number = $_POST['number'];
        $symptoms = $_POST['symptoms'];
        $date = $_POST['date'];
        $time = $_POST['time'];
    
        //actualizando los datos 
        $actualizar = "UPDATE citas SET name = '$name', number = '$number', symptoms = '$symptoms', 
        date = '$date', time = '$time' WHERE  id='$id'";
    
            $resultado= mysqli_query($conexion, $actualizar);
    
                if ($resultado) {
                    echo "<script>
                    alert('Datos actualizados con exito');
                    window.location= '../public/home.php'
                    </script>";
                } else {
                    echo "<script>
                    alert('Tenemos problemas, ingrese los datos correctos');
                    window.location= '../public/home.php'
                    </script>";   
                }

 ?>
