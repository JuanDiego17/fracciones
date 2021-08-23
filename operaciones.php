<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

		body {
	  		background-color: #FFFFE6;
		}

	</style>
</head>
<body>
	<center>
	<br><br><br>
	<?php

		function Operacion($num1,$den1,$num2,$den2,$oper)
		{
			switch ($oper) {
				case 'sumar':
					$num3 = $num1 * $den2;
					$num4 = $den1 * $num2;
					$den3 = $den1 * $den2;

					$num5 = $num3 + $num4;

					$resultado = $num5."/".$den3;

					echo "El resultado de la suma de las fracciones ".$num1."/".$den1." y ".$num2."/".$den2." es: ";
					break;

				case 'restar':
					$num3 = $num1 * $den2;
					$num4 = $den1 * $num2;
					$den3 = $den1 * $den2;

					$num5 = $num3 - $num4;

					$resultado = $num5."/".$den3;

					echo "El resultado de la resta de las fracciones ".$num1."/".$den1." y ".$num2."/".$den2." es: ";
					break;

        		case 'multiplicar':
            		$num3 = $num1 * $num2;
					$den3 = $den1 * $den2;

					$resultado = $num3."/".$den3;

					echo "El resultado de la multiplicación de las fracciones ".$num1."/".$den1." y ".$num2."/".$den2." es: ";
            		break;

        		case 'dividir':
            		$num3 = $num1 * $den2;
					$den3 = $den1 * $num2;

					$resultado = $num3."/".$den3;

					echo "El resultado de la división de las fracciones ".$num1."/".$den1." y ".$num2."/".$den2." es: ";
            		break;
				
			}
			return $resultado;
		}

		echo Operacion($_POST['numerador1'], $_POST['denominador1'], $_POST['numerador2'], $_POST['denominador2'], $_POST['operaciones']);	

	?>
	<br><br><br>
	<a href="index.php"><input type="submit" value="Volver"></a>
	</center>
</body>
</html>