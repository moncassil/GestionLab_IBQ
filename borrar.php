<?php 

      $conexion=mysqli_connect("localhost","root","","ibq");
    

header("Location: instrumentos.php");


// --------------------------------------------  CONSULTA PARA ELIMINAR PERSONA   -------------------------------------------------------------
    $id_persona = $_GET['id_persona'];

	if ($id_persona >= 0)
	{
		borrarper($id_persona);
	}

  function borrarper($id_persona)
	{
	 global $conexion;

      $sql = "DELETE FROM persona WHERE id_persona = {$id_persona}";
      $rs=$conexion ->query($sql);


      mysqli_close($conexion);
      


     }
// -----------------------------------AQUI TERMINA LA CONSULTA PARA ELIMINAR PERSONA-----------------------------------------------------

// --------------------------------------------  CONSULTA PARA ELIMINAR INSTRUMENTOS   -------------------------------------------------------------


  $clave_instrum = $_GET['clave_instrum'];

  if ($clave_instrum >= 0)
  {
    borrarinstrumento($clave_instrum);
  }

  function borrarinstrumento($clave_instrum)
  {
   global $conexion;

      $sql = "DELETE FROM instrumento WHERE clave_instrum = {$clave_instrum}";
      $rs=$conexion ->query($sql);


      mysqli_close($conexion);
      


     }


     die();