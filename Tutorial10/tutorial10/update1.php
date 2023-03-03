<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbs = "register";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbs);


if(count($_POST)>0) {
mysqli_query($conn,"UPDATE regs set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', password='" . $_POST['password'] . "', conform_password='" . $_POST['password'] . "' ,country='" . $_POST['country'] . "',age='" . $_POST['age'] . "' WHERE email='" . $_POST['email'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM regs WHERE email='" . $_GET['email'] . "'");
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
<a href="">List</a>
</div>
name: <br>
<input type="hidden" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<input type="text" name="name"  value="<?php echo $row['name']; ?>">
<br>
email: <br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
password:<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
repassword:<br>
<input type="text" name="repassword" class="txtField" value="<?php echo $row['conform_password']; ?>">
<br>
country:<br>
<input type="text" name="country" class="txtField" value="<?php echo $row['country']; ?>">
<br>
age:<br>
<input type="text" name="age" class="txtField" value="<?php echo $row['age']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>