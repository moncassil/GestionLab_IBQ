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
    <link rel="stylesheet" href="css/EncabezadoPie.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.js">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/estilotablas.css">
    <link rel="stylesheet" href="css/EncabezadoPie.css">


    <title>CONSULTA DE INSTRUMENTOS </title>
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
  <!---- Inicio logo de cabezera -->
  <header>
    <div class="logo">
      <img src="imagenesIBQ/logoIBQ1.png">
    </div>
  </header>
  <!---- Fin logo de cabezera -->

  <!-- Inicio de menu -->
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
            <a class="dropdown-item" href="ConsultaUsua.php">Personas</a>
            <a class="dropdown-item" href="ConsultaMateriales.php">Materiales</a>
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
     
  <!-- Fin del Menu -->
     <section id="container" class="contenido">
      <form action="consultam.php" method="POST">
        <select name="laboratorios">
          <option>Todos</option>
          <option >01</option>
          <option >02</option>
          <option >03</option>
          <option >04</option>
          <option >05</option>
        </select>
        <input type="text" name="caja_busqueda">
        <input class="registrar" type="submit" value="Buscar"> 
      </form>
    </section>


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
            <td>Laboratorio</td>
            <td>Clave</td>
            <td>Nombre</td>
            <td>Número gaveta</td>
            <td>Cantidad</td>
            <td>Observaciones</td>
            <td>Accion</td>
          </tr>
        <?php
         $conexion=mysqli_connect("localhost","root","","ibq");

         $almacen=$_REQUEST['laboratorios'];
         $caja_busqueda=$_REQUEST['caja_busqueda'];

         if ($almacen == 'Todos')
         {
           $almacen = "";
         }

          $consulta="SELECT * FROM ibq.instrumento WHERE nom_instrum LIKE '$caja_busqueda%' and id_almacen LIKE '$almacen%'";
          var_dump("$consulta");
          $resultado = mysqli_query($conexion, $consulta);
          $resultcheck = mysqli_num_rows($resultado);

          while($row=mysqli_fetch_array($resultado))
          {
          ?>
          <tr>
           <td> <?php echo $row['id_almacen']?></td>
           <td> <?php echo $row['clave_instrum']?></td>
           <td> <?php echo $row['nom_instrum']?></td>
           <td> <?php echo $row['ubicacion_inst']?></td>
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

  <!--Inicio de pie pag -->

  <div class="footer">


  <font size=2>
    ITA - ALGUNOS DERECHOS RESERVADOS © 2019 
  Avd. Instituto Tecnológico s/n Crucero del Cayaco C.P. 39905 
  E-mail de contacto: com.difusion@it-acapulco.edu.mx, 
  direccion@it-acapulco.edu.mx, 
  Teléfonos (744) 442-9010 al 19. 
  </font> 
    
  </div>
  </body>
  </html>