<?php

require_once "../conexion.php";
$conexion->query("SET NAMES 'utf8'");

$queryget = "SELECT MAX(id_servicio) AS id FROM servicios LIMIT 1";
$datos = $conexion->query($queryget);    
$consulta = mysqli_fetch_array($datos); 
$id_servicio = $consulta['id'];


$queryget2 = "SELECT s.id_servicio, s.Folio, s.Tipo, s.Problema, s.id_cliente, c.NombreCliente AS nombres, 
c.ApellidoCliente AS apellidos, c.Email AS Correo, s.Problema FROM servicios AS s 
INNER JOIN clientes AS c ON c.id_cliente=s.id_cliente WHERE s.id_servicio='$id_servicio'";
$datos2 = $conexion->query($queryget2);    
$consulta2 = mysqli_fetch_array($datos2);
$folio = $consulta2['Folio'];
$tipo = $consulta2['Tipo'];
$nombre = $consulta2['nombres'];
$apellidos = $consulta2['apellidos'];
$correoDestino = $consulta2['Correo'];
$problema = $consulta2['Problema'];

$to = $correoDestino;
$subject = "Servicio: ".$tipo."";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = "<table style='max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;'>
<tr>
    <td style='background-color: #ecf0f1; text-align: left; padding: 0'>
        <a href=''>
            <img width='20%' style='display:block; margin: 1.5% 3%' src=''>
        </a>
    </td>
</tr>

<tr>
    <td style='padding: 0'>
        Tipo de servicio: ".$tipo."
    </td>
</tr>

<tr>
    <td style='background-color: #ecf0f1'>
        <div style='color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif'>
            <h2 style='color: #e67e22; margin: 0 0 7px'>Hola ".$nombre." ".$apellidos."!</h2>
            <p style='margin: 2px; font-size: 15px'>
                Gracias por comunicarte con nosotros, tu número de solicitud es #".$folio."<br><br>

                validaremos el servicio conforme a lo mencionado: ".$problema.".<br><br>

                Nos comprometemos a responderte en menos de 2 horas hábiles (puede llevar un poco más de tiempo
                durante los fines de semana).<br><br>

                No dudes en contactarnos al teléfono asignado a soporte técnico 999 420 26 73 si deseas una
                retroalimentación más veloz o si no recibes noticias de nosotros lo suficientemente rápido.

            </p>


            <br><br>
            <div style='width: 100%; text-align: center'>
            </div>
            <p style='color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0'>TECESINF</p>
        </div>
    </td>
</tr>
</table>";

mail($to, $subject, $message, $headers);


?>