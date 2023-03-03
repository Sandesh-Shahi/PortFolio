<html>
<head>
	<title>Student Grade Calculator</title>
</head>
<body>

	<h1>Student Grade Calculator</h1>

	<form method="post">
		<label for="subject1">Subject 1:</label>
		<input type="number" id="subject1" name="subject1" required><br>

		<label for="subject2">Subject 2:</label>
		<input type="number" id="subject2" name="subject2" required><br>

		<label for="subject3">Subject 3:</label>
		<input type="number" id="subject3" name="subject3" required><br>

		<label for="subject4">Subject 4:</label>
		<input type="number" id="subject4" name="subject4" required><br>

		<label for="subject5">Subject 5:</label>
		<input type="number" id="subject5" name="subject5" required><br>

		<input type="submit" value="Calculate">
	</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$subject1 = $_POST['subject1'];
		$subject2 = $_POST['subject2'];
		$subject3 = $_POST['subject3'];
		$subject4 = $_POST['subject4'];
		$subject5 = $_POST['subject5'];

		$totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
		$percentage = $totalMarks / 5;

		echo "<h2>Results:</h2>";
		echo "<p>Total Marks Obtained: " . $totalMarks . "</p>";
		echo "<p>Percentage: " . $percentage . "%</p>";

		switch(true) {
			case ($percentage >= 90):
				$grade = "A+";
				break;
			case ($percentage >= 80):
				$grade = "A";
				break;
			case ($percentage >= 70):
				$grade = "B";
				break;
			case ($percentage >= 60):
				$grade = "C";
				break;
			case ($percentage >= 50):
				$grade = "D";
				break;
			default:
				$grade = "F";
		}

		echo "<p>Grade: " . $grade . "</p>";
	}

	?>

</body>
</html>
