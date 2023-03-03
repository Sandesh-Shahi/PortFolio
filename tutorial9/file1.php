<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Factorial Calculator</title>
  </head>
  <body>
    <h1>Factorial Calculator</h1>
    <p>Enter a number to calculate its factorial:</p>
    <form action="" method="post">
      <input type="text" name="number" placeholder="Enter a number...">
      <button type="submit">Calculate</button>
    </form>
    
    <?php
      function factorial($n) {
          if ($n == 0) {
              return 1;
          } else {
              return $n * factorial($n-1);
          }
      }
      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];
        $factorial = factorial($number);
        echo "<p>The factorial of $number is $factorial</p>";
      }
    ?>
    
  </body>
</html>
