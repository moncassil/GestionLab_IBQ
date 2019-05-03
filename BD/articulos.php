<?php 
require_once("Conexion.php");
$model=new Conexion();
$query="SELECT * FROM articulo";
$result=$model->get_query($query);
var_dump($result);
if ($result) {
   foreach ($result as $key => $value) {?>
     <tr>
     	<td><?=$value['id_articulo']?></td>
     	<td><?=$value['articulo']?></td>
     	<td><?=$value['precio']?></td>
     	<td><?=$value['id_tipo']?></td>
     	<td><?=$value['existencia']?></td>
     	<td>
     		<form action="BD/borrarArticulo.php" method="POST">
     			<input type="hidden" name="id" value="<?=$value['id_articulo']?>">
     			<input type="submit" value="Eliminar">
     		</form>
     	</td>
     </tr>  
<?php }
}else{
   echo "<tr><td class=\"text-center\" colspan=\"4\">No hay articulos</td></tr>";  
}	
?>


