<?php

require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$queryCliente = "SELECT id_cliente, NombreCliente, ApellidoCliente, estatus_cliente FROM clientes WHERE estatus_cliente='activo'";
$cliente = array();

$queryEmpleado = "SELECT id_empleado, nombre, apellido, estatus_empleado FROM empleados WHERE estatus_empleado='activo'";
$empleado = array();

$resultado = $conexion->query($queryCliente);
while($res = $resultado->fetch_assoc()){
    array_push($cliente, $res);
}

$resultado = $conexion->query($queryEmpleado);
while($res = $resultado->fetch_assoc()){
    array_push($empleado, $res);
}



$res = array($cliente, $empleado);

echo json_encode($res);