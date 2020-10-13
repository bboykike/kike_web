<?php

require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$query = "SELECT * FROM equipos WHERE estatus_equipo='activo'";
$equipo = array();


$resultado = $conexion->query($query);
while($res = $resultado->fetch_assoc()){
    array_push($equipo, $res);
}

$res = array($equipo);

echo json_encode($res);