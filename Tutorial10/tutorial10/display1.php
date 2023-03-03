<!---to display the fetched data drom database-->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'register';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM regs ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>records</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            background: lightblue;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-size: larger;
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        
    </style>
</head>
 
<body>
    <section>
        <h1>Data saved</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr style="background-color:#E4F5D4;font-size:x-large">
            <th>id</th>
              <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>re_password</th>
                <th>country</th>
                <th>age</th>
                <th>operations</th>
               
               
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">

    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    
	<td><?php echo $row["email"]; ?></td>
	
	<td><?php echo $row["password"]; ?></td>
    <td><?php echo $row["conform_password"]; ?></td>
    <td><?php echo $row["country"]; ?></td>
    <td><?php echo $row["age"]; ?></td>


	<td >
    <button ><a style="font-size:larger ; color:red"  href="delete1.php?id=<?php echo $row["id"]; ?>">Delete</a></button>
   <button> <a style="font-size:larger ; color:red"  href="update1.php?email=<?php echo $row["email"]; ?>">Update</a></button>
    </td>

	</tr>
	<?php
	$i++;
	}
	?>
        </table>
    </section>
</body>
 
</html>