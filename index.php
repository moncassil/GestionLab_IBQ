<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Login</title>
  <link rel="stylesheet" href="css/estilosLogin.css">
    <link rel="stylesheet" href="css/EncabezadoPie.css">

  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">
  <link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript"> </script>

</head>
<body>
   <!---- Inicio logo de cabezera -->
<header>
  <div class="logo">
    <img src="imagenesIBQ/logoIBQ1.png" class="ajustarfrente">
  </div>
</header>
<!---- Fin logo de cabezera -->
   
	
 <div class="login-box">
      <img src="imagenesIBQ/ibq.jpg" class="avatar" alt="Avatar Image">
      <h1>ACCESO</h1>
      <form action="validar.php"  method="POST">
        <!-- USERNAME INPUT -->
        
        <label for="username">Usuario</label>
        <input type="text" placeholder="Enter Usuario" name="username" required="yes">
        
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Enter Contraseña" name="password" required="yes">
        <input type="submit" value="Iniciar sesión">
        <a href="olvidandoContrasena.html">Olvidaste tu contraseña?</a>

     </form>
 </div>
  
  <!--Inicio de pie pag -->

<div class="footer">

ITA - ALGUNOS DERECHOS RESERVADOS © 2019 
Avd. Instituto Tecnológico s/n Crucero del Cayaco C.P. 39905 
E-mail de contacto: com.difusion@it-acapulco.edu.mx, 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;direccion@it-acapulco.edu.mx, 
Teléfonos (744) 442-9010 al 19. 
  
</div>



</body>
</html>
