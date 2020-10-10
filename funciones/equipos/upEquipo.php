<?php
require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$TipoEquipo2=$_POST['TipoEquipo2'];
$Marca2= $_POST['Marca2'];   
$Modelo2 = $_POST['Modelo2'];
$NoSerie2 = $_POST['NoSerie2'];
$id_sucursal2 =$_POST['id_sucursal2']; 
$id_e = $_POST['id_e'];
$estatus3 = $_POST['estatus3'];

$query = "UPDATE equipos SET TipoEquipo='$TipoEquipo2', Marca='$Marca2', Modelo='$Modelo2', NoSerie='$NoSerie2', id_sucursal='$id_sucursal2', estatus_equipo='$estatus3' WHERE id_equipo='$id_e'";

$resultado = $conexion->query($query) || die ("ha ocurrido un error no se guarda los datos".mysqli_error($conexion));

if($resultado){
	echo "1";
}