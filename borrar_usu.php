<?php 
     $conexion=mysqli_connect("localhost","root","","ibq");
    
// --------------------------------------------  CONSULTA PARA ELIMINAR USUARIO   -------------------------------------------------------------
   

  borrarper($_GET['usuario']);


  function borrarper($usuario)
	{
	 global $conexion;
  

      $sql = "DELETE FROM ibq.usuarios WHERE usuario = '$usuario'";
      $rs=$conexion ->query($sql);
    var_dump("$sql");
      mysqli_close($conexion);
      

  }
   ?>

   <script type="text/javascript">
     alert("Usuario eliminado correctamente");
     window.location.href='crearcuenta.php';


   </script>