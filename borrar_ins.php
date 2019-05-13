 <?php
 header("Location: instrumentos.php?");
 $conexion=mysqli_connect("localhost","root","","ibq");
 $clave_instrum = $_GET['clave_instrum'];

  if ($clave_instrum =="SS")
  {
    
  }

  else
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

exit();
?>