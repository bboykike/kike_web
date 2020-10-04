<?php

const SERVER = "localhost";
const DB = "tecesinf";
const USER = "root";
const PASS = ""; 

$conexion = new mysqli(SERVER, USER, PASS, DB);
if ($conexion->connect_errno) {
printf('Conexión fallida: \n', $conexion->connect_error);
exit();
}
