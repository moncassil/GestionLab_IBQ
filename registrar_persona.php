<?php

$conexion=mysqli_connect("localhost","root","","ibq");
$id_persona=$_GET['id_persona'];
$Nombre=$_GET['Nombre'];
$Apellido_Paterno=$_GET['Apellido_Paterno'];
$Apellido_Materno=$_GET['Apellido_Materno'];
$Cargo=$_GET['Cargo'];
$Telefono=$_GET['Telefono'];
$Comentarios=$_Get['Comentarios'];




$sqlInsertTipo="INSERT INTO persona(id_persona,nombre_persona,ape_pat,ape_mat,tel_persona,cargo_persona,coment_persona) VALUES($id_persona,$Nombre,$Apellido_Paterno,$Apellido_Materno,$Cargo,$Telefono,$Comentarios)";



if($rs=$conexion->query($sqlInserTipo))
{
echo 'texto de prueba';
echo '<a href="usuario.html"> aceptar </a>';
}
else
{
echo 'error al encontrar la base de datos';
}

mysqli_close($conexion);
?>

