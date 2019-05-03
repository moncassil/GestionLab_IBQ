<?php 
require_once("Conexion.php");
$id=$_POST['id']; 
$model=new Conexion();
$query="DELETE FROM articulo WHERE id_articulo=$id;";
$model->set_query($query);
header("Location:../bajas.html");
 ?>