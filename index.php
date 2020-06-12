<!DOCTYPE html>
<html>  
<head>	
    <title>Operacines</title>
</head>
<body>
<?php>
<form method="POST" action="operaciones.php">
    <label>Ingrese el primer numero</label><br>
    <input type="number" name="numero1"><br>
    <label>Ingrese el segundo numero</label><br>
    <input type="number" name="numero2"><br>

<select name="operacion">
	<option value="sumar">Sumar</option>
	<option value="restar">Restar</option>	
	<option value="multiplicar">Multiplicar</option>
	<option value="dividir">Dividir</option>
</select>   
    <button type="submit">Ver resultado</button>	
</form>
?>
</body>
</html>
