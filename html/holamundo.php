<html>
<head>
<title>Prueba de PHP</title>
</head>
<body>

<style type="text/css">
	
	body{
		background-color: aqua;
	}

	h1{
		background-color: purple;
		color:white;	
	}

</style>

<center>
<h1>Variables en PHP</h1>
<?php 
$operacion =5 +5;
echo $operacion. "<br> <br>";
?>

<h1>Variables en concatenacion</h1>

<?php
 $color="rojo";
 echo "mi carro es" .$color. "<br>";
 echo "Subete a la banqueta para que no te atropellen";
 ?>

<br><br><br><br>	
<h1>variables locales globales</h1>
<h3>Una variable declarada fuera de una funcion tiene un enlace global y solo puede ser accedida fuera de la funcion</h3>

<?php
//$x=5;
function prueba1(){
	$x=10;
echo "<p> variable x dentro de la funcion tiene valor: ".$x. "</p>";
}
prueba1();
echo "<p> variable fuera de la funcion tiene valor: ". $x. "</p>";
?>

<br>
<h1>Acceso a variables de manera local</h1>

<?php
$x=5;
$y=10;
function prueba2(){ 
global $x,$y;
$y=$x+$y;
}
prueba2();
echo $y;
?>

<br>
<h1>Acceso a variables de manera global con notacion arreglo</h1>

<?php
$x=5;
$y=6;
function prueba3(){ 
$GLOBALS ['y'] =$GLOBALS['x']+$GLOBALS['y'];
}
prueba3();
echo $y;
?>


<br>
<h1>uso de static en la definicion de variables</h1>

<?php
function prueba4(){
	static $x=0;
	echo $x;
	$x++;
}

prueba4();
prueba4();
prueba4();

?>

<br>
<h1>Tipos de datos en php</h1>

<?php
$x="FC BARCELONA";
$y=122;
$z=10.3;
$a=true;
$w=false;

var_dump($x);

print("<br>");
var_dump($y);

print("<br>");
var_dump($z);

print("<br>");
var_dump($a);

print("<br>");
var_dump($w);

?>

<br>
<h1>Variables en PHP</h1>
<?php
$coche=array("Volvo","BMW","Toyota");
var_dump($coche);
?>

<br>
<h1>Uso de clases</h1>
<?php
class Coche{
	function Coche(){
	$this->model="AUDI";
	$this->marca="R8";
	$this->color="GRIS";
	$this->año="2018";
	$this->motor="V8";
}
}
	$wagen=new Coche();
	echo $wagen->model;
	print("<br>");
	echo $wagen->marca;
	print("<br>");
	echo $wagen->color;
	print("<br>");
	echo $wagen->año;
	print("<br>");
	echo $wagen->motor;
?>

</center>
</body>
</html>