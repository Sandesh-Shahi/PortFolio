<!DOCTYPE html>
<html>
<head>
  <title>Car Price Finder</title>
</head>
<body>
  <h1>Car Price Finder</h1>
  <form method="post">
    <label for="company">Car Company:</label>
    <input type="text" id="company" name="company" required>
    <br>
    <label for="model">Car Model:</label>
    <input type="text" id="model" name="model" required>
    <br>
    <input type="submit" value="Find Price">
  </form>

  <?php
  // check if the form was submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get the user input
    $company = $_POST["company"];
    $model = $_POST["model"];

    // use switch case to find the price
    switch ($company) {
      case "Maruti":
        switch ($model) {
          case "Ertiga":
            $price = 850000;
            break;
          case "Swift":
            $price = 650000;
            break;
          default:
            $error = "Invalid model";
            break;
        }
        break;
      case "Hyundai":
        switch ($model) {
          case "i20":
            $price = 750000;
            break;
          case "Creta":
            $price = 1150000;
            break;
          default:
            $error = "Invalid model";
            break;
        }
        break;
      case "Kia":
        switch ($model) {
          case "Seltos":
            $price = 1050000;
            break;
          case "Carens":
            $price = 950000;
            break;
          default:
            $error = "Invalid model";
            break;
        }
        break;
      default:
        $error = "Invalid company";
        break;
    }

    // display the price or error message
    if (isset($price)) {
      echo "<p>The price of a $company $model is Rs. $price</p>";
    } else {
      echo "<p>$error</p>";
    }
  }
  ?>

</body>
</html>
