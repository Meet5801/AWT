<?php
$array1 = array("key1" => 50,"key2" => 70,"key3" => 30);
$array2 = array(50,20,40,30);
$array_brackets = ["50","20","40","30"];
echo "<br>";
echo "<br>";

// multidimensional array
echo "Multidimensional Array";

echo "<br>";
$array3 = array("first"=>array("first_first"=>50,"first_second"=>30,"first_third"=>70), 
"second" => array("second_first"=>150, "second_second"=>130, "second_third"=>170), 
"third" => array("third_first"=>250, "third_second"=>230, "third_third"=>270));

print_r($array1);
echo "<br>";
echo "<br>";
print_r($array2);
echo "<br>";
echo "<br>";
print_r($array_brackets);
echo "<br>";
echo "<br>";
print_r($array3);
echo "<br>";
echo "<br>";

$sort = sort($array1);
print_r($sort);
echo "<br>";
?>