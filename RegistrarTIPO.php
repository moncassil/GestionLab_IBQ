<?php
require_once("Conexion.php");
$id_persona=$_GET['id_persona'];
$Nombre=$_GET['Nombre'];
$Apellido_Paterno=$_GET['Apellido_Paterno'];
$Apellido_Materno=$_GET['Apellido_Materno'];
$Cargo=$_GET['Cargo'];
$Telefono=$_GET['Telefono'];
$Comentarios=$_Get['Comentarios'];

$sqlInsertTipo="INSERT INTO tipo_articulo(id_persona,Nombre,Apellido_Paterno,Apellido_Materno,Cargo,Telefono,Comentarios) VALUES($id_persona,$Nombre,$Apellido_Paterno,$Apellido_Materno,$Cargo,$Telefono,$Comentarios)";

if($rs=$conexion->query($sqlInserTipo))
{
echo 'texto de prueba';
echo '<a href="usuario.html"> aceptar </a>';
}
else
{
echo 'error al encontrar la base de datos';
}
?>