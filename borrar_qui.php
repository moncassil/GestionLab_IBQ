<?php 
     $conexion=mysqli_connect("localhost","root","","ibq");
    
// --------------------------------------------  CONSULTA PARA ELIMINAR INSTRUMENTOS  --------------------------------------------------
   

  borrarquimico($_GET['clave_quim']);

  function borrarquimico($clave_quim)
	{
	 global $conexion;
  

      $sql = "DELETE FROM ibq.quimicos WHERE clave_quim = '$clave_quim'";
      $rs=$conexion ->query($sql);
    var_dump("$sql");
      mysqli_close($conexion);
      

  }


   ?>

   <script type="text/javascript">
     alert("Químico eliminado correctamente");
     window.location.href='quimicos.php';


   </script>