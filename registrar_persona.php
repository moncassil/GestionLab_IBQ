<?php
$conexion=mysqli_connect("localhost","root","","ibq");

$id_persona=$_POST['id_persona'];
$Nombre=$_POST['Nombre'];
$Apellido_Paterno=$_POST['Apellido_Paterno'];
$Apellido_Materno=$_POST['Apellido_Materno'];
$Cargo=$_POST['Cargo'];
$Telefono=$_POST['Telefono'];
$Comentarios=$_POST['Comentarios'];



$sql ="INSERT INTO ibq.persona(id_persona,nombre_persona,ape_pat,ape_mat,tel_persona,cargo_persona,coment_persona)
VALUES('$id_persona','$Nombre','$Apellido_Paterno','$Apellido_Materno','$Cargo','$Telefono','$Comentarios')";

$rs=$conexion ->query($sql);

header("Location: ./usuario.html?registro=hecho!");

mysqli_free_result($sql);

mysqli_close($conexion);


