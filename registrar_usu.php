	<?php
	$conexion=mysqli_connect("localhost","root","","ibq");


// ----------------------------------Agregar persona  -------------------------------------------------------------------------
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	$tipo_usuario=$_POST['tipo_usuario'];

    agregarins($usuario, $contrasena, $tipo_usuario);
	

	function agregarins($usuario, $contrasena, $tipo_usuario)
	{
	global $conexion;

	$sql ="INSERT INTO ibq.usuarios(usuario,contrasena,tipo_usuario)
	VALUES('$usuario','$contrasena','$tipo_usuario')";

	$rs=$conexion ->query($sql);

	
	mysqli_free_result($sql);

	mysqli_close($conexion);
	}
// --------------------------------Aqui termina Agregar persona ---------------------------------------------------------------


?>


   <script type="text/javascript">
     alert("Usuario agregado correctamente");
     window.location.href='crearcuenta.php';


   </script>