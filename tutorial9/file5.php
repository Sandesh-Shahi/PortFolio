<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Vowel Count</title>
  </head>
  <body>
    <h1>Vowel Count</h1>
    
    <?php
      // Define the vowelCount function
      function vowelCount($string) {
        $count = 0;
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        
        // Loop through each character in the string
        for ($i = 0; $i < strlen($string); $i++) {
          // Check if the current character is a vowel
          if (in_array($string[$i], $vowels)) {
            $count++;
          }
        }
        
        // Return the count of vowels
        return $count;
      }
      
      // Check if the form has been submitted
      if (isset($_POST['submit'])) {
        // Get the user input from the form
        $user_input = $_POST['user_input'];
        
        // Count the number of vowels in the user input
        $vowel_count = vowelCount($user_input);
        
        // Display the result
        echo "<p>There are " . $vowel_count . " vowels in the string '" . $user_input . "'</p>";
      }
    ?>
    
    <form method="post">
      <label for="user_input">Enter a string:</label>
      <input type="text" id="user_input" name="user_input">
      <input type="submit" name="submit" value="Count Vowels">
    </form>
  </body>
</html>
