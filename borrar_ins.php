<?php 
     $conexion=mysqli_connect("localhost","root","","ibq");
    
// --------------------------------------------  CONSULTA PARA ELIMINAR INSTRUMENTOS  --------------------------------------------------
   

  borrarinstrumento($_GET['clave_instrum']);

  

  function borrarinstrumento($clave_instrum)
	{
	 global $conexion;
  

      $sql = "DELETE FROM ibq.instrumento WHERE clave_instrum = '$clave_instrum'";
      $rs=$conexion ->query($sql);
    var_dump("$sql");
      mysqli_close($conexion);
      

  }


   ?>

   <script type="text/javascript">
     alert("Instrumento eliminado correctamente");
     window.location.href='instrumentos.php';


   </script>