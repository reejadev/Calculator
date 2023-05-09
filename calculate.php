<!DOCTYPE html>
<html>
<head>
	<title>Calculator App</title>
</head>
<body>
	<h2>Calculator App</h2>
	<?php
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operation = $_POST['operation'];
		if ($operation == 'add') {
			$result = $num1 + $num2;
			echo "<p>$num1 + $num2 = $result</p>";
		} elseif ($operation == 'subtract') {
			$result = $num1 - $num2;
			echo "<p>$num1 - $num2 = $result</p>";
		} elseif ($operation == 'multiply') {
			$result = $num1 * $num2;
			echo "<p>$num1 * $num2 = $result</p>";
		} elseif ($operation == 'divide') {
			$result = $num1 / $num2;
			echo "<p>$num1 / $num2 = $result</p>";
		} else {
			echo "<p>Invalid operation selected.</p>";
		}
	?>
	<a href="index.php">Back to Calculator</a>
</body>
</html>
