<!DOCTYPE html>
<html>  
<head>	
    <meta charset="UTF-8">
    <title>Operacines</title>
</head>
<body>
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
</body>
</html>