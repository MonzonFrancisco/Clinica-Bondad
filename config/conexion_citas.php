<?php
$conexion=mysqli_connect("localhost","root","","clinica_bondad");
insertar($conexion);
function insertar($conexion){
	$name= $_POST['name'];
	$number= $_POST['number'];
	$symptoms=$_POST['symptoms'];
	$gender= $_POST['gender'];
	$date= $_POST['date'];
	$time= $_POST['time'];

	$cita="INSERT INTO citas (`name`, `number`, `symptoms`, `gender`, `date`, `time`)
	VALUES ('$name', '$number', '$symptoms', '$gender', '$date', '$time')";

	mysqli_query($conexion, $cita);
	mysqli_close($conexion);
}

echo "<script>
                alert('Cita agendada con exito');
                window.location= '../index.html'
    </script>";

//header('Location: ../index.html');

 ?>