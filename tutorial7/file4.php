<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h1>Electricity Bill Calculator</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter the number of units consumed: <input type="number" name="units" value="<?php echo isset($_POST['units']) ? $_POST['units'] : '' ?>" min="1" required><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $units = $_POST["units"];
        if ($units <= 50) {
            $bill = $units * 3.50;
        } elseif ($units <= 150) {
            $bill = (50 * 3.50) + (($units - 50) * 4.00);
        } elseif ($units <= 250) {
            $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
        } else {
            $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
        }
        echo "<br><br>";
        echo "Total units consumed: " . $units . "<br>";
        echo "Electricity bill: Rs. " . $bill;
    }
    ?>
</body>
</html>
