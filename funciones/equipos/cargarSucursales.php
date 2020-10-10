<?php

require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$query = "SELECT id_sucursal, Nombre FROM sucursales WHERE estatus_sucursal='activo'";
$sucursales = array();


$resultado = $conexion->query($query);
while($res = $resultado->fetch_assoc()){
    array_push($sucursales, $res);
}

$res = array($sucursales);

echo json_encode($res);