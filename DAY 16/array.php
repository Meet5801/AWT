<?php
$array1 = array("key1" => 20, "key2" => 50, "key3" => 30);
var_dump($array1);
echo '<br>';

$array2 = array(20, 50, 30);
var_dump($array2);
echo '<br>';

$array_brackets = ["value1", "value2", "value3"];
var_dump($array_brackets);
echo '<br>';
echo '<br>';


// multidimensional array
echo "multidimensional array";
echo "<br>";
$array3 = array("first"=>array("first_first"=>50,"first_second"=>30,"first_third"=>70), 
"second" => array("second_first"=>150, "second_second"=>130, "second_third"=>170), 
"third" => array("third_first"=>250, "third_second"=>230, "third_third"=>270));
var_dump($array3);
echo "<br>";
?>