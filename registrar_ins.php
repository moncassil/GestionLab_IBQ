<?php
	 $conexion=mysqli_connect("localhost","root","","ibq");

    header("Location: instrumentos.php?");

	$clave_instrum=$_POST['clave_instrum'];
	$nom_instrum=$_POST['nom_instrum'];
	$num_gaveta=$_POST['num_gaveta'];
	$cantidad=$_POST['cantidad'];
	$obser_instrum=$_POST['obser_instrum'];
	
	if ($clave_instrum == "SS")
	{
		
	}
	else
	{
		agregarinstrumento($clave_instrum, $nom_instrum, $num_gaveta, $cantidad, $obser_instrum);
	}

	function agregarinstrumento($clave_instrum, $nom_instrum, $num_gaveta, $cantidad, $obser_instrum)
	{
		global $conexion;
		$sql ="INSERT INTO ibq.instrumento(clave_instrum, nom_instrum, num_gaveta, cantidad, obser_instrum)
		VALUES ('$clave_instrum', '$nom_instrum', 'num_gaveta', '$cantidad', '$obser_instrum')";

		$rs=$conexion ->query($sql);


		mysqli_free_result($sql);
		mysqli_close($conexion);
		
	}
	exit();
?>



