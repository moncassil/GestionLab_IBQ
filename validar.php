<?php
session_start();
$usuario=$_POST['username'];
$password=$_POST['password'];

//conectar a la bd 
$conexion=mysqli_connect("localhost","root","","ibq");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$password'";
$resultado=mysqli_query($conexion, $consulta);


$filas=mysqli_num_rows($resultado);
if($filas>0)
{
	$_SESSION['usuario'] = $usuario;
	header("location:Adm.php");
}
else
{
echo"<SCRIPT language= JavaScript > alert('Usuario o contraseña incorrecta');
window.location.href='index.php'; </script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);