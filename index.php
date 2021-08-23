<!DOCTYPE html>
<html>
<head>
	<title>Operaciones de Fracciones</title>
	<style>
		body {
	  		background-color: #FFFFE6;
		}

		table th {
		  	text-align: center;
		}
	</style>
</head>

<body>
	<center>
		<form action="operaciones.php" method="post">
		<table>
			<thead>
				<th colspan="4">
					<h1>Operación de Fracciones</h1>
				</th>
			</thead>
			<tbody>
				<tr>
					<th colspan="2">Fracción 1</th>
					<th colspan="2">Fracción 2</th>
				</tr>
				<tr>
					<td>Numerador:</td>
					<td><input type="text" size="6" name="numerador1" required></td>
					<td>Numerador:</td>
					<td><input type="text" size="6" name="numerador2" required></td>
				</tr>
				<tr>
					<td>Denominador:</td>
					<td><input type="text" size="6" name="denominador1" required></td>
					<td>Denominador:</td>
					<td><input type="text" size="6" name="denominador2" required></td>
				</tr>
				<tr>
					<td>Operación:</td>
					<td>
						<br>
						<select name="operaciones">
							<option value="sumar">Suma</option>
							<option value="restar">Resta</option>
							<option value="multiplicar">Multiplicación</option>
							<option value="dividir">División</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Enviar"></td>
				</tr>
			</tbody>
		</table>
		</form>
	</center>
</body>
</html>