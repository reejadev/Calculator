<!DOCTYPE html>
<html>
<head>
	<title>Calculator App</title>
</head>
<body>
	<h2>Calculator App</h2>
	<form method="post" action="calculate.php">
		<label>Enter first number:</label>
		<input type="number" name="num1" required>
		<br>
		<label>Select operation:</label>
		<select name="operation">
			<option value="add">Addition (+)</option>
			<option value="subtract">Subtraction (-)</option>
			<option value="multiply">Multiplication (*)</option>
			<option value="divide">Division (/)</option>
		</select>
		<br>
		<label>Enter second number:</label>
		<input type="number" name="num2" required>
		<br>
		<button type="submit">Calculate</button>
	</form>
</body>
</html>
