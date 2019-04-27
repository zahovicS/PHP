<?php 
$Monto=1800;//indicar si el monto tiene descuento (monto >1000)
$Edad=18;//indicar si mayor o menor de edad
$Sueldo=600;//indicar si el sueldo minimo o no
	echo "Ejercicio 1";
	echo "<br />";
	echo "<br />";
	if($Monto>=1000)
	{
		echo "Estructura if/else: Tiene Descuento";
	}
	else
	{
		echo "Estructura if/else: Sin descuento";
	}

	echo "<br />";
	//operador ternario
	//	'expresion'?'verdero'        :'Flaso'
	echo $Monto>=1000?"Operdador Ternario: Tiene Descuento":"Operdador Ternario: Sin descuento";
	echo "<br />";
	echo "<br />";
	
	echo "Ejercicio 2";
	echo "<br />";
	echo "<br />";
	if ($Edad>=18) {
	echo "Estructura if/else: Mayor de edad";
	}else
	{
	echo "Estructura if/else: Menor de edad";
	}
	echo "<br />";
	echo $Edad>=18?"Operdador Ternario: Mayor de edad":"Operdador Ternario: Menor de edad";
	
	echo "<br />";
	echo "<br />";

	echo "Ejercicio 3";
	echo "<br />";
	echo "<br />";
	if ($Sueldo==930) {
		echo "Estructura if/else: Sueldo minimo";
	}else
	{
		echo "Estructura if/else: No es sueldo minimo";
	}
	echo "<br />";
	echo $Sueldo==930?"Operdador Ternario: Sueldo Minimo":"Operdador Ternario: No es sueldo minimo";
?>	