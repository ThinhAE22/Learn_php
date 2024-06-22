<?php

$numbers = $_GET['numbers'];
$arr = explode(',', $numbers);

echo "Order in the beginning: $numbers\n";

// Sorting the array in ascending order (Bubble Sort)
$lowest_greatest_arr = $arr;
$n = count($lowest_greatest_arr);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($lowest_greatest_arr[$j] > $lowest_greatest_arr[$j + 1]) {
            // Swap $lowest_greatest_arr[$j] and $lowest_greatest_arr[$j + 1]
            $temp = $lowest_greatest_arr[$j];
            $lowest_greatest_arr[$j] = $lowest_greatest_arr[$j + 1];
            $lowest_greatest_arr[$j + 1] = $temp;
        }
    }
}

// Sorting the array in descending order (Bubble Sort)
$greatest_lowest_arr = $arr;
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($greatest_lowest_arr[$j] < $greatest_lowest_arr[$j + 1]) {
            // Swap $greatest_lowest_arr[$j] and $greatest_lowest_arr[$j + 1]
            $temp = $greatest_lowest_arr[$j];
            $greatest_lowest_arr[$j] = $greatest_lowest_arr[$j + 1];
            $greatest_lowest_arr[$j + 1] = $temp;
        }
    }
}

$lowest_greatest = implode(" ", $lowest_greatest_arr);
$greatest_lowest = implode(" ", $greatest_lowest_arr);

echo "Order after sorting (lowest to greatest): $lowest_greatest\n";
echo "Order after sorting (greatest to lowest): $greatest_lowest\n";

?>
