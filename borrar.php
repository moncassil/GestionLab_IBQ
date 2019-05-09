<?php 
      $conexion=mysqli_connect("localhost","root","","ibq");

      $id_persona = $_GET['id_persona'];

      function borrarper()
	{
	 

      $sql = "DELETE FROM persona WHERE id_persona = {$id_persona}";
      $rs=$conexion ->query($sql);


      mysqli_close($conexion);

     }