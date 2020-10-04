<?php

require_once "../conexion.php";


function insertarImagen(){
    if(empty($_FILES[$tipo_imagen]["fotoUsuario"]))
    return;

    $file_name = $_FILES[$tipo_imagen]["fotoUsuario"];
    $extension = pathinfo($_FILES[$tipo_imagen], PATHINFO_EXTENSION);
    $ext_formatos = array('png', 'gif', 'jpg', 'jpeg', 'pdf');

    if(!in_array(strtolower($extension), $ext_formatos))
    return;

    if($_FILES[$tipo_imagen]["size"] > 3300000300800)
    return;

    $dia = date("d");
    $mes = date("m");
    $year = date("Y");

    $targetDir = "../funciones/empleados/img/$year/$mes/$dia";

    @rmdir($targetDir);

    if(!file_exists($targetDir)){
        @mkdir($targetDir, 077, true);
    }

    $token = md5(uniqid(rand(), true));
    $file_name = $token.'.'.$extension;

    $add = $targetDir.$file_name;

    $db_url_img = "$year/$mes/$dia/$file_name";

    if(move_uploaded_file($_FILES[$tipo_imagen]["tmp_name"],$add)){
        $query = "UPDATE empleados SET $tipo_imagen ='$db_url_img' WHERE id_empleado = $id_empleado";
        // $respuesta = $conexion->query($query);     

    }
}

?>