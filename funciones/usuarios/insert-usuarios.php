<?php 
	require_once "../conexion.php";
	require_once "../../funciones/encriptacion/encriptacion.php";


	$conexion->query("SET NAMES 'utf8'");
    $UserName=$_POST['UserName'];
	$contrasenia=$_POST['contrasenia'];
	$claveE = SED::encryption($contrasenia);
	$id_empleado =$_POST['id_empleado'];
	$id_rol =$_POST['id_rol'];

	$query="INSERT INTO usuarios (id_usuario, UserName, contrasenia, id_empleado, id_rol) 
    VALUES (NULL, '$UserName', '$claveE', '$id_empleado', '$id_rol')";
	echo mysqli_query($conexion,$query);

?>