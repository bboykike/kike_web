<?php
   require_once "../conexion.php";


$conexion->query("SET NAMES 'utf8'");
$sucursal = array();
$query = "SELECT s.id_sucursal, s.Nombre, s.id_cliente, CONCAT(c.NombreCliente, ' ', c.ApellidoCliente) AS nombre_cliente, s.Direccion, s.estatus_sucursal FROM sucursales AS s
INNER JOIN clientes AS c ON c.id_cliente=s.id_cliente
WHERE c.estatus_cliente='activo'";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
   array_push($sucursal, $row);
}
echo json_encode($sucursal);

?>