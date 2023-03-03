<?php

// Check if the form has been submitted
if(isset($_POST['submit'])) {
  
  // Get the values from the form
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  // Check if the input values are numeric
  if(is_numeric($num1) && is_numeric($num2)) {
    
    // Perform the calculation based on the selected operator
    switch($operator) {
      case "add":
        $result = $num1 + $num2;
        break;
      case "subtract":
        $result = $num1 - $num2;
        break;
      case "multiply":
        $result = $num1 * $num2;
        break;
      case "divide":
        $result = $num1 / $num2;
        break;
      default:
        $result = "Invalid operator";
    }
    
    // Display the result
    echo "Result: ".$result;
  } else {
    echo "Please enter valid numeric values";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator in PHP</title>
</head>
<body>
  
  <h1>Simple Calculator in PHP</h1>

  <form method="post" action="">
    <label>Number 1:</label>
    <input type="number" name="num1"><br><br>

    <label>Number 2:</label>
    <input type="number" name="num2"><br><br>

    <label>Operator:</label>
    <select name="operator">
      <option value="add">Addition</option>
      <option value="subtract">Subtraction</option>
      <option value="multiply">Multiplication</option>
      <option value="divide">Division</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
  </form>

</body>
</html>
