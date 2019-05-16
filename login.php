<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Login</title>
  <link rel="stylesheet" href="css/misEstilos.css">
  <link rel="icon" type="image/x-icon" href="imagenesIBQ/pagina.ico">
<script type="text/javascript">
</script>


</head>
<body>
	
 <div class="login-box">
      <img src="imagenesIBQ/ibq.jpg" class="avatar" alt="Avatar Image">
      <h1>ACCESO</h1>
      <form action=""  method="POST">
        <!-- USERNAME INPUT -->
        <?php
          if(isset($errorLogin))
          {
            echo "errorLogin";
          }

        ?>
        <label for="username">Usuario</label>
        <input type="text" placeholder="Enter Usuario" name="username" required="yes">
        
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Enter Contraseña" name="password" required="yes">
        <input type="submit" value="Iniciar sesión">
        <a href="olvidandoContrasena.html">Olvidaste tu contraseña?</a><br>
     </form>
 </div>
  
  <!--Inicio de pie pag-->
     </div>
        <div class="footer">
          <FONT FACE="courier" SIZE=3 COLOR="#4B4A48">
             
ITA - ALGUNOS DERECHOS RESERVADOS © 2019 
Avd. Instituto Tecnológico s/n Crucero del Cayaco C.P. 39905 
E-mail de contacto: it.acapulco@hotmail.com, Teléfonos (744) 442-9010 al 19.
          </FONT>
        </div>
        <!-- Fin del pie de pag-->


</body>
</html>
