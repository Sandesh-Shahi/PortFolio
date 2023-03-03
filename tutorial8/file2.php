<!DOCTYPE html>
<html>
<head>
	<title>Sum of Digits</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Enter a number: <input type="number" name="number">
		<input type="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num = $_POST["number"];

			$sum = 0;
			while ($num != 0) {
			    $digit = $num % 10;
			    $sum += $digit;
			    $num = (int)($num / 10);
			}

			echo "Sum of digits: $sum";
		}
	?>
</body>
</html>
