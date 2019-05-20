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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Administrador</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/misAdmEstilos.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.js">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">

</head>
<body>

   <!-- Inicio de barra superior de la pag -->

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <ul class="nav">
    
  <li class="nav-item">
    <a class="p-1 nav-link disabled" href="index.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO</a></FONT>
  </li>
 <li class="nav-item">
  
    <a class=" p-1 nav-link disabled active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISTEMA ELECTRÓNICO PARA EL CONTROL DE REACTIVOS Y MATERIALES EN LABORATORIOS</a>

  </li>
  <li class="nav-item">
    <a class="p-1 nav-link disabled" href="cerrar_sesion.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CERRAR SESION</a></FONT>
  </li>
<!-- Fin de barra superior de la pag -->


<!-- INICIO DE PROGRAMCION PARA BOTONES DE USUARIOS Y MATERIALES-->
<div>
 <h1>
  <div class="contenedorContenido">
  <div class="centrado" >
  <h3 font color="black" face="arial">
    <H2>Bienvenido(a) </H2>
     <H2><?php echo $_SESSION['usuario']?></H2>
<div class="btn-group" role="group" aria-label="Button group with nested dropdown">

<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="fa fa-user btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; USUARIOS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="ConsultaUsua.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consultar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

       <a id= "btnGroupDrop1" class="btn dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="usuario.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Persona &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

      <a class="dropdown-item" href="crearcuenta.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuenta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      <!--<a class="dropdown-item" href="usuario.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> -->
     
    </div>
  </div>
</div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="fas fa-store btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MATERIALES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </button>
  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item " href="quimicos.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quimicos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      <a class="dropdown-item" href="instrumentos.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instrumentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </div>
</div>
  </div>
<!-- FIN DE PROGRAMCION PARA BOTONES DE USUARIOS Y MATERIALES-->
</div>
</div>
</div>
</div>

<!--Inicio de pie pag-->
     </div>
        <div class="footer">
          <FONT FACE="courier" SIZE=2 COLOR="#4B4A48">
            ITA - ALGUNOS DERECHOS RESERVADOS © 2019 
            Avd. Instituto Tecnológico  s/n Crucero del Cayaco C.P. 39905 
            E-mail de contacto: com.difusion@it-acapulco.edu.mx,  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            direccion@it-acapulco.edu.mx, 
            Teléfonos (744) 442-9010 al 19. 
          </FONT>
        </div>
        <!-- Fin del pie de pag-->

</body>
</html>