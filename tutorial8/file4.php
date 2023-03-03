<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sorting in PHP</title>
</head>
<body>
    <?php
    function bubble_sort(&$arr) {
        $n = count($arr);
        // Traverse through all array elements
        for ($i = 0; $i < $n; $i++) {
            // Last i elements are already in place
            for ($j = 0; $j < $n - $i - 1; $j++) {
                // Swap if the element found is greater than the next element
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    }

    // Example array to be sorted
    $arr = array(11, 22, 44, 19, 4, 5, 33, 16, 8, 55);

    // Call the bubble sort function
    bubble_sort($arr);

    // Print the sorted array
    echo "Sorted array is: ";
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . " ";
    }
    ?>
</body>
</html>
