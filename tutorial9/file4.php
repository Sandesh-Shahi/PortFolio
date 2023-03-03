<!DOCTYPE html>
<html>
  <head>
    <title>Swap Numbers using Call by Reference</title>
  </head>
  <body>
    <?php
      function swap_numbers(&$x, &$y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
      }

      $a = 5;
      $b = 10;

      echo "Before swapping: a = $a, b = $b<br>";

      swap_numbers($a, $b);

      echo "After swapping: a = $a, b = $b";
    ?>
  </body>
</html>
