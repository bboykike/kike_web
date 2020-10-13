<?php
   require_once "../conexion.php";

$conexion->query("SET NAMES 'utf8'");
$accesorios = array();
$querys = "
SELECT 
s.id_accesorio, 
s.Nombre, 
s.Marca, 
s.NoSerie, 
s.estatus_accesorio, 
s.id_equipo, 
e.TipoEquipo 
FROM accesorios AS s 
INNER JOIN equipos AS e ON e.id_equipo=s.id_equipo";
$resultado=$conexion->query($querys);
while($row=$resultado->fetch_assoc()){

   array_push($accesorios, $row);
}
echo json_encode($accesorios);

?>