<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilosCrearCuenta.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/misAdmEstilos.css">
  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">
  <title>Registro de cuentas</title>
</head>

<body>
 <script type="text/javascript">
  function confirmDelete(usuario)
  {
    var respuesta = confirm('¿Está seguro de eliminar la cuenta con "ID '+usuario+'" seleccionado?')
    if (respuesta == true) 
    {
      window.location.href = "borrar_usu.php?id_persona="+usuario;  
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
    <a class=" p-1 nav-link disabled active" href="quimicos.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QUÍMICOS</a></FONT>
  </li>

    <li class="nav-item">
    <a class=" p-1 nav-link disabled active" href="instrumentos.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSTRUMENTOS</a></FONT>
  </li>

   <li class="nav-item">
    <a class=" p-1 nav-link disabled active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISTEMA ELECTRÓNICO PARA EL CONTROL DE REACTIVOS Y MATERIALES EN LABORATORIOS</a>
  </li>

    <li class="nav-item">
    <a class="p-1 nav-link disabled" href="cerrar_sesion.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CERRAR SESION</a></FONT>
  </li>
</div>
<!-- Fin del Menu -->

<center>
    <table >
      <thead font color="black">
      <tr>
          <th colspan="10">LISTA DE CUENTAS</th> 
      <tbody>
        <tr>
          <td>Usuario</td>
          <td>Contrasena</td>
          <td>Cargo</td>
          <td></td>  
         </tr>
<?php
 $conexion=mysqli_connect("localhost","root","","ibq");

  $consulta="SELECT * FROM ibq.usuarios";
  $resultado = mysqli_query($conexion, $consulta);
  $resultcheck = mysqli_num_rows($resultado);

  while($row=mysqli_fetch_array($resultado))
  {
  ?>
    <tr>
   <td> <?php echo $row['usuario']?></td>
   <td> <?php echo $row['contrasena']?></td>
   <td> <?php echo $row['tipo_usuario']?></td>
   <td> <a href="#" class="limpiar" onclick="confirmDelete('<?php echo $row["usuario"]; ?>')">Eliminar</a></td>


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
    <h2> REGISTRAR <span> USUARIO </span></h2>
    </div>
    <form class="form_reg" action="registrar_usu.php" method="POST">
  
    <input class="input" type="text" placeholder="Usuario" name = "usuario"required  autofocus>
    <input class="input" type="text" placeholder="Contrasena" name= "contrasena" required>
    <input class="input" type="tel"  placeholder="Tipo_Usuario" name= "tipo_usuario" required>
     <div class="boton">
     <input class="crear" type="submit" value="Crear">
     <input class="limpiar" type="reset" value="LIMPIAR">

     </div>
   
    </form>
</div>
</body>
</html>