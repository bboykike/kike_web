<?php
   require_once "../conexion.php";
   require_once "../../funciones/encriptacion/encriptacion.php";


$conexion->query("SET NAMES 'utf8'");
$usuarios = array();
$query = "SELECT u.id_usuario, 
u.UserName as usuarios,
u.contrasenia as PASS,
u.id_empleado, 
CONCAT(e.nombre,e.apellido) AS nombre_empleado, 
u.id_rol, 
r.Nombre as NombreRol,
u.contrasenia as con 
FROM usuarios AS u
INNER JOIN empleados AS e ON e.id_empleado=u.id_empleado
INNER JOIN Roles AS r ON r.id_rol=u.id_rol
WHERE e.estatus_empleado='activo'";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){

   // Se valida para poder decencriptar la contraseña
   if($row['PASS'] != ""){
      $clave = SED::decryption($row['con']);
   }

   $row['PASS'] = $clave;
   
   

   array_push($usuarios, $row);
}
echo json_encode($usuarios);



?>