


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content=" width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="formulario.css">
	<link rel="stylesheet" href="estilotablas.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/misEstilos.css">


	<title>REGISTRO DE USUARIOS </title>
</head>
<body>
   <!-- Inicio Menu -->
   <div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <ul class="nav">
   

   <li class="nav-item">
    <a class="p-1 nav-link disabled" href="index.html"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO</a></FONT>
  </li>
    
   <li class="nav-item">
    <a class=" p-1 nav-link disabled active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISTEMA ELECTRÓNICO PARA EL CONTROL DE REACTIVOS Y MATERIALES EN LABORATORIOS</a>
  </li>
</div>
<!-- Fin del Menu -->


<center>

    <table >
      <thead font color="black">
      <tr>
        
        <th colspan="1"  font color = "#000000" ><a href="usuario.php" >Nuevo registro</a></th>
          <th colspan="10"> <center>REGISTRO DE USUARIOS</center></th> 
        </tr> 
      
      <tbody>
        <tr>
          <td>id persona</td>
          <td>Nombre </td>
          <td>Apellido Paterno</td>
          <td>Apellido Materno</td>
          <td>Cargo</td>
          <td>Telefono</td>
          <td>Comentarios</td>

<?php
  $conexion=mysqli_connect("localhost","root","","ibq");

  $slq = "SELECT * FROM `persona`;";
  $result = mysqli_query($conexion, $sql);
  $resultcheck = mysql_num_rows($result);

  if($resultcheck > 0)
  {
  while($mostrar=mysqli_fetch_assoc($result))
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

      </tbody>
 </div >
 
    </table>
  </center>
<div>
 <div class="contenido">
 	<div class="form_top">
 		<h2> REGISTROS <span> USUARIOS </span></h2>
    </div>
    <form class="form_reg" action="registrar_persona.php" method="POST">
    
    <input class="input" type="text" placeholder="id_persona" name = " id_persona"required  autofocus>
    <input class="input" type="text" placeholder="Nombre" name= "Nombre" required>
    <input class="input" type="tel"  placeholder="Apellido_Paterno" name= "Apellido_Paterno" required>
    <input class="input" type="tex"  placeholder=" Apellido_Materno" name= "Apellido_Materno" required>
    <input class="input" type="text" placeholder="Cargo" name= "Cargo" required >
    <input class="input" type="text" placeholder="Telefono" name="Telefono" required>
    <input class="input" type="text" placeholder="Comentarios" name= "Comentarios" required>
   
     <div class="boton">
     <input class="registrar" type="submit" value="REGISTRAR">
     <input class="limpiar" type="reset" value="LIMPIAR">
     </div>
   
    </form>

</div>
</body>
</html>