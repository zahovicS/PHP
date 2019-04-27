<?php 
	$cantidad=0;
	$Nombres;
	//PHP es un lenguaje de expresion
	/*
	if($Nombres){
		echo "Este mensaje es si la expresion devuelve true";
	}
	else{
		echo "Este mensaje es si la expresion devuelve false ";
	}*/
?>

<table>
	<tr>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>DNI</th>
	</tr>
	<?php if(1): ?>
		<style type="text/css">
			td{
				background: green;
				color: white;
			}
		</style>
		<tr>
			<td>Luis</td>
			<td>Gutierrez</td>
			<td>12345678</td>
		</tr>
		<tr>
			<td>Juan</td>
			<td>Huaroto</td>
			<td>87654321</td>
		</tr>
	<?php endif; ?>
</table>