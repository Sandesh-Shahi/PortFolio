<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Series using Do-While Loop in PHP</title>
</head>
<body>
	<form method="post">
		<label>Enter the number of terms: </label>
		<input type="text" name="num_terms">
		<input type="submit" name="submit" value="Generate Fibonacci Series">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$num_terms = $_POST['num_terms'];
		$a = 0;
		$b = 1;
		$count = 0;

		echo "Fibonacci Series up to {$num_terms} terms:<br>";

		do {
			echo $a." ";

			$sum = $a + $b;
			$a = $b;
			$b = $sum;
			$count++;
		} while ($count < $num_terms);
	}
	?>
</body>
</html>
