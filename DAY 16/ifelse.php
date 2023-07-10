<?php
$value1 = 10;
$value2 = 25;
$value3 = 15;

if ($value1 >= $value2 && $value1 >= $value3) {
    $highestValue = $value1;
    if ($value2 >= $value3) {
        $mediumValue = $value2;
        $smallestValue = $value3;
    } else {
        $mediumValue = $value3;
        $smallestValue = $value2;
    }
} elseif ($value2 >= $value1 && $value2 >= $value3) {
    $highestValue = $value2;
    if ($value1 >= $value3) {
        $mediumValue = $value1;
        $smallestValue = $value3;
    } else {
        $mediumValue = $value3;
        $smallestValue = $value1;
    }
} else {
    $highestValue = $value3;
    if ($value1 >= $value2) {
        $mediumValue = $value1;
        $smallestValue = $value2;
    } else {
        $mediumValue = $value2;
        $smallestValue = $value1;
    }
}

echo "The highest value is: " . $highestValue . "<br>";
echo "The medium value is: " . $mediumValue . "<br>";
echo "The smallest value is: " . $smallestValue;
?>
