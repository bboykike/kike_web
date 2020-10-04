<?php

session_start();
require_once "../conexion.php";
require_once "../../funciones/encriptacion/encriptacion.php";
$conexion->query("SET NAMES 'utf8'");


if(isset($_POST['UserName']) && isset($_POST['contrasenia'])){
    
    $user = mysqli_real_escape_string($conexion, $_POST['UserName']);
    $pass = mysqli_real_escape_string($conexion, $_POST['contrasenia']);
    $pass_en = SED::encryption($pass);

    // $pass_des = SED::decryption($pass);
    // decryption


    $consulta = "SELECT s.id_usuario, 
    s.UserName, 
    s.contrasenia, 
    s.id_rol, 
    r.Nombre AS nombreRol, 
    s.id_empleado, 
    CONCAT(e.nombre, ' ', e.apellido) AS empleado 
    FROM usuarios AS s
    INNER JOIN empleados AS e ON e.id_empleado=s.id_empleado
    INNER JOIN roles AS r ON r.id_rol=s.id_rol
    WHERE UserName='$user' AND contrasenia='$pass_en'
    
    ";

    $resultado=$conexion->query($consulta);
    $num_row = mysqli_num_rows($resultado);
    


    if($num_row == "1"){
        $data = mysqli_fetch_assoc($resultado);
        $_SESSION['UserName'] =$data["UserName"];
        echo "1";
    }else{
        echo "error";
    }

}else{
    echo "error";
}



?>