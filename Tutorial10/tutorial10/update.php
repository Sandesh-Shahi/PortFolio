<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbs = "tutorial10";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbs);


if(count($_POST)>0) {
mysqli_query($conn,"UPDATE rec set email='" . $_POST['email'] . "', password='" . $_POST['password'] . "' WHERE email ='" . $_POST['email'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM rec WHERE email='" . $_GET['email'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href=" ">List</a>
</div>
email: <br>
<input type="hidden" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<input type="text" name="email"  value="<?php echo $row['email']; ?>">
<br>

password:<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>


<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>