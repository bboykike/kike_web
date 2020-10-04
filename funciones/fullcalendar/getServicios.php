<?php
   require_once "../conexion.php";


$conexion->query("SET NAMES 'utf8'");
$servicios = array();
$query = "SELECT s.id_servicio, s.Tipo, s.FechaIn, s.Problema, s.estatus_servicio, CONCAT(c.NombreCliente,' ', c.ApellidoCliente) AS nombre_cliente FROM servicios AS s
INNER JOIN clientes AS c ON c.id_cliente=s.id_cliente";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
   array_push($servicios, $row);
}
echo json_encode($servicios);



?>