<?php
    session_start();
    $varsesion = $_SESSION['usuario'];

    if ($varsesion == null || $varsesion = '') 
    {
      echo"<SCRIPT language= JavaScript >window.location.href='index.php'; </script>";
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
  <link rel="stylesheet" href="css/EncabezadoPie.css">
  <link rel="stylesheet" href="css/formulario.css">
   <link rel="stylesheet" href="css/estilotablas.css">
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

   <!---- Inicio logo de cabezera -->
     <div class="logo">
    <img src="imagenesIBQ/logoIBQ1.png">
  </div>
<!---- Fin logo de cabezera -->

<!---- Inicio de menu -->

<div>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       CONSULTAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ConsultaUsua.php">Personas</a>
          <a class="dropdown-item" href="ConsultaMateriales.php">Materiales</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       REGISTROS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="usuario.php">Personas</a>
          <a class="dropdown-item" href="crearcuenta.php">Cuentas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="quimicos.php">Quimicos</a>
          <a class="dropdown-item" href="instrumentos.php">Instrumentos</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cerrar_sesion.php">CERRAR SESION<span class="sr-only">(current)</span></a>
      </li>

    </ul>
</nav>
</div>

<!---- Fin de menu  -->

<center>
    <table >
      <thead font color="black">
      <tr>
          <th colspan="10">LISTA DE PERSONAS</th> 
      <tbody>
        <tr>
          <td>id persona</td>
          <td>Nombre </td>
          <td>Apellido Paterno</td>
          <td>Apellido Materno</td>
          <td>Telefono </td>
          <td>Cargo</td>
          <td>Comentarios</td>      
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
</div>
<!--Inicio de pie pag -->
<div class="footer">
<font size=2>
  ITA - ALGUNOS DERECHOS RESERVADOS © 2019 
Avd. Instituto Tecnológico s/n Crucero del Cayaco C.P. 39905 
<br>E-mail de contacto: com.difusion@it-acapulco.edu.mx, 
direccion@it-acapulco.edu.mx, 
Teléfonos (744) 442-9010 al 19. 
</font> 
</div>    
<!--Fin de pie pag -->

</body>
</html>