<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "shinigami";
	$dbname = "muebleria";
	$conexion = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die ("Error: En la conexion");
	
	if ($conexion->connect_errno)
	{
		echo "Lo sentimos, este sitio web está experimentando problemas.";
	}

else 
{
	$conexion->character_set_name();
/* cambiar el conjunto de caracteres a utf8 */
if (!$conexion->set_charset("utf8")) 
{
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conexion->error);
    exit();
} 
else 
{
$conexion->character_set_name();
}
}
//mysqli_select_db($dbname,$conexion);
	
?>
