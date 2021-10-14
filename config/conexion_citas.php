<?php
$conexion=mysqli_connect("localhost","root","","clinica_bondad");
insertar($conexion);
function insertar($conexion){
	$name= $_POST['name'];
	$number= $_POST['number'];
	$email= $_POST['email'];
	$symptoms=($_POST['symptoms']);
	$date= $_POST['date'];
	$departament= $_POST['departament'];
	$gender= $_POST['gender'];
	$time= $_POST['time'];

	$cita="INSERT INTO citas (`name`, `number`, `email`, `symptoms`, `date`, `departament`, `gender`, `time`)
	VALUES ('$name', '$number', '$email', '$symptoms', '$date', '$departament', '$gender', '$time')";

	mysqli_query($conexion, $cita);
	mysqli_close($conexion);
}

echo "<script>
                alert('Cita agendada con exito');
                window.location= '../index.html'
    </script>";

//header('Location: ../index.html');

 ?>