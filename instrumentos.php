<?php
    session_start();
    $varsesion = $_SESSION['usuario'];

    if ($varsesion == null || $varsesion = '') 
    {
      echo 'No tienes autorización';
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


	<title>REGISTRO DE INSTRUMENTOS </title>
</head>

<body>
<!-- Script para eliminar instrumentos -->
  <script type="text/javascript">
  function confirmDelete(clave_instrum)
  {
    var respuesta = confirm('¿Está seguro de eliminar el instrumento con id '+clave_instrum+' seleccionado?')
    if (respuesta == true) 
    {
      window.location.href = "borrar_ins.php?clave_instrum="+clave_instrum;
      

      
    }
    else
    {
      return false;

  }
    }

</script>




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
    <a class=" p-1 nav-link disabled active" href="quimicos.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QUÍMICOS</a></FONT>
  </li>
    
   <li class="nav-item">
    <a class=" p-1 nav-link disabled active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISTEMA ELECTRÓNICO PARA EL CONTROL DE REACTIVOS Y MATERIALES EN LABORATORIOS</a>
  </li>

    <li class="nav-item">
    <a class="p-1 nav-link disabled" href="cerrar_sesion.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CERRAR SESION</a></FONT>
  </li>
</div>
<!-- Fin de franja gris superior -->

<!-- Creacion de formulario -->
<center>
    <table >
      <thead font color="black">
      <tr>
        
        <th colspan="1"  font color = "#000000" >
          <th colspan="10"> <center>LISTA DE INSTRUMENTOS</center></th> 
        </tr> 
      
      <tbody>
        <tr>
          <td>Clave</td>
          <td>Nombre</td>
          <td>Número gaveta</td>
          <td>Cantidad</td>
          <td>Observaciones</td>
          <td></td>
        </tr>
      <?php
       $conexion=mysqli_connect("localhost","root","","ibq");

        $consulta="SELECT * FROM instrumento";
        $resultado = mysqli_query($conexion, $consulta);
        $resultcheck = mysqli_num_rows($resultado);

        while($row=mysqli_fetch_array($resultado))
        {
        ?>
        <tr>
         <td> <?php echo $row['clave_instrum']?></td>
         <td> <?php echo $row['nom_instrum']?></td>
         <td> <?php echo $row['num_gaveta']?></td>
         <td> <?php echo $row['cantidad']?></td>
         <td> <?php echo $row['obser_instrum']?></td>
         <td> <a href="#" class="limpiar" onclick="confirmDelete('<?php echo $row['clave_instrum']; ?>')">Eliminar</a></td>

         </tr>
         <?php
       }
       ?>

      </table>
      </tbody>
 </div >

 
    </table>
  </center>
<div>
 <div class="contenido">
 	<div class="form_top">
 		<h2> REGISTRO DE<span> INSTRUMENTO </span></h2>
    </div>
    <form class="form_reg" action="registrar_ins.php" method="POST">
    
    <input class="input" type="text" placeholder="clave_instrum" name = "clave_instrum"required  autofocus>
    <input class="input" type="text" placeholder="nom_instrum" name= "nom_instrum" required>
    <input class="input" type="tel"  placeholder="num_gaveta" name= "num_gaveta" required>
    <input class="input" type="tex"  placeholder="cantidad" name= "cantidad" required>
    <input class="input" type="text" placeholder="obser_instrum" name= "obser_instrum" required >


     <div class="boton">
     <input class="registrar" type="submit" value="REGISTRAR">
     <input class="limpiar" type="reset" value="LIMPIAR">
     </div>
   
    </form>

</div>
</body>
</html>