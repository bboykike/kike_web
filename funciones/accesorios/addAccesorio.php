<?php 
    require_once "../conexion.php";    
    $conexion->query("SET NAMES 'utf8'");
    
    $Nombre=$_POST['Nombre'];
	$Marca= $_POST['Marca'];   
    $NoSerie = $_POST['NoSerie'];
    $id_equipo = $_POST['id_equipo'];

     

	$query="INSERT INTO accesorios (id_accesorio, Nombre, Marca, NoSerie, estatus_accesorio, id_equipo) 
    VALUES (NULL, '$Nombre', '$Marca', '$NoSerie', 'activo', '$id_equipo')";
    echo mysqli_query($conexion,$query);
    


?>