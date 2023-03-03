<!DOCTYPE html>
<html>
<head>
    <title>Associative Arrays and foreach Loop in PHP</title>
</head>
<body>
    <?php
    // Define an associative array of fruits and their prices
    $fruits = array(
        "apple" => 75,
        "banana" => 60,
        "orange" => 80,
        "pear" => 70
    );

    // Display the contents of the array using print_r
    echo "The \$fruits array contains:<br>";
    echo "<pre>";
    print_r($fruits);
    echo "</pre>";

    // Loop through the array using a foreach loop
    foreach($fruits as $fruit => $price) {
        echo "A $fruit costs $price dollars.<br>";
    }
    ?>
</body>
</html>
