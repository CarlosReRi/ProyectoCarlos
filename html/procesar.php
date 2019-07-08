<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$nombre=$_POST['nombsre'];
		$telefono=$_POST['telefono'];
		$email=$_POST['email'];
		$edad=$_POST['edad'];
		

		echo "Mi nombre es: ".$nombre. "<br>";
		echo "Mi telefono es: ".$telefono. "<br>";
		echo "Mi email es: ".$email. "<br>";
		echo "Mi edad es: ".$edad. "<br>";
		
	?>
</body>
</html>