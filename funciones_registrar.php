	<?php
	$conexion=mysqli_connect("localhost","root","","ibq");






// ----------------------------------Agregar persona  -------------------------------------------------------------------------
	$id_persona=$_POST['id_persona'];
	$Nombre=$_POST['Nombre'];
	$Apellido_Paterno=$_POST['Apellido_Paterno'];
	$Apellido_Materno=$_POST['Apellido_Materno'];
	$Cargo=$_POST['Cargo'];
	$Telefono=$_POST['Telefono'];
	$Comentarios=$_POST['Comentarios'];


if ($id_persona >= 0)
	{
		agregarpersona($id_persona, $Nombre, $Apellido_Paterno, $Apellido_Materno, $Cargo, $Telefono, $Comentarios);
	}

	function agregarpersona($id_persona, $Nombre, $Apellido_Paterno, $Apellido_Materno, $Cargo, $Telefono, $Comentarios)
	{
	global $conexion;

	$sql ="INSERT INTO ibq.persona(id_persona,nombre_persona,ape_pat,ape_mat,tel_persona,cargo_persona,coment_persona)
	VALUES('$id_persona','$Nombre','$Apellido_Paterno','$Apellido_Materno','$Cargo','$Telefono','$Comentarios')";

	$rs=$conexion ->query($sql);

	header("Location: usuario.php?registro=hecho!");
	mysqli_free_result($sql);

	mysqli_close($conexion);
	}
// --------------------------------Aqui termina Agregar persona ---------------------------------------------------------------


// --------------------------------Aqui Empieza Agregar Instrumentos ----------------------------------------------------------


	$clave_instrum=$_POST['clave_instrum'];
	$nom_instrum=$_POST['nom_instrum'];
	$num_gaveta=$_POST['num_gaveta'];
	$cantidad=$_POST['cantidad'];
	$obser_instrum=$_POST['obser_instrum'];
	
	if ($clave_instrum >= 0)
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
		header("Location: instrumentos.php?registro=hecho!");
	}
// --------------------------------Aqui termina Agregar Instrumentos ---------------------------------------------------------------









exit();

