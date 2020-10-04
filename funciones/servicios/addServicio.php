<?php 
    require_once "../conexion.php";
    
    $queryget = "SELECT MAX(id_servicio) as num FROM servicios LIMIT 1";
    $folio = $conexion->query($queryget);     
    $consulta = mysqli_fetch_array($folio); 
    // Si el codigo actual esta vacio o es 0, se convierte en 1.
    // En caso contrario se le suma +1.
    $codigo = (empty($consulta['num']) ? 1 : $consulta['num']+=1);
 
    date_default_timezone_set("America/Mexico_City");
	$conexion->query("SET NAMES 'utf8'");
    $Tipo=$_POST['Tipo'];
	$Folio='2222lll';
    $FechaIn = date_create($_POST['FechaIn']);
    $fechaNueva = date_format($FechaIn,'Y-m-d');
    $hora = $_POST['hora'];
    $Fecha_hora = $fechaNueva.' '.$hora;
    $Problema =$_POST['Problema'];
    $id_cliente = $_POST['id_cliente'];
    $estatus = "Activo";
    $fechaRegistro = date('Y-m-d H:i:s');
    $id_sucursal =  $_POST['id_sucursal'];
    $id_empleado = $_POST['id_empleado'];

	$query="INSERT INTO servicios (id_servicio, Tipo, Folio, FechaIn, Problema, id_empleado, id_usuario, id_sucursal, id_equipo, id_cliente, estatus_servicio, fechaRegistro) 
    VALUES (NULL, '$Tipo','TECE$codigo','$Fecha_hora','$Problema','$id_empleado',NULL, '$id_sucursal', NULL, '$id_cliente', '$estatus', '$fechaRegistro')";
	echo mysqli_query($conexion,$query);

?>