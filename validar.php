<?php

$usuario=$_POST['usuario'];
$password=$_POST['password'];

//conectar a la bd 
$conexion=mysqli_connect("localhost","root","","ibq");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$password'";
$resultado=mysqli_query($conexion, $consulta);


$filas=mysqli_num_rows($resultado);
if($filas>0)
{
	header("location:Adm.php");
}
else
{
echo "error en la autenticidad";
}

mysqli_free_result($resultado);
mysqli_close($conexion);