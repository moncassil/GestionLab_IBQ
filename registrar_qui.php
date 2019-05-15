<?php
	$conexion=mysqli_connect("localhost","root","","ibq");


// ----------------------------------Agregar Instrumento ----------------------------------------------------------------------
	$clave_quim=$_POST['clave_quim'];
	$num_gaveta_quim=$_POST['num_gaveta_quim'];
	$nombre_quim=$_POST['nombre_quim'];
	$tipo_cant=$_POST['tipo_cant'];
	$gramaje=$_POST['gramaje'];
	$obs_quim=$_POST['obs_quim'];

    agregarins($clave_quim, $num_gaveta_quim, $nombre_quim, $tipo_cant, $gramaje, $obs_quim);
	
	function agregarins($clave_quim, $num_gaveta_quim, $nombre_quim, $tipo_cant, $gramaje, $obs_quim)
	{
	global $conexion;

	$sql ="INSERT INTO ibq.quimicos(clave_quim, num_gaveta_quim, nombre_quim, tipo_cant, gramaje, obs_quim)
	VALUES ('$clave_quim', '$num_gaveta_quim', '$nombre_quim', '$tipo_cant', '$gramaje', '$obs_quim')";

	$rs=$conexion ->query($sql);
	var_dump("$sql");
	
	mysqli_free_result($sql);

	mysqli_close($conexion);
	}
// --------------------------------Aqui termina Agregar instrumento---------------------------------------------------------------


?>

   <script type="text/javascript">
     alert("Quimico agregado correctamente");
     window.location.href='quimicos.php';


   </script>