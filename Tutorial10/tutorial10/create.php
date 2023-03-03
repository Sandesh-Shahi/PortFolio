<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
		<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "tutorial10";

		$conn = mysqli_connect("localhost", "root", "", "tutorial10");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		else{
			echo "ok";
		}
		
if (isset($_POST['email']) && isset($_POST['password'])) {
		
		$uname = $_POST['email'];
		$pass = $_POST['password'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO rec(email,password) VALUES ('$uname','$pass')";
		$res = mysqli_query($conn, $sql);
		
		if ($res) {
			echo "Your data is saved ";
		}else {
			echo "Your message could not be sent!";
		}
		
		// Close connection
		mysqli_close($conn);

	}
		?>
	
</body>

</html>
