<?php
require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$nombre2 = $_POST['nombre2'];
$apellido2 = $_POST['apellido2'];
$direccion2 = $_POST['direccion2'];
$area2 = $_POST['area2'];
$correo2 = $_POST['correo2'];
$estatus4 = $_POST['estatus4'];
$id_empleado = $_POST['id_empleado'];

$imagen = '';

$query = "UPDATE empleados SET nombre='$nombre2', apellido='$apellido2', direccion='$direccion2',area='$area2', correo='$correo2', fotoUsuario='$imagen', estatus_empleado='$estatus4'
WHERE id_empleado='$id_empleado'
";

$resultado = $conexion->query($query) || die ("ha ocurrido un error no se guarda los datos".mysqli_error($conexion));

if($resultado){
	echo "1";
}