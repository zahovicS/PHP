<?php 
$Monto=1800;//indicar si el monto tiene descuento (monto >1000)
$Edad=18;//indicar si mayor o menor de edad
$Sueldo=600;//indicar si el sueldo minimo o no
	echo "Ejercicio 1";
	echo "<br />";
	echo "<br />";
	if($Monto>=1000)
	{
		echo "Tiene Descuento";
	}
	else
	{
		echo "Sin descuento";
	}

	echo "<br />";
	//operador ternario
	//	'expresion'?'verdero'        :'Flaso'
	echo $Monto>=1000?"Tiene Descuento":"Sin descuento";
	echo "<br />";
	echo "<br />";
	
	echo "Ejercicio 2";
	echo "<br />";
	echo "<br />";
	if ($Edad>=18) {
	echo "Mayor de edad";
	}else
	{
	echo "Menor de edad";
	}
	echo "<br />";
	echo $Edad>=18?"Mayor de edad":"Menor de edad";
	
	echo "<br />";
	echo "<br />";

	echo "Ejercicio 3";
	echo "<br />";
	echo "<br />";
	if ($Sueldo==930) {
		echo "Sueldo minimo";
	}else
	{
		echo "No es sueldo minimo";
	}
	echo "<br />";
	echo $Sueldo==930?"Sueldo Minimo":"No es sueldo minimo";
?>	