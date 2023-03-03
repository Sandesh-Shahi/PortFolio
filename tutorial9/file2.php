<!DOCTYPE html>
<html>
<head>
  <title>Find the Greatest Number</title>
</head>
<body>
  <h1>Find the Greatest Number</h1>
  
  <form method="post">
    <label for="numbers">Enter a list of numbers (comma-separated):</label><br>
    <input type="text" name="numbers"><br><br>
    <input type="submit" value="Find Greatest Number">
  </form>
  
  <?php
    if (isset($_POST['numbers'])) {
      $numbers = explode(',', $_POST['numbers']);
      $numbers = array_map('trim', $numbers);
      $greatest = greaterNumber($numbers);
      echo "The greatest number is: " . $greatest;
    }
    
    function greaterNumber($nums) {
      $greatest = $nums[0];
      foreach($nums as $num) {
        $greatest = ($num > $greatest) ? $num : $greatest;
      }
      return $greatest;
    }
  ?>
  
</body>
</html>
