<?php 
	require_once "../conexion.php";


	$conexion->query("SET NAMES 'utf8'");
    $nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
    $id_cliente =$_POST['id_cliente2'];
    $estatus = 'activo';

	$query="INSERT INTO sucursales (id_sucursal, Nombre, Direccion, id_cliente, estatus_sucursal) 
    VALUES (NULL, '$nombre', '$direccion', '$id_cliente', '$estatus')";
    echo mysqli_query($conexion,$query);
    
?>