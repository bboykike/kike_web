<?php 
    require_once "../conexion.php";    

    date_default_timezone_set("America/Mexico_City");
    $conexion->query("SET NAMES 'utf8'");
    
    $RFC=$_POST['RFC'];
	$NombreCliente= $_POST['NombreCliente'];   
    $ApellidoCliente = $_POST['ApellidoCliente'];
    $Contacto = $_POST['Contacto'];
    $Telefono =$_POST['Telefono'];
    $Celular = $_POST['Celular'];
    $Estado = $_POST['Estado'];
    $Cuidad = $_POST['Cuidad'];
    $Direccion = $_POST['Direccion'];
    $Cp = $_POST['Cp'];
    $Observaciones = $_POST['Observaciones'];
    $Email = $_POST['Email'];
    $FechaRegistro = date('Y-m-d H:i:s');
    $estatus_cliente = "activo";

     

	$query="INSERT INTO clientes (id_cliente, RFC, NombreCliente, ApellidoCliente, Contacto, Telefono, Celular, Estado, Ciudad, Direccion, Cp, Observaciones, Email, FechaRegistro, estatus_cliente) 
    VALUES (NULL, '$RFC','$NombreCliente','$ApellidoCliente','$Contacto','$Telefono','$Celular', '$Estado', '$Cuidad', '$Direccion', '$Cp', '$Observaciones', '$Email','$FechaRegistro', '$estatus_cliente')";
    echo mysqli_query($conexion,$query);
    


?>