<?php 
    require_once "../conexion.php";
    $conexion->query("SET NAMES 'utf8'");

    $id_cliente = $_POST['id_cliente'];
	
	$queryM = "SELECT id_sucursal, Nombre, id_cliente, estatus_sucursal FROM sucursales WHERE id_cliente = '$id_cliente'";
	$resultadoM = $conexion->query($queryM);
	
	$html= "<option value='0'>Selecciona una sucursal</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_sucursal']."'>".$rowM['Nombre']."</option>";
    }
   	
	echo $html;	

?>