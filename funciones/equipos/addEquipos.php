<?php 
    require_once "../conexion.php";    
    $conexion->query("SET NAMES 'utf8'");
    
    $TipoEquipo=$_POST['TipoEquipo'];
	$Marca= $_POST['Marca'];   
    $Modelo = $_POST['Modelo'];
    $NoSerie = $_POST['NoSerie'];
    $id_sucursales =$_POST['id_sucursales'];   

     

	$query="INSERT INTO equipos (id_equipo, TipoEquipo, Marca, Modelo, NoSerie, id_sucursal, estatus_equipo) 
    VALUES (NULL, '$TipoEquipo','$Marca','$Modelo','$NoSerie','$id_sucursales', 'activo')";
    echo mysqli_query($conexion,$query);    

   
?>