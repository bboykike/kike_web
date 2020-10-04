<?php
   require_once "../conexion.php";

$conexion->query("SET NAMES 'utf8'");
$ServciosSE = array();
$querys = "SELECT s.id_servicio, s.Folio, s.Tipo, s.FechaIn, s.id_empleado, CONCAT(em.nombre, ' ', em.apellido) AS nombreEmpleado, 
s.id_sucursal, su.Nombre, s.id_cliente, 
CONCAT(cl.NombreCliente, ' ', cl.ApellidoCliente) AS nombreCliente, 
s.estatus_servicio, s.id_equipo FROM servicios as s 
INNER JOIN empleados AS em ON em.id_empleado=s.id_empleado 
INNER JOIN clientes AS cl on cl.id_cliente=s.id_cliente 
INNER JOIN sucursales as su ON su.id_sucursal=s.id_sucursal
WHERE s.id_equipo IS NULL";
$resultado=$conexion->query($querys);
while($row=$resultado->fetch_assoc()){

   array_push($ServciosSE, $row);
}
echo json_encode($ServciosSE);

?>