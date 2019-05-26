

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Consulta Materiales</title>
    <link rel="stylesheet" href="css/EncabezadoPie.css">
    <link rel="stylesheet" href="css/estilotablas.css">
  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">
  <link rel="stylesheet" href="css/bootstrap.css">
  

<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;

}
th, td
{
  padding: 1px;
}
th  /*estilo centrado y color para el titulo de las tablas*/
{
  text-align: center;
  background: #6faaf2;
}
</style>

</head>
<body>
   
	 <!---- Inicio logo de cabezera -->
<header>
  <div class="logo">
    <img src="imagenesIBQ/logoIBQ1.png">
  </div>
</header>
<!---- Fin logo de cabezera -->

<!---- Inicio de menu  -->
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONSULTAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Personas</a>
          <a class="dropdown-item" href="ConsultaMateriales.html">Materiales</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTROS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Personas</a>
          <a class="dropdown-item" href="#">Cuentas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Quimicos</a>
          <a class="dropdown-item" href="#">Instrumentos</a>
        </div>
      </li>
    </ul>
</nav>
</div>
<!---- Fin de menu  -->

<!-- inicio de formulario-->
<form action="ConsultaMateriales.php" method ="POST">
	
  <input type="text" name="consulta" id="consulta"></input>
  <input type="submit" value="Buscar">

 </form>

<!-- fin de formulario-->

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

  $consulta=$_POST['consulta'];
  $query="SELECT * FROM quimicos";
  $resultado = mysqli_query($conexion, $query);
  $resultcheck = mysqli_num_rows($resultado);

  if (isset($_POST['consulta'])) {
      $q =$_POST['consulta'];
      $query= "SELECT * FROM ibq.quimicos WHERE nombre_quim LIKE '%".$q."%'";
    }

    
  while($row=mysqli_fetch_array($query))
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
?>











<!--Inicio de pie pag -->

<div class="footer">

<font size=2>
	ITA - ALGUNOS DERECHOS RESERVADOS © 2019 
Avd. Instituto Tecnológico s/n Crucero del Cayaco C.P. 39905 
<p>E-mail de contacto: com.difusion@it-acapulco.edu.mx, 
direccion@it-acapulco.edu.mx, 
Teléfonos (744) 442-9010 al 19. 
</font>
  
</div>


   <script type="text/javascript" src="js/jquery3.3.1.min.js"> </script>

  <script type="text/javascript" src="js/main.js"></script>    



</body>
</html>