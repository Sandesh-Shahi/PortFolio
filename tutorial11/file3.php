<!DOCTYPE html>
<html>
<head>
	<title>My Hobbies Form</title>
</head>
<body>

	<?php
		// Define variables and set to empty values
		$nameErr = "";
		$name = "";
		$hobbies = array();

		// Validate form data when the form is submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
			}

			if (isset($_POST["hobbies"])) {
				$hobbies = $_POST["hobbies"];
			}
		}

		// Helper function to sanitize and validate input data
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name">
		<span class="error">* <?php echo $nameErr;?></span>
		<br><br>
		Hobbies:<br>
		<input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
		<input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
		<input type="checkbox" name="hobbies[]" value="Music"> Music<br>
		<input type="checkbox" name="hobbies[]" value="Traveling"> Traveling<br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		// Print out the user's name and hobbies if form data is valid
		if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"])) {
			echo "<h2>Your Input:</h2>";
			echo "Your name is " . $name . "<br>";
			if (!empty($hobbies)) {
				echo "Your hobbies are: <br>";
				foreach($hobbies as $hobby) {
					echo $hobby . "<br>";
				}
			}
		}
	?>

</body>
</html>
