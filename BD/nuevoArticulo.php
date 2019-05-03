<?php 
require_once("Conexion.php"); 
$articulo=$_POST['articulo'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo'];
$cant=$_POST['cant'];
$model=new Conexion();
$query="INSERT INTO articulo(articulo,precio,id_tipo,existencia)
VALUES('$articulo',$precio,$tipo,$cant);";
$model->set_query($query);
 ?>