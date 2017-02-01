<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>

	<style> 
		.resaltar {
			color: #1593C7;
			background-color: #C3BD14;
			font-weight: bold;
			text-align: center;}

		.resaltarRamaTest {
			color: #5B0EF7;
			background-color: #11F631;
			font-weight: bold;
			text-align: center;}	

		.btnEnviar{
			color: #D70D0D;
			border-radius: 10px;
			alignment-baseline: central;
			border: 10px solid #F91842;
		}	
	</style>
</head>
<body>
<p class="resaltar"> hola te da hm1</p>
<?php
echo '<p class="resaltar">Esto es un ejemplo de parrafo creado con comillas simples</p>';
echo "<p class='resaltar'> Esto es un ejemplo de parrafo creado con comillas dobles</p>";
echo "<p class=\"resaltar\"> Esto es un ejemplo de parrafo creado con barra separadora</p>";

//para comparar cadenas strcmp diferencia mayusculas
//y strcasecmp no diferencia mayusculas

$cadena1="herman";
$cadena2="HERMAN";

$resultado=strcmp($cadena1, $cadena2); //devuelve 1 si no son iguales y 0 si lo son
if ($resultado) {
	echo "cadenas no son iguales <br>";
}else{
	echo "cadenas son iguales <br>";
}


//echo "El resultado es " . $resultado . "<br>";

$resultado=strcasecmp($cadena1, $cadena2); //devuelve 1 si no son iguales y 0 si lo son
if ($resultado) {
	echo "cadenas no son iguales <br>";
}else{
	echo "cadenas son iguales <br>";
}
//echo "El resultado es " . $resultado . "<br>";
echo "<p class='resaltar'> Realizamos cambios para GITHUB </p>";
echo "<p class='resaltarRamaTest'> Realizamos cambios para GITHUB en la rama Test </p>";

?>

<input class="btnEnviar" type="submit" name="btnEnviando" value="Enviar" id="btnEnviando">
<input class="btnEnviar" type="submit" name="btnCancelar" value="Cancelar" id="btnCancelar">
<p class="resaltar">cambio realizado por hmoralesaragithub1 nuevamente</p>
 <p class="resaltar">tercer y cuarto quinto cambio realizado por hmoralesaragithub1 habiendo cambiado</p>
</body>
</html>