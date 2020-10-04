<?php
require_once "../conexion.php";
require_once "../../funciones/encriptacion/encriptacion.php";
$conexion->query("SET NAMES 'utf8'");

$id_usuario = $_POST['id_usuario'];
$UserNameEdit=$_POST['UserNameEdit'];
$contraseniaEdit=$_POST['contraseniaEdit'];
$claveEdit = SED::encryption($contraseniaEdit);
$id_empleado =$_POST['id_empleadoEdit'];
$id_rol =$_POST['id_rol2'];

$query = "UPDATE usuarios SET UserName = '$UserNameEdit', contrasenia = '$claveEdit', id_empleado = '$id_empleado', id_rol=  '$id_rol' WHERE id_usuario = '$id_usuario' ";

$resultado = $conexion->query($query) || die ("ha ocurrido un error no se guarda los datos".mysqli_error($conexion));

if($resultado){
	echo "1";
}