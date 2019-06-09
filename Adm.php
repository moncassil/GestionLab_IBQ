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
 
  <title>Administrador</title>
  <link rel="stylesheet" href="css/EncabezadoPie.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.js">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">

</head>

<body>
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
<!--Fin de pie pag -->

</body>
</html>