<?php

require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");
$empleados = array();

$query = "SELECT id_empleado, CONCAT(nombre,' ', apellido) AS nombre_empleado, direccion, area, correo, fotoUsuario, estatus_empleado FROM empleados";
$resultado = $conexion->query($query);

while($row=$resultado->fetch_assoc()){
    array_push($empleados, $row);
}

echo json_encode($empleados);