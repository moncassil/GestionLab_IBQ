<?php 
require_once("Conexion.php");
$usuario=$_POST['usuario'];
$pass=$_POST['password']; 
$model=new Conexion();
$query="SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$pass'";
$result=$model->get_query($query);
if(empty($result)){
    header("Location:../index.html");
}else{
	$_SESSION['tipo_usuario']=$result[0]['tipo_usuario'];
	header("Location:../Adm.html");
}
