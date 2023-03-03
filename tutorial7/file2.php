<!DOCTYPE html>
<html>
<head>
  <title>Find Maximum Number</title>
</head>
<body>
  <h1>Find Maximum Number</h1>
  <form method="post">
    <label for="num1">Enter the first number:</label>
    <input type="number" name="num1" id="num1">
    <br>
    <label for="num2">Enter the second number:</label>
    <input type="number" name="num2" id="num2">
    <br>
    <label for="num3">Enter the third number:</label>
    <input type="number" name="num3" id="num3">
    <br>
    <input type="submit" name="submit" value="Find Maximum">
  </form>
  
  <?php
    if(isset($_POST['submit'])){
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $num3 = $_POST['num3'];
      
      if($num1 > $num2 && $num1 > $num3){
        echo "$num1 is the maximum number";
      }
      elseif($num2 > $num1 && $num2 > $num3){
        echo "$num2 is the maximum number";
      }
      else{
        echo "$num3 is the maximum number";
      }
    }
  ?>
  
</body>
</html>
