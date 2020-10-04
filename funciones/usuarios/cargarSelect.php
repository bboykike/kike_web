<?php

require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$queryEmpleado = "SELECT id_empleado, nombre, apellido, estatus_empleado FROM empleados WHERE estatus_empleado='activo'";
$empleado = array();

$queryRol = "SELECT id_rol, Nombre, Descripcion FROM roles";
$rol = array();

$resultado = $conexion->query($queryEmpleado);
while($res = $resultado->fetch_assoc()){
    array_push($empleado, $res);
}

$resultado = $conexion->query($queryRol);
while($res = $resultado->fetch_assoc()){
    array_push($rol, $res);
}



$res = array($empleado, $rol);

echo json_encode($res);