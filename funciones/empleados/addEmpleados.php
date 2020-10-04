<?php

require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$area = $_POST['area'];
$correo = $_POST['correo'];
$estatus = 'activo';

$imagen = '';

// if(isset($_FILES["foto"])){
//     $file = $_FILES["foto"];
//     $nombreF = $file["name"];
//     $tipo = $file["type"];
//     $rutaProvisional = $file["tmp_name"];
//     $size = $file["size"];
//     $dimensiones = getimagesize($rutaProvisional);
//     $width = $dimensiones[0];
//     $height = $dimensiones[1];
//     $carpeta = "../../funciones/empleados/img/";

//     if($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
//         echo "Error, el archivo no es una imagen";
//     }elseif($size > 3*1024*1024){
//         echo "Error, el tamaño máximo permitido es de 3Mb";
//     }else {
//         $src = $carpeta.$nombreF;
//         move_uploaded_file($rutaProvisional, $src);
//         $imagen = "../../funciones/empleados/img/".$nombreF;
//     }
// }

$queryEmpleado="INSERT INTO empleados (id_empleado, nombre, apellido, direccion, area, correo, fotoUsuario, estatus_empleado) 
    VALUES (NULL, '$nombre','$apellido','$direccion','$area','$correo', '$imagen','$estatus')";
    echo mysqli_query($conexion,$queryEmpleado);
    

?>