<!DOCTYPE html>
<html>
<head>
	<title>Swap Two Variables in PHP</title>
</head>
<body>
	<?php
		// Define a function to swap two variables
		function swap($x, $y) {
		    $temp = $x;
		    $x = $y;
		    $y = $temp;
		    return array($x, $y);
		}

		// Test the swap function with two variables
		$a = 5;
		$b = 10;
		echo "Before swap: a = $a and b = $b<br>";

		list($a, $b) = swap($a, $b);

		echo "After swap: a = $a and b = $b";
	?>
</body>
</html>
