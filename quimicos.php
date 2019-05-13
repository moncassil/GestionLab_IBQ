
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


	<title>REGISTRO DE QUIMICOS </title>
</head>

<body>
   <!-- Inicio de franja gris superior -->
   <div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <ul class="nav">
   

   <li class="nav-item">
    <a class="p-1 nav-link disabled" href="Adm.php"><FONT SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO</a></FONT>
  </li>
    
   <li class="nav-item">
    <a class=" p-1 nav-link disabled active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISTEMA ELECTRÓNICO PARA EL CONTROL DE REACTIVOS Y MATERIALES EN LABORATORIOS</a>
  </li>
</div>
<!-- Fin de franja gris superior -->

<!-- Creacion de formulario -->
<center>
    <table >
      <thead font color="black">
      <tr>
        
        <th colspan="1"  font color = "#000000" >
          <th colspan="10"> <center>REGISTRO DE QUIMICOS</center></th> 
        </tr> 
      
      <tbody>
        <tr>
          <td>clave_quim</td>
          <td>num_gaveta_quim </td>
          <td>nombre_quim</td>
          <td>tipo_cant</td>
          <td>gramaje</td>
          <td>obs_quim</td>
          

      </tbody>
 </div >

 
    </table>
  </center>
<div>
 <div class="contenido">
 	<div class="form_top">
 		<h2> REGISTROS <span> DE QUIMICOS </span></h2>
    </div>
    <form class="form_reg" action="registrar_persona.php" method="POST">
    
    <input class="input" type="text" placeholder="clave_quim" name = " clave_quim"required  autofocus>
    <input class="input" type="text" placeholder="num_gaveta_quim" name= "num_gaveta_quim" required>

    <input class="input" type="tel"  placeholder="nombre_quim" name= "nombre_quim" required>

    <input class="input" type="tex"  placeholder="tipo_cant" name= "tipo_cant" required>

    <input class="input" type="text" placeholder="gramaje" name= "gramaje" required >

     <div class="boton">
     <input class="registrar" type="submit" value="REGISTRAR">
     <input class="limpiar" type="reset" value="LIMPIAR">
     </div>
   
    </form>

</div>
</body>
</html>

