<?php
require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$id_sucursal = $_POST['id_sucursal'];
$nombre=$_POST['nombre2'];
$direccion=$_POST['direccion2'];
$id_cliente = $_POST['id_cliente3'];
$estatus =$_POST['es'];


$query = "UPDATE sucursales SET Nombre='$nombre', Direccion='$direccion', id_cliente='$id_cliente', estatus_sucursal='$estatus' WHERE id_sucursal='$id_sucursal'";

$resultado = $conexion->query($query) || die ("ha ocurrido un error no se guarda los datos".mysqli_error($conexion));

if($resultado){
	echo "1";
}