<?php
   require_once "../conexion.php";

$conexion->query("SET NAMES 'utf8'");
$equipos = array();
$querys = "SELECT e.id_equipo, e.id_sucursal, s.Nombre, e.TipoEquipo, e.Marca, e.Modelo, e.NoSerie, CONCAT(c.NombreCliente, ' ', c.ApellidoCliente) AS nombre_cliente, e.estatus_equipo FROM equipos AS e INNER JOIN sucursales AS s ON s.id_sucursal=e.id_sucursal INNER JOIN clientes AS c ON c.id_cliente=s.id_cliente";
$resultado=$conexion->query($querys);
while($row=$resultado->fetch_assoc()){

   array_push($equipos, $row);
}
echo json_encode($equipos);

?>