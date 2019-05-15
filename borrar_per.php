<?php 
     $conexion=mysqli_connect("localhost","root","","ibq");
    
// --------------------------------------------  CONSULTA PARA ELIMINAR PERSONA   -------------------------------------------------------------
   

  borrarper($_GET['id_persona']);

  

  function borrarper($id_persona)
	{
	 global $conexion;
  

      $sql = "DELETE FROM ibq.persona WHERE id_persona = '$id_persona'";
      $rs=$conexion ->query($sql);
    var_dump("$sql");
      mysqli_close($conexion);
      

  }


   ?>

   <script type="text/javascript">
     alert("Persona eliminada correctamente");
     window.location.href='usuario.php';


   </script>