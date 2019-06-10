	<?php
	$conexion=mysqli_connect("localhost","root","","ibq");


// ----------------------------------Agregar persona  -------------------------------------------------------------------------
	$clave_instru=$_POST['clave_instrum'];
	$nom_instrum=$_POST['nom_instrum'];
	$num_gaveta=$_POST['num_gaveta'];
	$cantidad=$_POST['cantidad'];
	$obser_instrum=$_POST['obser_instrum'];
	$id_almacen = $_POST['id_almacen'];


    agregarins($clave_instru, $nom_instrum, $num_gaveta, $cantidad, $obser_instrum, $id_almacen);
	

	function agregarins($clave_instru, $nom_instrum, $num_gaveta, $cantidad, $obser_instrum, $id_almacen)
	{
	global $conexion;

	$sql ="INSERT INTO ibq.instrumento(clave_instrum,nom_instrum,num_ubicacion_inst,obser_instrum,id_almacen)
	VALUES('$clave_instru','$nom_instrum','$num_gaveta','$cantidad','$obser_instrum', '$id_almacen')";

	$rs=$conexion ->query($sql);
	var_dump("$sql");
	
	mysqli_free_result($sql);

	mysqli_close($conexion);
	}
// --------------------------------Aqui termina Agregar persona ---------------------------------------------------------------


?>


   <script type="text/javascript">
     alert("Instrumento agregado correctamente");
     window.location.href='instrumentos.php';


   </script>