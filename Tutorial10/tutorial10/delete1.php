<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbs = "register";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbs);

$sql = "DELETE FROM regs WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>