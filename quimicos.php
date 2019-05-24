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
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Registo de quimicos</title>

  <link rel="stylesheet" href="css/estilotablas.css">
    <link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/EncabezadoPie.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.js">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">
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
   <header>
  <div class="logo">
    <img src="imagenesIBQ/logoIBQ1.png">
  </div>
</header>

<!---- Inicio de menu  -->
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Adm.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONSULTAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ConsultaUsua.php">Personas</a>
          <a class="dropdown-item" href="ConsultaMateriales.html">Materiales</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTROS
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
        <a class="nav-link" href="cerrar_sesion.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CERRAR SESION<span class="sr-only">(current)</span></a>
      </li>

    </ul>
</nav>
</div>
<!---- Fin de menu  -->

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
          <td>Almacen</td>
          <td>Clave Químico</td>
          <td>Nombre</td>
          <td>Gaveta</td>
          <td>Cantidad</td>
          <td>Gramaje Total</td>
          <td>Observaciones</td>
          <td>Accion</td>
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
   <td> <?php echo $row['id_almacen']?></td>
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
    <input class="input" type="text" placeholder="id_almacen" name = "id_almacen"required  autofocus>
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

