

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Pagina De Prueba</title>
</head>
<body>
<?php
 $conexion=mysqli_connect("localhost","root","","ibq");

	$consulta="SELECT * FROM persona";
  $resultado = mysqli_query($conexion, $consulta);
  $resultcheck = mysqli_num_rows($resultado);

  if($resultcheck > 0)
  {
  while($row=mysqli_fetch_assoc($resultado))
  {
   echo $row['id_persona']."<br>";
   echo $row['nombre_persona']."<br>";
   echo $row['ape_pat']."<br>";
   echo $row['ape_mat']."<br>";
   echo $row['cargo_persona']."<br>";
   echo $row['tel_persona']."<br>";
   echo $row['coment_persona']."<br>";
 }
}
?>

</body>
</html>>

