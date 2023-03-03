<!DOCTYPE html>
<html>
<head>
	<title>Addition of Two Matrices</title>
</head>
<body>
	<?php

	// Define the matrices as two-dimensional arrays
	$matrix1 = array(
	    array(1, 2),
	    array(3, 4)
	);

	$matrix2 = array(
	    array(5, 6),
	    array(7, 8)
	);

	// Display the matrices
	echo "<h2>Matrix 1:</h2>";
	echo "<table border='1'>";
	for ($i = 0; $i < 2; $i++) {
	    echo "<tr>";
	    for ($j = 0; $j < 2; $j++) {
	        echo "<td>" . $matrix1[$i][$j] . "</td>";
	    }
	    echo "</tr>";
	}
	echo "</table>";

	echo "<h2>Matrix 2:</h2>";
	echo "<table border='1'>";
	for ($i = 0; $i < 2; $i++) {
	    echo "<tr>";
	    for ($j = 0; $j < 2; $j++) {
	        echo "<td>" . $matrix2[$i][$j] . "</td>";
	    }
	    echo "</tr>";
	}
	echo "</table>";

	// Initialize an empty array to store the result
	$result = array(
	    array(0, 0),
	    array(0, 0)
	);

	// Loop through each element of the matrices and add them together
	for ($i = 0; $i < 2; $i++) {
	    for ($j = 0; $j < 2; $j++) {
	        $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
	    }
	}

	// Print the result
	echo "<h2>The sum of the matrices is:</h2>";
	echo "<table border='1'>";
	for ($i = 0; $i < 2; $i++) {
	    echo "<tr>";
	    for ($j = 0; $j < 2; $j++) {
	        echo "<td>" . $result[$i][$j] . "</td>";
	    }
	    echo "</tr>";
	}
	echo "</table>";

	?>
</body>
</html>
