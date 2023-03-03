<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbs = "register";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbs);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


		
if (isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['repassword'])  && isset($_POST['country'])   && isset($_POST['age'])) {
		
        $name = $_POST['name'];
        $email = $_POST['email'];
		$pass = $_POST['password'];
        $repass = $_POST['repassword'];
		$country = $_POST['country'];
        $age = $_POST['age'];
        

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO regs(name,email,password,conform_password,country,age) VALUES ('$name','$email','$pass','$repass','$country','$age')";
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