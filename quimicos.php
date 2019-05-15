
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


	<title>REGISTRO DE QUIMICOS</title>
</head>

  <script type="text/javascript">
  function confirmDelete(clave_quim)
  {
    var respuesta = confirm('¿Está seguro de eliminar el Químico con "id '+clave_quim+'" seleccionado?')
    if (respuesta == true) 
    {
      
      window.location.href = "borrar_qui.php?clave_quim="+clave_quim;
      
    }
    else
    {
      return false;

  }
    }

</script>



<body>
   <!-- Inicio de franja gris superior -->
   <div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <ul class="nav">
   

   <li class="nav-item">
    <a class="p-1 nav-link disabled" href="Adm.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO</a></FONT>

  </li>
    
  <li class="nav-item">
    <a class=" p-1 nav-link disabled active" href="usuario.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USUARIOS</a></FONT>
  </li>

    <li class="nav-item">
    <a class=" p-1 nav-link disabled active" href="instrumentos.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSTRUMENTOS</a></FONT>
  </li>
    
   <li class="nav-item">
    <a class=" p-1 nav-link disabled active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISTEMA ELECTRÓNICO PARA EL CONTROL DE REACTIVOS Y MATERIALES EN LABORATORIOS</a>
  </li>
</div>
<!-- Fin de franja gris superior -->

<!-- Creacion de formulario -->
<center>
    <table >
      <thead font color="black">
      <tr>
        
        <th colspan="1"  font color = "#000000" >
          <th colspan="10"> <center>LISTA DE QUÍMICOS</center></th> 
        </tr> 
      
      <tbody>
        <tr>
          <td>Clave Químico</td>
          <td>Nombre</td>
          <td>Gaveta</td>
          <td>Cantidad</td>
          <td>Gramaje Total</td>
          <td>Observaciones</td>
          <td></td>
        </tr>

        <?php
 $conexion=mysqli_connect("localhost","root","","ibq");

  $consulta="SELECT * FROM quimicos";
  $resultado = mysqli_query($conexion, $consulta);
  $resultcheck = mysqli_num_rows($resultado);

  while($row=mysqli_fetch_array($resultado))
  {
  ?>
    <tr>
   <td> <?php echo $row['clave_quim']?></td>
   <td> <?php echo $row['nombre_quim']?></td>
   <td> <?php echo $row['num_gaveta_quim']?></td>
   <td> <?php echo $row['tipo_cant']?></td>
   <td> <?php echo $row['gramaje']?></td>
   <td> <?php echo $row['obs_quim']?></td>
   <td> <a href="#" class="limpiar" onclick="confirmDelete('<?php echo $row["clave_quim"]; ?>')">Eliminar</a></td>

   </tr>
   <?php
 }
 ?>



      </tbody>
 </div >

 
    </table>
  </center>
<div>
 <div class="contenido">
 	<div class="form_top">
 		<h2> REGISTROS DE <span> QUÍMICOS </span></h2>
    </div>
    <form class="form_reg" action="registrar_qui.php" method="POST">
    
    <input class="input" type="text" placeholder="clave_quim" name = " clave_quim"required  autofocus>
    <input class="input" type="text" placeholder="num_gaveta_quim" name= "num_gaveta_quim" required>
    <input class="input" type="tel"  placeholder="nombre_quim" name= "nombre_quim" required>
    <input class="input" type="tex"  placeholder="tipo_cant" name= "tipo_cant" required>
    <input class="input" type="text" placeholder="gramaje" name= "gramaje" required >
    <input class="input" type="text" placeholder="obs_quim" name= "obs_quim" required >

     <div class="boton">
     <input class="registrar" type="submit" value="REGISTRAR">
     <input class="limpiar" type="reset" value="LIMPIAR">
     </div>
   
    </form>

</div>
</body>
</html>

