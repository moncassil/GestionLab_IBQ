<?php
    session_start();
    $varsesion = $_SESSION['usuario'];

    if ($varsesion == null || $varsesion = '') 
    {
      echo"<SCRIPT language= JavaScript > alert('No tienes autorización');
          window.location.href='index.php'; </script>";
      die();
    }

?>

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
  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">

	<title>Registro de Usuarios</title>
</head>


<body>


 <script type="text/javascript">
  function confirmDelete(id_persona)
  {
    var respuesta = confirm('¿Está seguro de eliminar la persona con "ID '+id_persona+'" seleccionado?')
    if (respuesta == true) 
    {
      
      window.location.href = "borrar_per.php?id_persona="+id_persona;
      
    }
    else
    {
      return false;

  }
    }

</script>




   <!-- Inicio Menu -->
   <div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <ul class="nav">
   

   <li class="nav-item">
    <a class="p-1 nav-link disabled" href="Adm.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO</a></FONT>
  </li>
    
    <li class="nav-item">
    <a class=" p-1 nav-link disabled active" href="quimicos.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QUÍMICOS</a></FONT>
  </li>

    <li class="nav-item">
    <a class=" p-1 nav-link disabled active" href="instrumentos.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSTRUMENTOS</a></FONT>
  </li>

   <li class="nav-item">
    <a class=" p-1 nav-link disabled active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISTEMA ELECTRÓNICO PARA EL CONTROL DE REACTIVOS Y MATERIALES EN LABORATORIOS</a>
  </li>

    <li class="nav-item">
    <a class="p-1 nav-link disabled" href="cerrar_sesion.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CERRAR SESION</a></FONT>
  </li>
</div>
<!-- Fin del Menu -->

<center>

    <table >
      <thead font color="black">
      <tr>
        
        <th colspan="1"  font color = "#000000" >
          <th colspan="10">LISTA DE PERSONAS</th> 
        </tr> 
      
      <tbody>
        <tr>
          <td>id persona</td>
          <td>Nombre </td>
          <td>Apellido Paterno</td>
          <td>Apellido Materno</td>
          <td>Telefono </td>
          <td>Cargo</td>
          <td>Comentarios</td>
          <td></td>
         </tr>


<?php
 $conexion=mysqli_connect("localhost","root","","ibq");

  $consulta="SELECT * FROM persona";
  $resultado = mysqli_query($conexion, $consulta);
  $resultcheck = mysqli_num_rows($resultado);

  while($row=mysqli_fetch_array($resultado))
  {
  ?>
    <tr>
   <td> <?php echo $row['id_persona']?></td>
   <td> <?php echo $row['nombre_persona']?></td>
   <td> <?php echo $row['ape_pat']?></td>
   <td> <?php echo $row['ape_mat']?></td>
   <td> <?php echo $row['cargo_persona']?></td>
   <td> <?php echo $row['tel_persona']?></td>
   <td> <?php echo $row['coment_persona']?></td>
   <td> <a href="#" class="limpiar" onclick="confirmDelete('<?php echo $row["id_persona"]; ?>')">Eliminar</a></td>

   </tr>
   <?php
 }
 ?>
 <!-- Aqui termina la conexion -->

  </tbody>

    </table>
  </center>



<div>
 <div class="contenido">
 	<div class="form_top">
 		<h2> REGISTRAR <span> PERSONA </span></h2>
    </div>
    <form class="form_reg" action="registrar_per.php" method="POST">
    
    <input class="input" type="text" placeholder="id persona" name = " id_persona"required  autofocus>
    <input class="input" type="text" placeholder="Nombre" name= "Nombre" required>
    <input class="input" type="tel"  placeholder="Apellido Paterno" name= "Apellido_Paterno" required>
    <input class="input" type="tex"  placeholder="Apellido Materno" name= "Apellido_Materno" required>
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