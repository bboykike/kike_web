<?php
require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$id_cliente = $_POST['id_cliente'];
$RFC = $_POST['RFC2'];
$NombreCliente = $_POST['NombreCliente2'];
$ApellidoCliente = $_POST['ApellidoCliente2'];
$Contacto = $_POST['Contacto2'];
$Telefono = $_POST['Telefono2'];
$Celular = $_POST['Celular2'];
$Estado = $_POST['Estado2'];
$Cuidad = $_POST['Cuidad2'];
$Direccion = $_POST['Direccion2'];
$Cp = $_POST['Cp2'];
$Observaciones = $_POST['Observaciones2'];
$Email = $_POST['Email2'];
$estatus2 = $_POST['estatus2'];

$query = "UPDATE clientes SET RFC='$RFC', NombreCliente='$NombreCliente', ApellidoCliente='$ApellidoCliente',Contacto='$Contacto', Telefono='$Telefono', Celular='$Celular', Estado='$Estado', Ciudad='$Cuidad', Direccion='$Direccion', Cp='$Cp', 
Observaciones='$Observaciones', Email='$Email', estatus_cliente='$estatus2' WHERE id_cliente='$id_cliente'
";

$resultado = $conexion->query($query) || die ("ha ocurrido un error no se guarda los datos".mysqli_error($conexion));

if($resultado){
	echo "1";
}