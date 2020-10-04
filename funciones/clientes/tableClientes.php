<?php
   require_once "../conexion.php";

$conexion->query("SET NAMES 'utf8'");
$clientes = array();
$querys = "SELECT id_cliente,RFC, CONCAT(NombreCliente, ' ',ApellidoCliente) AS cliente,  NombreCliente, ApellidoCliente,Contacto, Telefono, Celular, Estado, Ciudad, Direccion, Cp, Observaciones, Email, estatus_cliente FROM clientes ORDER BY NombreCliente ASC";
$resultado=$conexion->query($querys);
while($row=$resultado->fetch_assoc()){

   array_push($clientes, $row);
}
echo json_encode($clientes);

?>