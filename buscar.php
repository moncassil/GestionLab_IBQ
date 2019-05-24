<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "ibq";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM ibq.quimicos";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query= "SELECT * FROM ibq.quimicos WHERE nombre_quim LIKE '%".$q."%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='css/estilotablas.css'>
    			<thead>
    	<tr>
          <td>Almacen</td>
          <td>Clave Químico</td>
          <td>Nombre</td>
          <td>Gaveta</td>
          <td>Cantidad</td>
          <td>Gramaje Total</td>
          <td>Observaciones</td>
    	</tr>

       </thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
   <td>".$fila['id_almacen']."</td>
   <td>".$fila['clave_quim']."</td>
   <td>".$fila['nombre_quim']."</td>
   <td>".$fila['num_gaveta_quim']."</td>
   <td>".$fila['tipo_cant']."</td>
   <td>".$fila['gramaje']."</td>
   <td>".$fila['obs_quim']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>